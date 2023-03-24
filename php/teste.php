
<?php
            include("conexao.php");
            $result_cliente = "SELECT nome, idcidade FROM cidade WHERE idcidade=110002";
            $resultado_cliente = mysqli_query($conexao, $result_cliente);
			$instrucao = mysqli_query($conexao, $result_cliente);

            if ($instrucao){
                $rows_cliente = mysqli_fetch_array($resultado_cliente);
            }else {
                $erro = mysqli_error($conexao);
                echo "<p> O seguinte erro ocorreu: ".$erro."</p>";
            }
			mysqli_close($conexao);
			echo "<p style=\"color:red\">".$rows_cliente['idcidade'];
 ?>
 
 <?php
            include("conexao.php");
            $result_cliente = "SELECT nome FROM cidade WHERE idcidade=".$rows_cliente['idcidade'];;
            $resultado_cliente = mysqli_query($conexao, $result_cliente);
			$instrucao = mysqli_query($conexao, $result_cliente);

            if ($instrucao){
                $rows_cliente = mysqli_fetch_array($resultado_cliente);
            }else {
                $erro = mysqli_error($conexao);
                echo "<p> O seguinte erro ocorreu: ".$erro."</p>";
            }
			mysqli_close($conexao);
			echo "<p style=\"color:red\">".$rows_cliente['nome'];
 ?>
		
