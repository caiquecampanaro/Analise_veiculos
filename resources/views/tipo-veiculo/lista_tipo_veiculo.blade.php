<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista tipo veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h2>Tipo veículos</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <th>Tipo Veículo</th>
        </thead>
        <tbody class="table-group-divider">



@foreach($listaTipoVeiculo as $tipo_veiculo)

<tr>
            <td>{{$tipo_veiculo->tipo_veiculo}}</td>
            <td>
                <a href="/visualizar-tipo-veiculo/{{$tipo_veiculo->id}}" class="btn btn-success">Atualizar</a>
                <a href="/tipo-veiculo-deletar/{{$tipo_veiculo->id}}" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
    <button class="btn btn-primary ms-2">clique aqui</button>
</body>
</html>
