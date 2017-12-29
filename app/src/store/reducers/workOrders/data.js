import {
    RECEIVE_WORK_ORDERS,
    CLEAR_WORK_ORDERS,
} from '../../actions/workOrders';

const reducer = (state = [], action) => {
    switch (action.type) {
        case RECEIVE_WORK_ORDERS:
            return [
                ...state,
                ...action.workOrders.results,
            ];
        case CLEAR_WORK_ORDERS:
            return [];
        default: return state;
    }
};

export default reducer;
