import React from 'react';
import { BrowserRouter, Switch } from 'react-router-dom';

import Route from './Route';

import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';
import Users from '../pages/Users';

const Routes: React.FC = () => {
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/" exact component={Login} />

        <Route path="/dashboard" exact component={Dashboard} isPrivate />

        <Route path="/users" exact component={Users} isPrivate />
      </Switch>
    </BrowserRouter>
  );
};

export default Routes;