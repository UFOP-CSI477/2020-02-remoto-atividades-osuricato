import styled from 'styled-components';
import { shade } from 'polished';

export const Container = styled.div`
  display: flex;
  flex-direction: row;

  width: 100vw;
  height: 100vh;
`;

export const IconUser = styled.div`
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: #67ba99;
  width: 43%;
  @media print {
    visibility: hidden;
  }
`;

export const Icon = styled.div`
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: #67ba99;
  width: 43%;
  @media print {
    visibility: hidden;
  }
  @media (max-width: 1100px) {
    width: 20%;
  }
`;

export const ContainerTitle = styled.div`
  display: flex;
  justify-content: flex-start;
  align-items: center;
  width: 57%;
  @media (max-width: 1100px) {
    width: 80%;
  }
`;

export const Divisor = styled.div`
  height: 2rem;
  border-left: 1px solid #9d9d9d;
  @media print {
    visibility: hidden;
  }
`;

export const Separator = styled.hr`
  margin-top: 1rem;
  width: 16rem;
  margin-bottom: 2.438rem;
  @media print {
    display: none;
  }
`;

export const DivSeparator = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  @media (max-width: 1100px) {
    width: 100vw;
  }
  @media print {
    display: none;
  }
`;

export const FormContainer = styled.div`
  display: flex;
  flex-direction: row;

  margin-top: 2rem;

  @media (max-width: 800px) {
    align-items: center;
  }
  @media print {
    margin-top: 0;
  }
`;

export const ButtonsContainerDelete = styled.div`
  display: flex;
  align-items: center;
  justify-content: end;
  @media print {
    display: none;
  }
`;

export const ButtonsContainerEdit = styled.div`
  display: flex;
  align-items: center;
  justify-content: end;
  @media print {
    display: none;
  }
`;

export const ButtonDelete = styled.button`
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: end;
  text-align: center;

  padding: 0.3rem;
  border: transparent;

  background: #777777;
  border-radius: 0.25rem;

  color: #ffffff;
  transition: background-color 0.2s;
  &:hover {
    background: ${shade(0.2, '#777777')};
  }

  @media (max-width: 800px) {
    justify-content: center;
    margin-top: 1.8rem;
    margin-left: -1rem;
  }
  @media print {
    display: none;
  }
`;

export const ButtonEdit = styled.button`
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: end;
  text-align: center;

  padding: 0.3rem;
  border: transparent;

  background: #063966;
  border-radius: 0.25rem;

  color: #ffffff;
  transition: background-color 0.2s;
  &:hover {
    background: ${shade(0.2, '#063966')};
  }
  @media print {
    display: none;
  }
`;

export const ContainerHeader = styled.div`
  display: flex;
  justify-content: space-between;
  background: transparent;

  @media (max-width: 1000px) {
    justify-content: center;
    flex-direction: column;
    align-items: center;
    gap: 1.8rem;
  }
  @media print {
    display: none;
  }
`;

export const ButtonNewUser = styled.button`
  width: 8rem;
  height: 2rem;
  color: #ffffff;
  border: none;

  font-family: Poppins;
  font-style: normal;
  font-weight: 600;
  font-size: 0.9rem;
  text-align: center;
  letter-spacing: -0.015em;

  letter-spacing: -0.015em;
  background: #089b63;
  border-radius: 0.25rem;
  @media print {
    display: none;
  }
`;

export const ContainerButton = styled.div`
  width: 100%;
  display: flex;
  justify-content: space-between;
  background: transparent;
  border: none;

  @media (max-width: 1000px) {
    display: grid;
    justify-content: center;
  }
  @media print {
    display: none;
  }
`;

export const InputSearch = styled.input`
  width: 26rem;

  background: #d8d8d8;
  border-radius: 1.875rem;

  height: 3.25rem;
  padding: 0 1.5rem;
  border: 0.125rem solid #fff;
  font-size: 1.115rem;
  &::placeholder {
    color: #a8a8b3;
  }
  @media (max-width: 1290px) {
    width: 18rem;
  }
  @media print {
    display: none;
  }
`;

export const ButtonSearch = styled.button`
  background: transparent;
  border-radius: 1rem;
  border: none;
  color: #05233e;
  font-weight: bold;
  margin-left: -2.6rem;
  transition: color 0.2s;
  svg {
    margin-top: 0.3rem;
  }
  &:hover {
    color: ${shade(0.6, '#05233E')};
  }
  @media print {
    display: none;
  }
