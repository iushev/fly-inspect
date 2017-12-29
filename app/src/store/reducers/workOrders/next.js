import {
    RECEIVE_WORK_ORDERS,
    FETCHING_WORK_ORDERS_ERROR,
    CLEAR_WORK_ORDERS,
} from '../../actions/workOrders';

const reducer = (state = null, action) => {
    switch (action.type) {
        case RECEIVE_WORK_ORDERS:
            return action.workOrders.next;
        case FETCHING_WORK_ORDERS_ERROR:
        case CLEAR_WORK_ORDERS:
            return null;
        default:
             return state;
    }
};

export default reducer;
