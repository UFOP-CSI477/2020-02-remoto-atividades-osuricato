import React, { useCallback } from 'react';

import { Link, useHistory } from 'react-router-dom';

import { useSignMenu } from '../../hooks/toggle';

import {
  SideMenuContainer,
  ButtonsContainer,
  Buttons,
  IconLink,
  DivUsers,
  DivCategories
} from './styles';
import { useAuth } from '../../hooks/auth';

const SideMenu: React.FC = () => {
  const history = useHistory();
  const { user } = useAuth();
  const { activatedMenu, handleChangeActivatedMenu } = useSignMenu();

  const handleRedirectToDashboard = useCallback(() => {
    handleChangeActivatedMenu('dashboard');
    history.push('/dashboard');
  }, [history, handleChangeActivatedMenu]);

  const handleRedirectToUsers = useCallback(() => {
    handleChangeActivatedMenu('users');
    history.push('/users');
  }, [history, handleChangeActivatedMenu]);

  const handleRedirectToCategories = useCallback(() => {
    handleChangeActivatedMenu('categories');
    history.push('/categories');
  }, [history, handleChangeActivatedMenu]);

  return (
    <>
      <SideMenuContainer>
        <ButtonsContainer>
          <Buttons activatedMenu={activatedMenu}>
            <Link to="/dashboard">
              <button
                className="dashboard"
                type="button"
                onClick={handleRedirectToDashboard}
              >
                <IconLink>
                  {/* <img src={dahsboardIcon} alt="Página inicial" /> */}
                </IconLink>
                Página inicial
              </button>
            </Link>

            {user.isAdmin ? (
              <DivUsers>
                <div>
                  <Link to="/users">
                    <button
                      className="users"
                      type="button"
                      onClick={handleRedirectToUsers}
                    >
                      <IconLink>
                        {/* <img src={ProcessamentoIcon} alt="Processamento" /> */}
                      </IconLink>
                      Usuários
                      <main>
                        {/* <Icon>
                            <IoIosArrowDown />
                          </Icon> */}
                      </main>
                    </button>
                  </Link>
                </div>
              </DivUsers>
            ) : (
              ''
            )}

            {user.isAdmin ? (
              <DivCategories>
                <div>
                  <Link to="/categories">
                    <button
                      className="categories"
                      type="button"
                      onClick={handleRedirectToCategories}
                    >
                      Categorias
                    </button>
                  </Link>
                </div>
              </DivCategories>
            ) : (
              ''
            )}
          </Buttons>
        </ButtonsContainer>
      </SideMenuContainer>
    </>
  );
};

export default SideMenu;
