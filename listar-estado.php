<h1>Listar Estado</h1>
<?php 
    $sql = "SELECT * FROM estado ORDER BY id DESC";

    $res = $conexao->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";

        print "<th>Estado</th>";
        print "<th>UF</th>";
        print "<th>IBGE</th>";
        print "<th>DDD</th>";
        print "<th>Ações</th>";

        print "</tr>";

        while($estado = $res->fetch_object()){
            print "<tr>";

            print "<td>".$estado->nome."</td>";
            print "<td>".$estado->uf."</td>";
            print "<td>".$estado->ibge."</td>";
            print "<td>".$estado->ddd."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editarEstado&id=".$estado->id."'\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluirEstado&id=".$estado->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";

            print "</tr>";
        }
        print "</table>";

    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>