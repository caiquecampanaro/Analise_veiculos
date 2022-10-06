<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <h3>Cadastro Veiculos</h3>

<form action="/veiculo-salvar" method="POST">
    @csrf
    <div class="form-row ml-6" >
        <div class="col-md-0 my-6 ">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>

        </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <select name="tipo_veiculo" class="custom-select mr-sm-2 mb-3" id="inlineFormCustomSelect">
            <option selected>Escolha o tipo...</option>
            @foreach ($listaTipoVeiculo as $tipoVeiculo)
            <option value="{{$tipoVeiculo->id}}">{{$tipoVeiculo->tipo_veiculo}}</option>
             @endforeach
        </select>

        <select name="tipo_combustivel" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Escolha o Combustível...</option>
            @foreach ($listaCombustivel as $combustivel)
            <option value="{{$combustivel->id_combustivel}}">{{$combustivel->tipo_combustivel}}</option>
            @endforeach
        </select>

      <label for="inputEmail4">Placa</label>
      <input type="text" name="placa" class="form-control" placeholder="CBT-154">
    </div>

    <div class="form-row">
    <div class="form-group ml-1 col-md-6">
      <label for="inputEmail4">Marca</label>
      <input type="text" name="marca" class="form-control" placeholder="Marca do veiculo">


    </div>

    <div class="form-row">
    <div class="form-group ml-2 col-md-7">
      <label for="inputEmail4">Modelo</label>
      <input type="text" name="modelo" class="form-control" placeholder="Modelo do veiculo">
    </div>

    <div class="form-row">
    <div class="form-group ml-3 col-md-7">
      <label for="inputEmail4">Ano</label>
      <input type="text" name="ano" class="form-control" placeholder="Modelo do veiculo">
    </div>

  <button type="submit" class="btn btn-primary ms-5">Cadastro</button>
</form>
