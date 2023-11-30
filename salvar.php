<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrarEstado':

            $nomeEstado = $_POST["nome"];
            $uf = $_POST["uf"];
            $ibge = $_POST["ibge"];
            $ddd = $_POST["ddd"];
    
            $sql = "INSERT INTO estado (nome, uf, ibge, ddd, pais) VALUE ('{$nomeEstado}', '{$uf}', '{$ibge}', '{$ddd}', '1')";
    
            $res = $conexao->query($sql);
            
            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listarEstado';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');<script>";
                print "<script>location.href='?page=listarEstado';<script>";
            }
        break;

        case 'cadastrarCidade':

            $nomeCidade = $_POST["nome"];
            $uf = $_POST["uf"];
            $ibge = $_POST["ibge"];
            $idEstado = $_POST["idEstado"];
    
            $sql = "INSERT INTO cidade (nome, uf, ibge, id_estado) VALUE ('{$nomeCidade}', '{$uf}', '{$ibge}', '{$idEstado}')";
    
            $res = $conexao->query($sql);
            
            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listarCidade';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');<script>";
                print "<script>location.href='?page=listarCidade';<script>";
            }
        break;

        case 'editarEstado':

            $nomeEstado = $_POST["nome"];
            $uf = $_POST["uf"];
            $ibge = $_POST["ibge"];
            $ddd = $_POST["ddd"];

            $sql = "UPDATE estado SET 
                        nome='{$nomeEstado}',
                        uf='{$uf}',
                        ibge='{$ibge}',
                        ddd='{$ddd}'
                    WHERE
                        id=".$_REQUEST["id"];
                    

            $res = $conexao->query($sql);
            
            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listarEstado';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listarEstado';</script>";
            }
        break;

        case 'editarCidade':

            $nomeCidade = $_POST["nome"];
            $uf = $_POST["uf"];
            $ibge = $_POST["ibge"];
            $idEstado = $_POST["idEstado"];

            $sql = "UPDATE cidade SET 
                        nome='{$nomeCidade}',
                        uf='{$uf}',
                        ibge='{$ibge}',
                        id_estado='{$idEstado}'
                    WHERE
                        id=".$_REQUEST["id"];
                    

            $res = $conexao->query($sql);
            
            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listarCidade';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listarCidade';</script>";
            }
        break;

        case 'excluirEstado':

            $sql = "DELETE FROM estado WHERE id=".$_REQUEST["id"];

            $res = $conexao->query($sql);
            
            if($res==true){
                print "<script>alert('Exluido com sucesso');</script>";
                print "<script>location.href='?page=listarEstado';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listarEstado';</script>";
            }
        break;

        case 'excluirCidade':

            $sql = "DELETE FROM cidade WHERE id=".$_REQUEST["id"];

            $res = $conexao->query($sql);
            
            if($res==true){
                print "<script>alert('Exluido com sucesso');</script>";
                print "<script>location.href='?page=listarCidade';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listarCidade';</script>";
            }
        break;
    }
?>