<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <h3>Atualizar Veículos</h3>

<form action="/veiculo-atualizar" method="POST">
    @csrf
    <div class="form-row ml-6" >
        <div class="col-md-0 my-6 ">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>

        </div>

        {{--  {{}} = vou pedir para ser resolvido antes da aplicação voltar para o usuário --}}

    <input type="hidden" name="id_veiculo" value="{{$atualiza->id_veiculo}}">

  <div class="form-row">
    <div class="form-group col-md-6">
    <select name="tipo_veiculo" value="{{$atualiza->tipo_veiculo}}" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option>Escolha o tipo...</option>

            @foreach ($listaTipoVeiculo as $tipoVeiculo)
            <option {{$atualiza->fk_tipo_veiculo == $tipoVeiculo->id ? 'selected' : '' }} value="{{$tipoVeiculo->id}}">{{$tipoVeiculo->tipo_veiculo}}</option>
             @endforeach

        </select>

      <label for="inputEmail4">Placa</label>
      <input type="text" name="placa" value="{{$atualiza->placa}}" class="form-control" placeholder="CBT-154">
    </div>

    <div class="form-row">
    <div class="form-group ml-1 col-md-6">
      <label for="inputEmail4">Marca</label>
      <input type="text" name="marca" value="{{$atualiza->marca}}" class="form-control" placeholder="Marca do veiculo">
    </div>

    <div class="form-row">
    <div class="form-group ml-2 col-md-7">
      <label for="inputEmail4">Modelo</label>
      <input type="text" name="modelo" value="{{$atualiza->modelo}}" class="form-control" placeholder="Modelo do veiculo">
    </div>

    <div class="form-row">
    <div class="form-group ml-3 col-md-7">
      <label for="inputEmail4">Ano</label>
      <input type="text" name="ano" value="{{$atualiza->ano}}" class="form-control" placeholder="Modelo do veiculo">
    </div>

  <button type="submit" class="btn btn-primary ms-5 ">Atualizar</button>
</form>
