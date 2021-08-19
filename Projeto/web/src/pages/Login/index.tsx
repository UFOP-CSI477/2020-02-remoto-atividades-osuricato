import { useRef, useState } from 'react';
import { Link, useHistory } from 'react-router-dom';
import { FiLogIn } from 'react-icons/fi';
import { AiOutlineUser, AiOutlineLock } from 'react-icons/ai';
import * as Yup from 'yup';
import { Form } from '@unform/web';
import { FormHandles } from '@unform/core';

import { useAuth } from '../../hooks/auth';
import logo from '../../assets/logo.svg';

import {
  Div,
  Body,
  Button,
  Logo,
  Text,
  LogoContainer,
  FormContainer,
  FormButton,
  P,
} from './styles';

import Input from '../../components/Input';
import getValidationErrors from '../../utils/getValidateErrors';

interface SignInFormData {
  email: string;
  password: string;
}

export function Login() {
  const formRef = useRef<FormHandles>(null);
  const [error, setError] = useState('');

  const { signIn } = useAuth();

  const history = useHistory();

  async function handleSubmit(data: SignInFormData) {
    try {
      formRef.current?.setErrors({});

      const schema = Yup.object().shape({
        email: Yup.string()
          .required('E-mail obrigatório')
          .email('Digite um e-mail válido'),

        password: Yup.string().required('Senha obrigatória'),
      });

      await schema.validate(data, {
        abortEarly: false,
      });

      await signIn({
        email: data.email,
        password: data.password,
      });

      history.push('/dashboard');
    } catch (err) {
      if (err instanceof Yup.ValidationError) {
        const errors = getValidationErrors(err);

        formRef.current?.setErrors(errors);

        return;
      }
      setError('Falha no login, verifique Usuário e/ou Senha.');
    }
  }

  return (
    <Div>
      <Body>
        <LogoContainer>
          <Logo src={logo} />
        </LogoContainer>

        <FormContainer>
          <Form ref={formRef} onSubmit={handleSubmit}>
            <Text>
              <p>E-mail:</p>
            </Text>

            <Input id="email" name="email" icon={AiOutlineUser} />

            <Text>
              <P>Senha:</P>
            </Text>
            <Input
              id="password"
              name="password"
              type="password"
              icon={AiOutlineLock}
            />

            <div className="recuperation">
              <Link to="/login/reset-password">
                <span>Esqueceu a senha?</span>
                <span className="error-password">{error}</span>
              </Link>
            </div>

            <FormButton>
              <Button type="submit">
                <span>ENTRAR</span>
                <FiLogIn size={40} />
              </Button>
            </FormButton>
          </Form>
        </FormContainer>
      </Body>
    </Div>
  );
}

export default Login;
