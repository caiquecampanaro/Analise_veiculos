<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Veiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
<h2>Veiculos </h2>

{{-- <h4>Nome: {{$nome}}</h4>
<h4>Idade: {{$idade}}</h4> --}}

<table class="table table-striped table-bordered">
    <thead>
        <th>Tipo veiculo</th>
        <th>Combustivel</th>
        <th>placa</th>
        <th>marca</th>
        <th>modelo</th>
        <th>ano</th>
        <th>ações</th>
    </thead>
    <tbody class="table-group-divider">

@foreach( $listaVeiculo as $veiculo )

<tr>
            <td>{{$veiculo->TipoVeiculo->tipo_veiculo}}</td>
            <td>{{$veiculo->combustivel->tipo_combustivel}}</td>
            <td>{{$veiculo->placa}}</td>
            <td>{{$veiculo->marca}}</td>
            <td>{{$veiculo->modelo}}</td>
            <td>{{$veiculo->ano}}</td>
            <td>
            <a href="/visualizar-veiculo/{{$veiculo->id_veiculo}}" class="btn btn-success">Atualizar</a>
            <a href="/veiculo-deletar/{{$veiculo->id_veiculo}}" class="btn btn-danger">Excluir</a>
            </td>
        </tr>

@endforeach

    </tbody>
</table>
  <a href="/cadastro" class="btn btn-primary ms-2">Cadastrar veículo</a>
</body>
</html>
