<div class="mb-3">
    <a class="btn btn-danger fw-bold" href="?page=escolha">Cancelar</a>
</div>

<h1>Novo Endereço</h1>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrarEstado">

  <div class="mb-3">
    <label>Rua</label>
    <input type="text" name="rua" class="form-control">
  </div>

  <div class="mb-3">
    <label>Número</label>
    <input type="number" name="numero" class="form-control">
  </div>

  <div class="mb-3">
    <label>Bairro</label>
    <input type="text" name="bairro" class="form-control">
  </div>

  <div class="mb-3">
    <label>Complemento</label>
    <input type="text" name="complemento" class="form-control">
  </div>

  <div class="mb-3">
    <label>CEP</label>
    <input type="number" name="cep" class="form-control" maxlength="8">
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>