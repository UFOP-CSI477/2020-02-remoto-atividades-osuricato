import React from 'react';
import { BrowserRouter, Switch } from 'react-router-dom';

import Route from './Route';

// import Login from '../pages/Login';

const Routes: React.FC = () => {
  return (
    <BrowserRouter>
      <Switch>
        {/* <Route path="/" exact component={Login} /> */}
        {/* <Route path="/login/reset-password" exact component={ResetPassword} />
        <Route path="/login/new-password" exact component={NewPassword} />
        <Route path="/dashboard" exact component={Dashboard} isPrivate /> */}
        {/* <Route path="/profile" exact component={Profile} isPrivate /> */}
        {/* <Route
          path="/administration/profiles"
          exact
          component={Profiles}
          isPrivate
        /> */}
      </Switch>
    </BrowserRouter>
  );
};

export default Routes;