@extends('main')

@section('content')

<div
  class="container"
  style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;

    height: 70vh;
  ">
  <table
    style="width: 500px;"
  >
    <thead>
      <tr>
        <strong>
          <th>Aplicação</th>
        </strong>
        <strong>
          <th>Quantidade</th>
        </strong>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Dose única</td>
        <td></td>
      </tr>
      <tr>
        <td>Primeira Dose</td>
        <td></td>
      </tr>
      <tr>
        <td>Segunda Dose</td>
        <td></td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td><strong>TOTAL GERAL</strong></td>
        <td><strong></strong></td>
      </tr>
    </tfoot>
  </table>

  <table
    style="width: 500px;"
  >
    <thead>
      <tr>
        <strong>
          <th>Vacina</th>
        </strong>
        <strong>
          <th>Quantidade</th>
        </strong>
        <strong>
          <th>Porcentagem</th>
        </strong>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td><strong>TOTAL GERAL</strong></td>
        <td><strong></strong></td>
        <td><strong>100%</strong></td>
      </tr>
    </tfoot>
  </table>
</div>

@endsection