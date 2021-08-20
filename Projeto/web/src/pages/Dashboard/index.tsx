import Header from '../../components/Header';
import SideBar from '../../components/SideBar';

import { useSignMenu } from '../../hooks/toggle';

import { Container, Content } from './styles';

export function Dashboard() {
  const { handleChangeActivatedMenu } = useSignMenu();
  handleChangeActivatedMenu('dashboard');

  return (
    <Container>
      <Header />

      <Content>
        <SideBar />
      </Content>
    </Container>
  );
};

export default Dashboard;
