<?php
	
	include("conexao.php");
	$cod = $_POST['cod_for'];
	$cpf_cnpj = $_POST['cnpj_for'];
    $ie = $_POST['ie_for'];
    $i_municipal = $_POST['i_municipal_for'];
    $nome_fantasia = $_POST['nome_fan_for'];
    $razao_social = $_POST['razao_social_for'];
    $cep = $_POST['cep_for'];
    $bairro = $_POST['bairro_for'];
    $rua = $_POST['rua_for'];
    $num = $_POST['numero_for'];
    $complemento = $_POST['complemento_for'];
    $tel = $_POST['telefone_for'];
    $cel = $_POST['celular_for'];
    $email = $_POST['email_for'];
    $obs = $_POST['obs_for'];
    $cidade_idcidade = $_POST['cidade_for'];
	$result_cursos = "UPDATE fornecedor SET idcliente='".$cod."',cpf_cnpj='".$cpf_cnpj."',ie='".$ie."', im='".$i_municipal."', nome_fantasia='".$nome."',  razao_social='".$razao_social."',
	cep='".$cep."', bairro='".$bairro."', rua='".$rua."', num='".$num."', complemento='".$complemento."', tel='".$tel."', cel='".$cel."', email='".$email."', obs='".$obs."', cidade_idcidade='".$cidade_idcidade."' WHERE idcliente=".$cod;
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
