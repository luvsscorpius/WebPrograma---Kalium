<?php
	
	include("conexao.php");
	$cod = $_POST['cod_cli'];
	$cpf_cnpj = $_POST['cpf_cli'];
    $ie = $_POST['ie_cli'];
    $nome = $_POST['nome_cli'];
    $nasc = $_POST['nasc_cli'];
    $rg = $_POST['rg_cli'];
    $cat = $_POST['cat_cli'];
    $e_civil = $_POST['e_civil_cli'];
    $dta_cad = $_POST['dta_cad_cli'];
    $cep = $_POST['cep_cli'];
    $bairro = $_POST['bairro_cli'];
    $rua = $_POST['rua_cli'];
    $num = $_POST['numero_cli'];
    $complemento = $_POST['complemento_cli'];
    $tel = $_POST['telefone_cli'];
    $cel = $_POST['celular_cli'];
    $email = $_POST['email_cli'];
    $obs = $_POST['obs_cli'];
    $cidade_idcidade = $_POST['cidade_cli'];
	$result_cursos = "UPDATE cliente SET idcliente='".$cod."',cpf_cnpj='".$cpf_cnpj."',ie='".$ie."', nome='".$nome."', nasc='".$nasc."', rg='".$rg."', cat='".$cat."', e_civil='".$e_civil."', dta_cad='".$dta_cad."',
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