`;

export const ContainerTable = styled.div`
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
`;

export const DivTable = styled.div`
  @media (max-width: 1200px) {
    margin-right: 1.8rem;
    margin-top: 0.5rem;
    overflow-x: scroll;
    width: 93vw;
  }
`;

export const Table = styled.div`
  padding-top: 2rem;
  width: 100%;

  display: grid;
  justify-content: center;
  align-items: center;

  @media (max-width: 1000px) {
    padding-right: 1rem;
    padding: 1rem;
  }
  @media (min-width: 1930px) {
    width: 100rem;
  }
  @media print {
    padding-top: 0;
  }
`;

export const Thead = styled.div`
  background: rgba(209, 235, 225, 0.83);
  border-radius: 0.25rem;
  margin-bottom: 0.7rem;

  th {
    width: 100vw;
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    font-weight: 600;
    text-align: center;
    letter-spacing: -0.015em;
    padding: 0.5rem;

    color: #05233e;
    &:first-child {
      width: 10rem;
      @media (max-width: 1100px) {
        width: 20rem;
        padding-left: 3rem;
      }
      @media (max-width: 945px) {
        padding-left: 0.65rem;
        padding-right: 0;
        margin-right: 0;
      }
    }

    &:nth-last-child(2) {
      width: 5rem;
      svg {
        visibility: hidden;
      }
    }

    &:nth-last-child(6) {
      svg {
        padding-left: 0;
        margin-left: -1rem;

        visibility: hidden;
      }
    }

    &:last-child {
      width: 5rem;
      svg {
        visibility: hidden;
      }
    }
    @media print {
      &:nth-last-child(4) {
        padding-left: 6rem;
      }
    }
  }

  @media (max-width: 1100px) {
    width: 100vw;
    th {
      svg {
        display: none;
      }
      padding: 0.2rem;
      margin: 0;
      width: 100vw;
      &:nth-last-child(2) {
        width: 5rem;
      }
      &:last-child {
        width: 5rem;
      }
    }
  }
`;

export const Tbody = styled.div`
  border-radius: 0.25rem;
  display: grid;
  gap: 0.5rem;
  justify-content: center;
  align-items: center;
  text-align: center;

  tr {
    background: #e5e5e5;
    &:hover {
      background: ${shade(0.2, '#E5E5E5')};
    }
  }

  td {
    word-break: break-all;
    width: 100vw;
    background: transparent;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 300;
    letter-spacing: -0.015em;
    padding: 0.5rem;

    color: #05233e;

    &:first-child {
      width: 3rem;
      img {
        border-radius: 5rem;
      }
      img {
        width: 1.5rem;
        height: 1.5rem;
      }
      @media (max-width: 1100px) {
        padding-left: 3rem;
      }
      @media (max-width: 945px) {
        padding-left: 1.8rem;
      }
    }

    &:nth-last-child(2) {
      width: 2rem;
    }
    &:last-child {
      width: 2rem;
    }
  }

  @media (max-width: 1100px) {
    td {
      width: 10rem;
      &:nth-last-child(6) {
        padding-left: 1rem;
      }
      &:nth-last-child(5) {
        padding-left: 1rem;
      }
      &:nth-last-child(4) {
        padding-left: 1rem;
      }
      &:nth-last-child(3) {
        padding-left: 1.5rem;
        padding-right: 1rem;
      }
      &:nth-last-child(2) {
        width: 1rem;
        padding: 0.2rem;
      }
      &:last-child {
        width: 1rem;
        padding: 0.2rem;
      }
    }
  }
`;

export const Celula = styled.div`
  display: flex;
  justify-content: space-between;
  align-items: center;

  span {
    margin-right: 15rem;
  }
  @media (max-width: 1100px) {
    justify-content: center;
  }
`;

export const ContainerExport = styled.div`
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 0.5rem;
  margin-bottom: 2rem;
  @media print {
    display: none;
  }
  @media (max-width: 1100px) {
    justify-content: center;
  }
`;

export const Export = styled.button`
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  background: transparent;

  font-family: Poppins, sans-serif;
  font-style: normal;
  font-weight: normal;
  font-size: 0.813rem;
  line-height: 1.188rem;
  display: flex;
  align-items: center;
  text-align: center;
  letter-spacing: -0.015em;

  color: #05233e;

  @media print {
    display: none;
  }
`;
