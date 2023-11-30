
<?php

   $sql = "SELECT * FROM estado";

   $res = $conexao->query($sql);

   $qtd = $res->num_rows;

    if($qtd > 0){
     /* INICIAR O SELECT */
      print "<div class='mb-3'>";
      print "<label for='idEstado'>Selecione o Estado</label>";
      print "<select class='form-select' id='idEstado' name='idEstado'>";
      if(!isset($row->id_estado)) print "<option selected></option>";

      /* DENTRO DO LAÇO DE ESTADO */
    while($estado = $res->fetch_object()){


        /* IF/ELSE COMUM */
        // if($estado->id == $row->id_estado){
        //     print "<option value='$estado->id' selected>$estado->nome</option>";
        // }else{
        //     /* LISTAR AS OPTIONS */
        //     print "<option value='$estado->id'>$estado->nome</option>";
        // }

        /* OPERADOR TERNÁRIO */
        print ($estado->id == $row->id_estado) ? "<option value='$estado->id' selected>$estado->nome</option>" : "<option value='$estado->id'>$estado->nome</option>";
    }

      /* FECHAR O SELECT */
      print "</select>";
      print "</div>";

  }else{
       print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
   }
?>