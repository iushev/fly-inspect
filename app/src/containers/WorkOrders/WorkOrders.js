import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import urlParse from 'url-parse';

import Layout from '../../hoc/Layout/Layout';
import {
    fetchWorkOrders,
    clearWorkOrders,
} from '../../store/actions/workOrders';
import InfiniteScrollTable from '../InfiniteScrollTable/InfiniteScrollTable';

class WorkOrders extends Component {
    static propTypes = {
        fetchWorkOrders: PropTypes.func.isRequired,
        clearWorkOrders: PropTypes.func.isRequired,
        hasMore: PropTypes.bool,
        next: PropTypes.string,
    }

    componentWillUnmount() {
        this.props.clearWorkOrders();
    }

    fetchWorkOrders = () => {
        const parsed = urlParse(this.props.next);
        const params = urlParse.qs.parse(parsed.query);
        this.props.fetchWorkOrders(params);
    }

    render() {
        return (
            <Layout>
                <h1>Work Orders</h1>

                <InfiniteScrollTable
                    columns={{
                        code: {
                            header: 'Code',
                            field: 'fld_code',
                        },
                        description: {
                            header: 'Description',
                            field: 'fld_description',
                            width: 300,
                        },
                    }}
                    data={this.props.workOrders}
                    hasMore={this.props.hasMore}
                    loadMore={() => this.fetchWorkOrders()}
                />
            </Layout>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        workOrders: state.workOrders.data,
        hasMore: state.workOrders.hasMore,
        next: state.workOrders.next,
    };
};

const mapDispatchToProps = (dispatch) => {
    return {
        fetchWorkOrders: (params) => dispatch(fetchWorkOrders(params)),
        clearWorkOrders: () => dispatch(clearWorkOrders()),
    };
};

export default connect(mapStateToProps, mapDispatchToProps)(WorkOrders);
