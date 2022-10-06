<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h3>Cadastro tipo Veículo</h3>

<form action="/tipo-veiculo-salvar" method="POST">
    @csrf

    <div class="form-row">
        <div class="form-group col-md-2 ml-3">

            <input type="text" name="tipo_veiculo" class="form-control"
            placeholder="Digite um tipo de veículo">

        </div>
    </div>

    <div class="mb-6">
        <button type="submit" class="btn btn-primary mt-2 ml-3">Cadastrar</button>
    </div>
</form>
