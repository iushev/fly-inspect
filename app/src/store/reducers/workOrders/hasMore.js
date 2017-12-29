import {
    RECEIVE_WORK_ORDERS,
    FETCHING_WORK_ORDERS_ERROR,
    CLEAR_WORK_ORDERS,
} from '../../actions/workOrders';

const reducer = (state = true, action) => {
    switch (action.type) {
        case RECEIVE_WORK_ORDERS:
            return action.workOrders.next !== null;
        case FETCHING_WORK_ORDERS_ERROR:
        case CLEAR_WORK_ORDERS:
            return true;
        default:
             return state;
    }
};

export default reducer;
