import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import urlParse from 'url-parse';

import Layout from '../../hoc/Layout/Layout';
import {
    fetchObjects,
    clearObjects,
} from '../../store/actions/objects';
import InfiniteScrollTable from '../InfiniteScrollTable/InfiniteScrollTable';

class Objects extends Component {
    static propTypes = {
        fetchObjects: PropTypes.func.isRequired,
        clearObjects: PropTypes.func.isRequired,
        hasMore: PropTypes.bool,
        next: PropTypes.string,
    }

    componentWillUnmount() {
        this.props.clearObjects();
    }

    fetchObjects = () => {
        const parsed = urlParse(this.props.next);
        const params = urlParse.qs.parse(parsed.query);
        this.props.fetchObjects(params);
    }

    render() {
        return (
            <Layout>
                <h1>Objects</h1>
                <InfiniteScrollTable
                    columns={{
                        code: {
                            header: 'Code',
                            field: 'obj_code',
                        },
                        description: {
                            header: 'Description',
                            field: 'obj_desc',
                            width: 300,
                        },
                    }}
                    data={this.props.objects}
                    hasMore={this.props.hasMore}
                    loadMore={() => this.fetchObjects()}
                />
            </Layout>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        objects: state.objects.data,
        hasMore: state.objects.hasMore,
        next: state.objects.next,
    };
};

const mapDispatchToProps = (dispatch) => {
    return {
        fetchObjects: (params) => dispatch(fetchObjects(params)),
        clearObjects: () => dispatch(clearObjects()),
    };
};

export default connect(mapStateToProps, mapDispatchToProps)(Objects);
