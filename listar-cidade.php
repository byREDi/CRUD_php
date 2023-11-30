<h1>Listar Cidades</h1>
<?php 

    $sql = "SELECT 
    cidade.id,
    cidade.nome,
    cidade.uf,
    cidade.ibge,
    cidade.id_estado,
    estado.nome AS nome_estado,
    estado.uf AS uf_estado 
    FROM cidade 
    LEFT JOIN estado ON cidade.id_estado = estado.id 
    ORDER BY cidade.id DESC 
    LIMIT 50;";

    $res = $conexao->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";

        print "<th>Cidade</th>";
        print "<th>UF</th>";
        print "<th>IBGE</th>";
        print "<th>ESTADO</th>";
        print "<th>Ações</th>";

        print "</tr>";

        while($cidade = $res->fetch_object()){
            print "<tr>";

            print "<td>".$cidade->nome."</td>";
            print "<td>".$cidade->uf."</td>";
            print "<td>".$cidade->ibge."</td>";
            print "<td>".$cidade->nome_estado . " - " . $cidade->uf_estado . "</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editarCidade&id=".$cidade->id."'\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))   {location.href='?page=salvar&acao=excluirCidade&id=".$cidade->id."';}else {false;}\" class='btn btn-danger'>Excluir</button>
                </td>";

            print "</tr>";

        }
    }

    

?>