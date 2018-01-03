import {
    RECEIVE_OBJECTS,
    CLEAR_OBJECTS,
} from '../../actions/objects';

const reducer = (state = [], action) => {
    switch (action.type) {
        case RECEIVE_OBJECTS:
            return [
                ...state,
                ...action.objects.results,
            ];
        case CLEAR_OBJECTS:
            return [];
        default: return state;
    }
};

export default reducer;
