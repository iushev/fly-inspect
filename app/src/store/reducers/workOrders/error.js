import {
    FETCHING_WORK_ORDERS,
    RECEIVE_WORK_ORDERS,
    FETCHING_WORK_ORDERS_ERROR,
    CLEAR_WORK_ORDERS,
} from '../../actions/workOrders';

const reducer = (state = null, action) => {
    switch (action.type) {
        case FETCHING_WORK_ORDERS:
        case RECEIVE_WORK_ORDERS:
        case CLEAR_WORK_ORDERS:
            return null;
        case FETCHING_WORK_ORDERS_ERROR:
            return action.error;
        default:
            return state;
    }
};

export default reducer;
