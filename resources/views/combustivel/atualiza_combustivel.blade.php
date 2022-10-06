<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <h3>Atualizar Combustível</h3>

<form action="/combustivel-atualizar" method="POST">
    @csrf
    {{-- <div class="form-row ml-6" >
        <div class="col-md-0 my-6 ">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>

        </div>

        {{--  {{}} = vou pedir para ser resolvido antes da aplicação voltar para o usuário --}}

    <input type="hidden" name="id_combustivel" value="{{$atualizarCombustivel->id_combustivel}}">

  <div class="form-row">
    <div class="form-group col-md-2 ml-3">
        {{-- <label for="inputEmail4">Combustivel</label> --}}
        <input type="text" name="tipo_combustivel" value="{{$atualizarCombustivel->tipo_combustivel}}" class="form-control">
  </div>
    </div>

    <div class="mb-6">
        <button type="submit" class="btn btn-primary mt-2 ml-3">Atualizar</button>
      </div>

</form>
