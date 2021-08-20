import React, { useCallback, useEffect, useState } from 'react';
import { BiUserPin } from 'react-icons/bi';
import { ImHammer2 } from 'react-icons/im';
import {
  AiOutlineCalculator,
  AiOutlineStar,
  AiOutlineUser,
  AiOutlineLock,
} from 'react-icons/ai';
import { BsPeople } from 'react-icons/bs';
import { Link, useHistory } from 'react-router-dom';

import { IoIosArrowDown } from 'react-icons/io';
import { useSignMenu } from '../../hooks/toggle';

import {
  SideMenuContainer,
  ButtonsContainer,
  Buttons,
  IconLink,
  DivUsers
} from './styles';
import { useAuth } from '../../hooks/auth';

const SideMenu: React.FC = () => {
  const history = useHistory();
  const { user } = useAuth();
  const { activatedMenu, handleChangeActivatedMenu } = useSignMenu();

  const [users, setUsers] = useState<boolean>(false);

  const handleRedirectToDashboard = useCallback(() => {
    handleChangeActivatedMenu('dashboard');
    history.push('/dashboard');
  }, [history, handleChangeActivatedMenu]);

  const handleRedirectToUsers = useCallback(() => {
    handleChangeActivatedMenu('users');
    history.push('/users');
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
          </Buttons>
        </ButtonsContainer>
      </SideMenuContainer>
    </>
  );
};

export default SideMenu;
