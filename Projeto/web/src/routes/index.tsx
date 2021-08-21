import React from 'react';
import { BrowserRouter, Switch } from 'react-router-dom';

import Route from './Route';

import Login from '../pages/Login';

import Dashboard from '../pages/Dashboard';

import Users from '../pages/Users';
import CreateUser from '../pages/Users/CreateUser';
import EditUser from '../pages/Users/EditUser';

import Categories from '../pages/Categories';
import CreateCategory from '../pages/Categories/CreateCategory';
import EditCategory from '../pages/Categories/EditCategory';

const Routes: React.FC = () => {
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/" exact component={Login} />

        <Route path="/dashboard" exact component={Dashboard} isPrivate />

        <Route path="/users" exact component={Users} isPrivate />
        <Route path="/users/create-user" exact component={CreateUser} isPrivate />
        <Route path="/users/edit-user" exact component={EditUser} isPrivate />

        <Route path="/categories" exact component={Categories} isPrivate />
        <Route path="/categories/create-category" exact component={CreateCategory} isPrivate />
        <Route path="/categories/edit-category" exact component={EditCategory} isPrivate />

      </Switch>
    </BrowserRouter>
  );
};

export default Routes;