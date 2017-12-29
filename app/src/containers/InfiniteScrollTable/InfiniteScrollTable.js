import React, { Component } from 'react';
import PropTypes from 'prop-types';

import InfiniteScroll from '../../hoc/InfiniteScroll/InfiniteScroll';
import style from './InfiniteScrollTable.css';

class InfiniteScrollTable extends Component {
    static propTypes = {
        columns: PropTypes.shape({
            header: PropTypes.oneOfType([
                PropTypes.element,
                PropTypes.string,
                PropTypes.func,
            ]),
            className: PropTypes.string,
            style: PropTypes.object,
            headerClassName:  PropTypes.string,
            headerStyle:  PropTypes.object,
            footerClassName:  PropTypes.string,
            footerStyle:  PropTypes.object,
        }),
        data: PropTypes.array,
        hasMore: PropTypes.bool,
        loadMore: PropTypes.func,
    }

    static defaultProps = {
        columns: {},
        data: [],
        hasMore: false,
        loadMore: () => ({}),
    };

    state = {
        resizing: false,
        resized: {},
    }

    columnResizingStart = (event, columnKey) => {
        event.stopPropagation();

        this.setState({
            resizing: {
                columnKey: columnKey,
                startX: this.getPointerX(event),
            }
        });

        document.addEventListener('mousemove', this.columnResizing);
        document.addEventListener('touchmove', this.columnResizing);

        document.addEventListener('mouseup', this.columnResizingEnd);
        document.addEventListener('touchend', this.columnResizingEnd);
        document.addEventListener('mouseleave', this.columnResizingEnd);
        document.addEventListener('touchcancel', this.columnResizingEnd);
    }

    columnResizing = (event) => {
        event.stopPropagation();

        let pageX = this.getPointerX(event);
        const { resizing, resized } = this.state;
        let currWidth = resized[resizing.columnKey] || this.props.columns[resizing.columnKey].width || 100;
        const newWidth = Math.max(
            (currWidth + pageX - resizing.startX),
            11,
        );

        this.setState({
            resizing: {
                ...resizing,
                startX: pageX,
            },
            resized: {
                ...resized,
                [resizing.columnKey]: newWidth,
            },
        });
    }

    columnResizingEnd = (event) => {
        event.stopPropagation();

        document.removeEventListener('mousemove', this.columnResizing);
        document.removeEventListener('touchmove', this.columnResizing);

        document.removeEventListener('mouseup', this.columnResizingEnd);
        document.removeEventListener('touchend', this.columnResizingEnd);
        document.removeEventListener('mouseleave', this.columnResizingEnd);
        document.removeEventListener('touchcancel', this.columnResizingEnd);

        this.setState({
            resizing: false,
        });
    }

    getPointerX = (event) => {
        if (event.type.indexOf('touch') === 0) {
			return (event.touches[0] || event.changedTouches[0]).pageX;
		}
        return event.pageX;
    }

    renderHeader() {
        return (
            <div className={style.header}>
                { Object.keys(this.props.columns).map((columnKey) => {
                    const column = this.props.columns[columnKey];
                    return (
                        <div
                            key={columnKey}
                            className={style.headerCell}
                            style={{
                                ...column.headerStyle || {},
                                width: this.state.resized[columnKey] || column.width || '100px',
                                maxWidth: this.state.resized[columnKey] || column.width || '100px',
                            }}
                        >
                            <div
                                className={style.headerContent}
                            >
                                { column.header || columnKey }
                            </div>
                            <div
                                className={style.resizer}
                                onMouseDown={(event) => this.columnResizingStart(event, columnKey)}
                                onTouchStart={(event) => this.columnResizingStart(event, columnKey)}
                            />
                        </div>
                    );
                }) }
            </div>
        );
    }

    renderBody() {
        let rows = null;
        if (this.props.data) {
            rows = this.props.data.map((row) => (
                <div
                    key={row.id}
                    className={style.row}
                    style={{
                    }}
                >
                    { Object.keys(this.props.columns).map((columnKey) => {
                        const column = this.props.columns[columnKey];
                        return (
                            <div
                                key={columnKey}
                                className={style.bodyCell}
                                style={{
                                    ...column.style || {},
                                    width: this.state.resized[columnKey] || column.width || '100px',
                                    maxWidth: this.state.resized[columnKey] || column.width || '100px',
                                }}
                            >
                                {row[column.field]}
                            </div>
                        );
                    })}
                </div>
            ));
        }

        return (
            <InfiniteScroll
                className={style.body}
                style={{
                }}
                hasMore={this.props.hasMore}
                loadMore={() => this.props.loadMore()}
            >
                { rows }
            </InfiniteScroll>
        );
    }

    renderFooter() {
        return (
            <div style={{
                flex: "0 0 auto",
            }}>
            </div>
        );
    }

    render() {
        return (
            <div
                className={style.InfiniteScrollTable}
                style={{
                    height: 500,
                }}
            >
                { this.renderHeader() }
                { this.renderBody() }
            </div>
        );
    }
}

export default InfiniteScrollTable;
