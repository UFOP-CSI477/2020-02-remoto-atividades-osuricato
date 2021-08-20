import { FormHandles } from '@unform/core';
import { Form } from '@unform/web';
// import Swal from 'sweetalert2';
// import toast, { Toaster } from 'react-hot-toast';
import React, {
  useCallback,
  useEffect,
  useRef,
  useState,
  ChangeEvent,
} from 'react';

import api from '../../services/api';

import { RiCloseCircleFill } from 'react-icons/ri';
import { AiOutlineSearch } from 'react-icons/ai';
import { FiEdit2 } from 'react-icons/fi';
import { Link } from 'react-router-dom';
import { useSignMenu } from '../../hooks/toggle';

import Header from '../../components/Header';
import SideBar from '../../components/SideBar';
import { Body } from '../../components/Styles/Body';
import { Title } from '../../components/Styles/Title';
import {
  Container,
  FormContainer,
  Icon,
  DivTable,
  Table,
  Thead,
  Tbody,
  Celula,
  InputSearch,
  ContainerTable,
  ContainerHeader,
  ContainerButton,
  ButtonsContainerEdit,
  ButtonSearch,
  ButtonNewUser,
  ButtonsContainerDelete,
  ButtonDelete,
  ButtonEdit,
  ContainerTitle,
  Divisor,
  IconUser,
} from './styles';

interface User {
  id: string;
  name: string;
  email: string;
  driver_license: string;
}

const Users: React.FC = () => {
  const formRef = useRef<FormHandles>(null);
  const [users, setUsers] = useState<User[]>([]);

  const { handleChangeActivatedMenu } = useSignMenu();
  handleChangeActivatedMenu('users');

  useEffect(() => {
    api.get('/users').then(response => {
      setUsers(response.data);
    });
  }, []);

  const getUsers = useCallback(() => {
    api.get('/users').then(response => {
      setUsers(response.data);
    });
  }, []);

  const searchUsers = useCallback(
    (value: string) => {
      const filterUsers = users.filter(user => user.name.indexOf(value) !== -1);

      setUsers(filterUsers);
    },
    [users],
  );

  const handleSearchInputChange = useCallback(
    async (event: ChangeEvent<HTMLInputElement>) => {
      const { value } = event.target;

      return value === '' ? getUsers() : searchUsers(value);
    },
    [getUsers, searchUsers],
  );

  const handleSubmit = useCallback(() => {
    api.get(`/users`).then(response => {
      setUsers(response.data);
    });
  }, []);

  console.log(users)

  // function deleteSuccess() {
  //   toast.success('Usuário deletado com sucesso');
  // }

  // function deleteError() {
  //   Swal.fire('Erro!', 'Ocorreu um erro ao deletar o usuário.', 'error');
  // }

  // async function deleteUser(id: string) {
  //   try {
  //     const { data } = await api.delete(`/users/${id}`);
  //     const updatedTeam = users.filter(user => user.id !== id);

  //     deleteSuccess();

  //     setUsers(updatedTeam);
  //   } catch (err) {
  //     deleteError();
  //     console.log(err);
  //   }
  // }

  return (
    <Container>
      <SideBar />
      <Header />
      <Body>
        {/* <Toaster position="top-right" reverseOrder={false} /> */}
        <Title>Usuários</Title>
        <FormContainer>
          <Form
            ref={formRef}
            onSubmit={() => {
              console.log('Teste');
            }}
          >
            <ContainerHeader>
              <ContainerButton>
                <Form onSubmit={handleSubmit}>
                  <InputSearch
                    onChange={handleSearchInputChange}
                    placeholder="Pesquise por um usuário"
                  />
                  <ButtonSearch type="submit">
                    <AiOutlineSearch />
                  </ButtonSearch>
                </Form>
              </ContainerButton>

              <Link to="/create-user">
                <ButtonNewUser type="submit">Novo usuário</ButtonNewUser>
              </Link>
            </ContainerHeader>
            <DivTable>
              <ContainerTable>
                <Table>
                  <Thead>
                    <tr>
                      <th>
                        <Celula>
                          <ContainerTitle>Nome</ContainerTitle>
                          <Divisor />
                        </Celula>
                      </th>
                      <th>
                        <Celula>
                          <ContainerTitle>E-mail</ContainerTitle>
                          <Divisor />
                        </Celula>
                      </th>
                      <th>
                        <Celula>
                          <ContainerTitle>Nº carteira de motorista</ContainerTitle>
                          <Divisor />
                        </Celula>
                      </th>
                    </tr>
                  </Thead>
                  <Tbody>
                    {users.length > 0 &&
                      users.map(user => (
                        <tr key={user.id}>
                          <td>{user.name}</td>
                          <td>{user.email}</td>
                          <td>{user.driver_license}</td>
                          <td>
                            <ButtonsContainerDelete>
                              <ButtonDelete
                                type="button"
                                // onClick={() => deleteUser(user.id)}
                              >
                                <RiCloseCircleFill />
                              </ButtonDelete>
                            </ButtonsContainerDelete>
                          </td>
                          <td>
                            <Link
                              to={{
                                pathname: '/edit-user',
                                state: {
                                  id: user.id,
                                  name: user.name,
                                },
                              }}
                            >
                              <ButtonsContainerEdit>
                                <ButtonEdit type="button">
                                  <FiEdit2 />
                                </ButtonEdit>
                              </ButtonsContainerEdit>
                            </Link>
                          </td>
                        </tr>
                      ))}
                  </Tbody>
                </Table>
              </ContainerTable>
            </DivTable>
          </Form>
        </FormContainer>
      </Body>
    </Container>
  );
};

export default Users;
