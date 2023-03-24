<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../img/favicon.png" type="image/png">
		<link rel="stylesheet" href="../css/tabela_css.css">
		<link href="https://fonts.googleapis.com/css?family=Tangerine|Inconsolata|Cantarell|Courgette|Lato" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<title>Relatórios</title>
	</head>
	
	<?php
		include("conexao.php");
		
		$codini_rel = $_POST["codini_rel"];
		$codfin_rel = $_POST["codfin_rel"];
		$cidade_rel = $_POST["cidade_rel"];
		$bairro_rel = $_POST["bairro_rel"];
		$tiporel = $_POST["tiporel"];
		
		if ($codini_rel==""){$codini_rel=0;}
		if ($codfin_rel==""){$codfin_rel=99999;}
		if ($cidade_rel==0)	{$cidade_rel ="cidade_idcidade is not null";} else{	$cidade_rel ="cidade_idcidade =".$cidade_rel;}
		if ($bairro_rel==""){$bairro_rel ="bairro is not null";} else{$bairro_rel ="bairro =\"".$bairro_rel."\"";}
		
		if ($tiporel == 1)
		{
			$result_cidades = "SELECT * FROM `cliente` WHERE ((idcliente>=".$codini_rel." and idcliente<=".$codfin_rel.") and (".$cidade_rel.") and (".$bairro_rel."))";
			$instrucao = mysqli_query($conexao, $result_cidades);
			
			if($instrucao)
			{
				echo "<table border=\"1\">";
				echo "<thead>";
				echo "<tr><td colspan=\"11\"> Relátório de clientes </td></tr>";
				echo "<tr><td style=\"width:2%;\">Cód</td><td style=\"width:3%;\">Doc</td><td style=\"width:10%;\">Nome</td><td style=\"width:2%;\">cidade</td><td style=\"width:2%;\">cep</td><td style=\"width:2%;\">bairro</td><td style=\"width:4%;\">rua</td><td style=\"width:1%;\">num</td><td style=\"width:2%;\">tel</td><td style=\"width:2%;\">cel</td><td style=\"width:10%;\">email</td></tr>"; 	
				echo "</thead>";

				while($rows_clientes = mysqli_fetch_array($instrucao))
				{
					echo "<tr><td style=\"width:2%;\">".$rows_clientes['idcliente']."</td><td style=\"width:3%;\">".$rows_clientes['cpf_cnpj']."</td><td style=\"width:10%;\">".$rows_clientes['nome']."</td><td style=\"width:2%;\">".$rows_clientes['cidade_idcidade']."</td><td style=\"width:2%;\">".$rows_clientes['cep']."</td><td style=\"width:2%;\">".$rows_clientes['bairro']."</td><td style=\"width:4%;\">".$rows_clientes['rua']."</td><td style=\"width:1%;\">".$rows_clientes['num']."</td><td style=\"width:2%;\">".$rows_clientes['tel']."</td><td style=\"width:2%;\">".$rows_clientes['cel']."</td><td style=\"width:10%;\">".$rows_clientes['email']."</td></tr>"; 	
				}
				echo "</table>";
			}
			else
			{
				$erro = mysqli_error($conexao);
				echo("<p>Ocorreu o erro: ".$erro."</p>");
			}
			
		}
		
		if ($tiporel == 2)
		{
			$result_cidades = "SELECT * FROM `fornecedor` WHERE ((idcliente>=".$codini_rel." and idcliente<=".$codfin_rel.") and (".$cidade_rel.") and (".$bairro_rel."))";
			$instrucao = mysqli_query($conexao, $result_cidades);
			
			if($instrucao)
			{
				echo "<table border=\"1\">";
				echo "<thead>";
				echo "<tr><td colspan=\"11\"> Relátório de clientes </td></tr>";
				echo "<tr><td style=\"width:2%;\">Cód</td><td style=\"width:3%;\">Doc</td><td style=\"width:10%;\">Nome</td><td style=\"width:2%;\">cidade</td><td style=\"width:2%;\">cep</td><td style=\"width:2%;\">bairro</td><td style=\"width:4%;\">rua</td><td style=\"width:1%;\">num</td><td style=\"width:2%;\">tel</td><td style=\"width:2%;\">cel</td><td style=\"width:10%;\">email</td></tr>"; 	
				echo "</thead>";
				
				while($rows_clientes = mysqli_fetch_array($instrucao))
				{
					echo "<tr><td style=\"width:2%;\">".$rows_clientes['idcliente']."</td><td style=\"width:3%;\">".$rows_clientes['cpf_cnpj']."</td><td style=\"width:10%;\">".$rows_clientes['nome_fantasia']."</td
					><td style=\"width:2%;\">".$rows_clientes['cidade_idcidade']."</td><td style=\"width:2%;\">".$rows_clientes['cep']."</td><td style=\"width:2%;\">".$rows_clientes['bairro']."</td><td style=\"width:4%;\">".$rows_clientes['rua']."</td><td style=\"width:1%;\">".$rows_clientes['num']."</td><td style=\"width:2%;\">".$rows_clientes['tel']."</td><td style=\"width:2%;\">".$rows_clientes['cel']."</td><td style=\"width:10%;\">".$rows_clientes['email']."</td></tr>"; 	
				}
				echo "</table>";
			}
			else
			{
				$erro = mysqli_error($conexao);
				echo("<p>Ocorreu o erro: ".$erro."</p>");
			}
		}
		
		if ($tiporel == 3)
		{
			$result_cidades = "SELECT * FROM `produtos` WHERE ((idprodutos>=".$codini_rel." and idprodutos<=".$codfin_rel."))";
			$instrucao = mysqli_query($conexao, $result_cidades);
			
			if($instrucao)
			{
				echo "<table border=\"1\">";
				echo "<thead>";
				echo "<tr><td colspan=\"11\"> Relátório de clientes </td></tr>";
				echo "<tr><td style=\"width:2%;\">Cód</td><td style=\"width:3%;\">Doc</td><td style=\"width:10%;\">Nome</td><td style=\"width:2%;\">cidade</td><td style=\"width:2%;\">cep</td><td style=\"width:2%;\">bairro</td><td style=\"width:4%;\">rua</td><td style=\"width:1%;\">num</td><td style=\"width:2%;\">tel</td><td style=\"width:2%;\">cel</td><td style=\"width:10%;\">email</td></tr>"; 	
				echo "</thead>";
				
				while($rows_clientes = mysqli_fetch_array($instrucao))
				{
					echo "<tr><td style=\"width:2%;\">".$rows_clientes['idprodutos']."</td><td style=\"width:3%;\">".$rows_clientes['cod_barras']."</td><td style=\"width:10%;\">".$rows_clientes['unidade']."</td
					><td style=\"width:2%;\">".$rows_clientes['quant']."</td><td style=\"width:2%;\">".$rows_clientes['descricao']."</td><td style=\"width:2%;\">".$rows_clientes['preco_entrada']."</td><td style=\"width:4%;\">".$rows_clientes['preco_custo']."</td><td style=\"width:1%;\">".$rows_clientes['lucro']."</td><td style=\"width:2%;\">".$rows_clientes['min']."</td><td style=\"width:2%;\">".$rows_clientes['max']."</td><td style=\"width:10%;\">".$rows_clientes['fornecedor_idcliente']."</td></tr>"; 	
				}
				echo "</table>";
			}
			else
			{
				$erro = mysqli_error($conexao);
				echo("<p>Ocorreu o erro: ".$erro."</p>");
			}
		}
		echo "<br><button onclick=\"window.print()\">Imprimir / Salvar PDF</button>";
		mysqli_close($conexao);
	?>
