<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <h3>Cadastro Combustível</h3>

<form action="/combustivel-salvar" method="POST">
    @csrf

    <div class="form-row">
        <div class="form-group col-md-2 ml-3">

      <input type="text" name="tipo_combustivel" class="form-control" placeholder="Digite um tipo de combustivel">

        </div>
    </div>

    <div class="mb-6">
        <button type="submit" class="btn btn-primary mt-2 ml-3">Cadastrar</button>
      </div>
</form>
