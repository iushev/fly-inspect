import React, { Component } from 'react';
import { Link } from 'react-router-dom';

import Aux from '../Aux/Aux';
import classes from './Layout.css';

class Layout extends Component {
    state = {
    }

    render () {
        return (
            <Aux>
                <nav>
                    <ul>
                        <li><Link to='/'>Dashboard</Link></li>
                        <li><Link to='/objects'>Objects</Link></li>
                        <li><Link to='/work-orders'>Work Orders</Link></li>
                    </ul>
                </nav>
                <main className={classes.Content}>
                    {this.props.children}
                </main>
            </Aux>
        )
    }
}

export default Layout;
