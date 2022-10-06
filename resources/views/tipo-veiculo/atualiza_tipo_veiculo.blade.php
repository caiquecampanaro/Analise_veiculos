<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<h3> Atualiza tipo veículo</h3>

<form action="/tipo-veiculo-atualizar" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{$atualizarTipoVeiculo->id}}">

    <div class="form-row">
        <div class="form-group col-md-2 ml-3">
            <input type="text" name="tipo_veiculo" class="form-control" value="{{$atualizarTipoVeiculo->tipo_veiculo}}">
        </div>
    </div>

    <div class="mb-6">
        <button class="btn btn-primary mt-2 ml-3">Atualizar</button>
    </div>

</form>
