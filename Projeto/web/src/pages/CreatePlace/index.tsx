import { useEffect, useState, ChangeEvent, FormEvent } from 'react';
import { Link, useHistory } from 'react-router-dom';
import { FiArrowLeft } from 'react-icons/fi'
import axios from 'axios';

import api from '../../services/api';

import Dropzone from '../../components/dropzone';

import './styles.css';

interface IBGEUFResponse {
  sigla: string;
}

interface IBGECityResponse {
  nome: string;
}

const CreatePlace = () => {
  const [ufs, setUfs] = useState<string[]>([]);
  const [cities, setCities] = useState<string[]>([]);
  const [selectedFile, setSelectedFile] = useState<File>();

  const [formData, setFormData] = useState({
    name: '',
    email: '',
    whatsapp: '',
    street: '',
    number: ''
  })

  const [selectedUf, setSelectUf] = useState('0');
  const [selectedCity, setSelectCity] = useState('0');

  const history = useHistory();

  useEffect(() => {
    axios.get<IBGEUFResponse[]>('https://servicodados.ibge.gov.br/api/v1/localidades/estados').then(response => {
      const ufInitials = response.data.map(uf => uf.sigla);

      setUfs(ufInitials);
    });
  }, []);

  useEffect(() => {
    if (selectedUf === '0') {
      return;
    }

    axios
      .get<IBGECityResponse[]>(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${selectedUf}/municipios`)
      .then(response => {
        const cityNames = response.data.map(city => city.nome);

        setCities(cityNames);
      });

  }, [selectedUf]);

  function handleSelectUf(event: ChangeEvent<HTMLSelectElement>) {
    const uf = event.target.value;

    setSelectUf(uf);
  }

  function handleSelectCity(event: ChangeEvent<HTMLSelectElement>) {
    const city = event.target.value;

    setSelectCity(city);
  }

  function handleInputChange(event: ChangeEvent<HTMLInputElement>) {
    const { name, value } = event.target;

    setFormData({ ...formData, [name]: value });
  }

  async function handleSubmit(event: FormEvent) {
    event.preventDefault();

    const { name, email, whatsapp, street, number } = formData;
    const uf = selectedUf;
    const city = selectedCity;

    let file

    if (selectedFile) {
      file = selectedFile;
    } else {
      file = ''
    }

    const data = {
      name,
      email,
      whatsapp,
      uf,
      city,
      street,
      number,
      image: file
    }

    // const data = new FormData();

    // data.append('name', name);
    // data.append('email', email);
    // data.append('whatsapp', whatsapp);
    // data.append('uf', uf);
    // data.append('city', city);
    // data.append('street', street);
    // data.append('number', String(number));

    
    const places = await api.get('/places');
    
    console.log(places)
    alert('Casa de adoção criada!');

    history.push('/');
  }

  return (
    <div id="page-create-place">
      <header>
        <Link to="/">
          <FiArrowLeft />
          Voltar para início
        </Link>
      </header>

      <form onSubmit={handleSubmit}>
        <h1>Cadastro da <br /> casa de adoção</h1>

        <Dropzone onFileUploaded={setSelectedFile} />

        <fieldset>
          <legend>
            <h2>Dados</h2>
          </legend>

          <div className="field">
            <label htmlFor="name">Nome da entidade</label>
            <input
              type="text"
              name="name"
              id="name"
              onChange={handleInputChange}
            />
          </div>

          <div className="field-group">
            <div className="field">
              <label htmlFor="email">E-mail</label>
              <input
                type="email"
                name="email"
                id="email"
                onChange={handleInputChange}
              />
            </div>
            <div className="field">
              <label htmlFor="whatsapp">Whatsapp</label>
              <input
                type="text"
                name="whatsapp"
                id="whatsapp"
                onChange={handleInputChange}
              />
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>
            <h2>Endereços</h2>
          </legend>

          <div className="field-group">
            <div className="field">
              <label htmlFor="uf">Estado (UF)</label>
              <select
                name="uf"
                id="uf" value={selectedUf}
                onChange={handleSelectUf}
              >
                <option value="0">Selecione uma UF</option>
                {ufs.map(uf => (
                  <option key={uf} value={uf}>{uf}</option>
                ))}
              </select>
            </div>
            <div className="field">
              <label htmlFor="city">Cidade</label>
              <select
                name="city"
                id="city"
                value={selectedCity}
                onChange={handleSelectCity}
              >
                <option value="0">Selecione uma cidade</option>
                {cities.map(city => (
                  <option key={city} value={city}>{city}</option>
                ))}
              </select>
            </div>
          </div>

          <div className="field-group">
            <div className="field">
              <label htmlFor="street">Rua</label>
              <input
                type="text"
                name="street"
                id="street"
                onChange={handleInputChange}
              />
            </div>
            <div className="field">
              <label htmlFor="number">Número</label>
              <input
                type="text"
                name="number"
                id="number"
                onChange={handleInputChange}
              />
            </div>
          </div>
        </fieldset>
        <button type="submit">Cadastrar casa de adoção</button>
      </form>
    </div> 
  );
};

export default CreatePlace;