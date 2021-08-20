import styled from 'styled-components';

interface SideButtonProps {
  activatedMenu: string;
}

export const SideMenuContainer = styled.div`
  display: flex;
  flex-direction: column;

  width: 12rem;
  height: 100vh;
  
  margin-top: 4.5rem;
  position: fixed;
  
  overflow: auto;
  padding-bottom: 6rem;
  background: rgba(27, 27, 31, 0.9);
`;

export const ButtonsContainer = styled.div`
  display: flex;
  flex-direction: column;

  button {
    display: flex;

    height: 2.85rem;
    border: 0;
    background: transparent;
    margin-top: 0.5rem;
    border-radius: 0.25rem;

    font-family: 'Poppins', sans-serif;
    font-size: 0.93rem;
    font-weight: 600;
    color: #fff;

    width: 100%;

    main {
      width: 12rem;
      padding: 0.2rem;
      display: flex;
      justify-content: flex-end;
    }

    align-items: center;
    justify-content: left;
    transition: box-shadow 0.2s;
    & + button {
      margin-top: 0.5rem;
    }

    &:hover {
      box-shadow: inset -3px 0px 0px #DC1637;
    }

    border: 0;
  }
`;

export const Buttons = styled.div<SideButtonProps>`
  padding: 0 0 10px 0;

  .menu-content-disabled {
    display: none;
    li {
      list-style-type: none;
    }
  }

  .menu-content {
    display: block;
    li {
      list-style-type: none;
    }
  }

  .dashboard {
    box-shadow: ${props =>
      props.activatedMenu === 'dashboard' ? 'inset -3px 0px 0px #DC1637' : ''};
  }

  .users {
    box-shadow: ${props =>
      props.activatedMenu === 'users' ? 'inset -3px 0px 0px #DC1637' : ''};
  }
`

export const Icon = styled.div`
  display: flex;
  justify-content: flex-end;
  align-items: center;
  color: #1665d8;
  height: 0.688rem;
  width: 0.938rem;
`;

export const IconLink = styled.div`
  img {
    transition: color 0.4s;
    height: 1.5rem;
    width: 1.5rem;
    margin: 0 0.425rem;
    color: #041524;
  }

  svg {
    transition: color 0.4s;
    height: 1.3rem;
    width: 1.3rem;
    margin: 0 0.425rem;
    color: #041524;
  }
`;

export const DivUsers = styled.div`
  .menu-content {
    display: block;
  }
`;