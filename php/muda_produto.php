<?php
	
	include("conexao.php");
	$cod = $_POST['cod_interno_pro'];
	$cod_barras = $_POST['cod_barras_pro'];
    $unidade = $_POST['unidade_pro'];
    $quant = $_POST['quantidade_pro'];
    $descricao = $_POST['descricao_pro'];
    $preco_entrada = $_POST['entrada_pro'];
    $preco_custo = $_POST['custo_pro'];
    $lucro = $_POST['lucro_pro'];
    $min = $_POST['min_pro'];
    $max = $_POST['max_pro'];
	$result_cursos = "UPDATE produtos SET idprodutos='".$cod."',cod_barras='".$cod_barras."',unidade='".$unidade."', quant='".$quant."', descricao='".$descricao."',  preco_entrada='".$preco_entrada."',
	preco_custo='".$preco_custo."', lucro='".$lucro."', min='".$min."', max='".$max."' WHERE idprodutos=".$cod;
	$instrucao = mysqli_query($conexao, $result_cursos);
	
	if($instrucao)
	{
		header("Location:../page/abas.php");
	}
	else{
		$erro = mysqli_error($conexao);
		echo("<p>O seguinte erro ocorreu: ".$erro."</p>");
	}
mysqli_close($conexao);
?>
