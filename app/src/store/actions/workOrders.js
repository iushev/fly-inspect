import axios from '../../axios-fly-inspect';

export const FETCHING_WORK_ORDERS = 'FETCHING_WORK_ORDERS';
export const RECEIVE_WORK_ORDERS = 'RECEIVE_WORK_ORDERS';
export const FETCHING_WORK_ORDERS_ERROR = 'FETCHING_WORK_ORDERS_ERROR';
export const CLEAR_WORK_ORDERS = 'CLEAR_WORK_ORDERS';

const fetchingWorkOrders = () => ({
    type: FETCHING_WORK_ORDERS,
});

const receiveWorkOrders = (workOrders) => ({
    type: RECEIVE_WORK_ORDERS,
    workOrders,
});

const fetchingWorkOrdersError = (error) => ({
    type: FETCHING_WORK_ORDERS_ERROR,
    error,
});

export const fetchWorkOrders = (params = {}) => {
    return dispatch => {
        dispatch(fetchingWorkOrders());
        return axios.get('event/', {
            params: params
        })
            .then((response) => {
                dispatch(receiveWorkOrders(response.data));
                return response;
            })
            .catch((err) => {
                console.log(err);
                dispatch(fetchingWorkOrdersError(err.message));
                return err;
            });
    };
};

export const clearWorkOrders = () => ({
    type: CLEAR_WORK_ORDERS,
});
