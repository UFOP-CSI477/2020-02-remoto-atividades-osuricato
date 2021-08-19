import styled from 'styled-components';
import { shade } from 'polished';

export const Div = styled.div`
  width: 100vw;
  height: 100vh;
  background: linear-gradient(
    117.57deg,
    rgba(6, 57, 102, 0.71) 0%,
    #67ba99 97.92%,
    #67ba99 97.92%
  );
  background-blend-mode: multiply;

  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  img {
    margin-top: -6rem;
  }
`;

export const Logo = styled.img`
  padding-top: 25%;
  @media (max-width: 50rem) {
    padding-top: 38%;
  }
`;

export const LogoContainer = styled.div`
  width: 100%;
  height: 15%;
  display: flex;
  flex-direction: column;
  align-items: center;
`;

export const FormContainer = styled.div`
  width: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
  padding-left: 2rem;
  padding-right: 2rem;

  span {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 0.7rem;
    color: #063966;

    transform: color 0.2s;
  }

  .recuperation {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;

    margin-bottom: 0.5rem;

    span {
      text-align: center;
    }

    .error-password {
      margin-left: 3rem;
      color: #e64438;
    }
  }
`;

export const FormButton = styled.div`
  width: 100%;
  height: 2.5rem;

  display: flex;
  flex-direction: column;
  align-items: center;
`;

export const Button = styled.button`
  width: 7.875rem;
  height: 2.5rem;

  margin-top: 0.5rem;

  display: flex;
  justify-content: space-between;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  align-items: center;
  border-radius: 0.625rem;

  background: #174c82;
  border: none;
  color: white;

  transition: background-color 0.2s;

  &:hover {
    background: ${shade(0.4, '#174C82')};
  }

  span {
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
    font-weight: 500;
    color: #fff;

    padding-right: 0.2rem;
  }
`;

export const Text = styled.p`
  color: #063966;
  font-family: 'Poppins', sans-serif;
  font-weight: 300;
  font-size: 1rem;
  margin-top: 1rem;
  margin-bottom: 0.5rem;
`;

export const P = styled.p`
  text-align: start;
`;

export const Body = styled.div`
  display: flex;

  flex-wrap: wrap;
  width: 30rem;
  height: 26rem;

  padding: 2.25rem;

  background: #dbdbdb;
  border-radius: 0.625rem;
  box-shadow: 0.625rem 0.625rem 0.25rem rgba(0, 0, 0, 0.25);

  @media (max-width: 50rem) {
    width: 20rem;
  }
`;
