<div class="mb-3">
    <a class="btn btn-danger fw-bold" href="?page=escolha">Cancelar</a>
</div>

<h1>Nova Cidade</h1>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrarCidade">

  <div class="mb-3">
    <label>Cidade</label>
    <input type="text" name="nome" class="form-control">
  </div>

  <div class="mb-3">
    <label>UF</label>
    <input type="number" name="uf" class="form-control">
  </div>

  <div class="mb-3">
    <label>IBGE</label>
    <input type="number" name="ibge" class="form-control">
  </div>

  <?php 
    include("componentes/selectEstados.php");
  ?>

  <div class="mb-3">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>

</form>