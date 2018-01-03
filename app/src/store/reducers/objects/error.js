import {
    FETCHING_OBJECTS,
    RECEIVE_OBJECTS,
    FETCHING_OBJECTS_ERROR,
    CLEAR_OBJECTS,
} from '../../actions/objects';

const reducer = (state = null, action) => {
    switch (action.type) {
        case FETCHING_OBJECTS:
        case RECEIVE_OBJECTS:
        case CLEAR_OBJECTS:
            return null;
        case FETCHING_OBJECTS_ERROR:
            return action.error;
        default:
            return state;
    }
};

export default reducer;
