import { combineReducers } from 'redux';
import auth from './auth';
import objects from './objects';
import workOrders from './workOrders';

export default combineReducers({
    auth,
    objects,
    workOrders,
});
