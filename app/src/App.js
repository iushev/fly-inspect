import React, { Component } from 'react';
import { Route, Switch, withRouter, Redirect } from 'react-router-dom';

import asyncComponent from './hoc/asyncComponent';
import Dashboard from './containers/Dashboard/Dashboard';

const Objects = asyncComponent(() => {
    return import('./containers/Objects/Objects.js');
});

const WorkOrders = asyncComponent(() => {
    return import('./containers/WorkOrders/WorkOrders.js');
});

class App extends Component {
    render() {
        return (
            <Switch>
                <Route path={`${this.props.match.path}dashboard`} exact component={Dashboard} />
                <Route path={`${this.props.match.path}objects`} exact component={Objects} />
                <Route path={`${this.props.match.path}work-orders`} exact component={WorkOrders} />
                <Redirect to={`${this.props.match.path}dashboard`} />
            </Switch>
        );
    }
}

export default withRouter(App);
