import {
    RECEIVE_OBJECTS,
    FETCHING_OBJECTS_ERROR,
    CLEAR_OBJECTS,
} from '../../actions/objects';

const reducer = (state = null, action) => {
    switch (action.type) {
        case RECEIVE_OBJECTS:
            return action.objects.next;
        case FETCHING_OBJECTS_ERROR:
        case CLEAR_OBJECTS:
            return null;
        default:
             return state;
    }
};

export default reducer;
