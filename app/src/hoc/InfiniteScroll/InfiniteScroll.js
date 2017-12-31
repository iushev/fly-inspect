import React, { Component } from 'react';
import PropTypes from 'prop-types';

class InfiniteScroll extends Component {
    static propTypes = {
        children: PropTypes.oneOfType([
            PropTypes.object,
            PropTypes.array
        ]).isRequired,
        loadMore: PropTypes.func,
        hasMore: PropTypes.bool,
        ref: PropTypes.func,
        threshold: PropTypes.number,
        onScroll: PropTypes.func,
    };

    static defaultProps = {
        hasMore: false,
        ref: null,
        threshold: 250,
        onScroll: (scroll) => ({}),
    };

    hasMore = true;

    componentDidMount() {
        this.props.loadMore();
    }

    componentDidUpdate() {
        if (this.props.hasMore &&
            this.scrollComponent.clientHeight + this.props.threshold > this.scrollComponent.scrollHeight
        ) {
            this.props.loadMore();
            return;
        }

        this.attachScrollHandler();
    }

    componentWillUnmount() {
        this.dettachScrollHandler();
    }

    attachScrollHandler = () => {
        this.scrollComponent.addEventListener(
            'scroll',
            this.scrollHandler
        );
    }

    dettachScrollHandler = () => {
        this.scrollComponent.removeEventListener(
            'scroll',
            this.scrollHandler
        );
    }

    scrollHandler = (event) => {
        // this.props.onScroll({
        //     scrollTop,
        //     scrollLeft,
        // });

        if (!this.props.hasMore) {
            return;
        }

        let scrollTop = event.target.scrollTop || document.body.scrollTop;
        let scrollHeight = event.target.scrollHeight || document.body.scrollHeight;
        let clientHeight = event.target.clientHeight || window.innerHeight;
        let scrolledToBottom = Math.ceil(scrollTop + clientHeight + this.props.threshold) >= scrollHeight;

        if (scrolledToBottom) {
            this.dettachScrollHandler();
            this.props.loadMore();
        }
    }

    render() {
        const {
            children,
            loadMore,
            hasMore,
            ref,
            style,
            ...props
        } = this.props;

        return (
            <div
                ref={(infScroll) => {
                    this.scrollComponent = infScroll;
                    if (ref) {
                        ref(infScroll);
                    }
                }}
                style = {{
                    overflow: 'auto',
                    ...style,
                }} {...props}>
                {children}
            </div>
        );
    }
}

export default InfiniteScroll;