<div class="mb-3">
    <a class="btn btn-danger fw-bold" href="?page=escolha">Cancelar</a>
</div>

<h1>Novo Estado</h1>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrarEstado">

  <div class="mb-3">
    <label>Estado</label>
    <input type="text" name="nome" class="form-control">
  </div>

  <div class="mb-3">
    <label>UF</label>
    <input type="text" name="uf" class="form-control">
  </div>

  <div class="mb-3">
    <label>IBGE</label>
    <input type="number" name="ibge" class="form-control">
  </div>

  <div class="mb-3">
    <label>DDD</label>
    <input type="number" name="ddd" class="form-control">
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>