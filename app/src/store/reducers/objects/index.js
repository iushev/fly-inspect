import { combineReducers } from 'redux';
import data from './data';
import hasMore from './hasMore';
import next from './next';
import loading from './loading';
import error from './error';

export default combineReducers({
    data,
    hasMore,
    next,
    loading,
    error,
});
