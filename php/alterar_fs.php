<?php
	include_once("conexao.php");
	$id = mysqli_real_escape_string($conexao, $_POST['idcliente']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$detalhes = mysqli_real_escape_string($conexao, $_POST['cel']);
	echo "$id - $nome - $detalhes";
	$result_cursos = "UPDATE cursos SET nome='$nome', detalhes =  '$detalhes' WHERE idcliente = '$id'";
	
	$resultado_cursos = mysqli_query($conexao, $result_cursos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://172.16.80.179/tecinfo/anderson_vitor/page/abas.php'>
				<script type=\"text/javascript\">
					alert(\"Curso alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://172.16.80.179/tecinfo/anderson_vitor/page/abas.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>