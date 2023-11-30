<h1>Editar Estado</h1>
<?php 
    //Seleciona todos da tabela + com parâmetro WHERE do ID
    $sql = "SELECT * FROM estado WHERE id=".$_REQUEST["id"];
    //Executar a conexão
    $res = $conexao->query($sql);
    //Rede de objetos direto na linha
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editarEstado"> 
  <input type="hidden" name="id" value="<?php print $row->id; ?>">

  <div class="mb-3">
    <label>Estado</label>
    <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
  </div>

  <div class="mb-3">
    <label>UF</label>
    <input type="text" name="uf" value="<?php print $row->uf;?>" class="form-control">
  </div>

  <div class="mb-3">
    <label>IBGE</label>
    <input type="number" name="ibge" value="<?php print $row->ibge;?>" class="form-control">
  </div>

  <div class="mb-3">
    <label>DDD</label>
    <input type="number" name="ddd" value="<?php print $row->ddd;?>" class="form-control">
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>