<?php
    include("conexao.php");
    $cod = $_GET['id'];
    $result_fornecedores = "DELETE FROM produtos WHERE idprodutos=".$cod;
    $instrucao = mysqli_query($conexao, $result_fornecedores);

    if ($instrucao){
        header("Location:../php/listar_em_tabela_pro.php");
    } else {
        $erro = mysqli_error($conexao);
        echo ("<p> O seguinte erro ocorreu: ".$erro."</p>");
    }
?>
