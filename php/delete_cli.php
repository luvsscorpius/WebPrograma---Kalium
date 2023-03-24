<?php
    include("conexao.php");
    $cod = $_GET['id'];
    $result_clientes = "DELETE FROM cliente WHERE idcliente=".$cod;
    $instrucao = mysqli_query($conexao, $result_clientes);

    if ($instrucao){
        header("Location: ../php/listar_em_tabela_fs.php");
    } else {
        $erro = mysqli_error($conexao);
        echo ("<p> O seguinte erro ocorreu: ".$erro."</p>");
    }
    mysqli_close($conexao);
?>
