import { Route, BrowserRouter } from 'react-router-dom';

import Home from './pages/Home';
// import createPoint from './pages/CreatePoint';

const Routes = () => {

  return (
    <BrowserRouter>
      <Route component={Home} path="/" exact />
      {/* <Route component={createPoint} path="/create-point" /> */}
    </BrowserRouter>
  )

}

export default Routes;