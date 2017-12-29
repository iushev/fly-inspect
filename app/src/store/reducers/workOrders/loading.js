import {
    FETCHING_WORK_ORDERS,
    RECEIVE_WORK_ORDERS,
    FETCHING_WORK_ORDERS_ERROR,
    CLEAR_WORK_ORDERS,
} from '../../actions/workOrders';

const reducer = (state = false, action) => {
    switch (action.type) {
        case FETCHING_WORK_ORDERS:
            return true;
        case RECEIVE_WORK_ORDERS:
        case FETCHING_WORK_ORDERS_ERROR:
        case CLEAR_WORK_ORDERS:
            return false;
        default:
             return state;
    }
};

export default reducer;
