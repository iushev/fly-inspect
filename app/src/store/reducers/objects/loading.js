import {
    FETCHING_OBJECTS,
    RECEIVE_OBJECTS,
    FETCHING_OBJECTS_ERROR,
    CLEAR_OBJECTS,
} from '../../actions/objects';

const reducer = (state = false, action) => {
    switch (action.type) {
        case FETCHING_OBJECTS:
            return true;
        case RECEIVE_OBJECTS:
        case FETCHING_OBJECTS_ERROR:
        case CLEAR_OBJECTS:
            return false;
        default:
             return state;
    }
};

export default reducer;
