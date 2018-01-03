import axios from '../../axios-fly-inspect';

export const FETCHING_OBJECTS = 'FETCHING_OBJECTS';
export const RECEIVE_OBJECTS = 'RECEIVE_OBJECTS';
export const FETCHING_OBJECTS_ERROR = 'FETCHING_OBJECTS_ERROR';
export const CLEAR_OBJECTS = 'CLEAR_OBJECTS';

const fetchingObjects = () => ({
    type: FETCHING_OBJECTS,
});

const receiveObjects = (objects) => ({
    type: RECEIVE_OBJECTS,
    objects,
});

const fetchingObjectsError = (error) => ({
    type: FETCHING_OBJECTS_ERROR,
    error,
});

export const fetchObjects = (params = {}) => {
    return dispatch => {
        dispatch(fetchingObjects());
        return axios.get('r5objects/', {
            params: params
        })
            .then((response) => {
                dispatch(receiveObjects(response.data));
                return response;
            })
            .catch((err) => {
                dispatch(fetchingObjectsError(err.message));
                return err;
            });
    };
};

export const clearObjects = () => ({
    type: CLEAR_OBJECTS,
});
