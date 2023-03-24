<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../img/favicon.png" type="image/png">
		<link rel="stylesheet" href="../css/abas_css.css">
		<link rel="stylesheet" href="../css/tabela_css.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css?family=Tangerine|Inconsolata|Cantarell|Courgette" rel="stylesheet">
		<title>Abas</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
<?php
	include("conexao.php");
								
    echo "<table style=\"max-width: 1000px;\">";
    echo "<thead>";
    echo "	<tr>";
    echo "		<th style=\"width:10%;\">Cod</th>";
    echo "		<th style=\"width:50%;\">Nome</th>";
    echo "		<th style=\"width:10%;\">Cel</th>";
    echo "		<th style=\"width:10%;\">Tel</th>";
    echo "		<th style=\"width:10%;\">Ação</th>";
    echo "	</tr>";
    echo "</thead>";
    echo "<tbody>";

    $result_cursos = "SELECT idcliente, nome_fantasia, cel, tel FROM `fornecedor` ";
										$resultado_cursos = mysqli_query($conexao, $result_cursos);
										$instrucao = mysqli_query($conexao, $result_cursos);
										
										if($instrucao)
										{
											while($rows_fornecedor = mysqli_fetch_array($resultado_cursos))
											{
												echo "<tr>
												<td style=\"width:10%;\">".$rows_fornecedor['idcliente']."</td>
												<td style=\"width:50%;\">".$rows_fornecedor['nome_fantasia']."</td>
												<td style=\"width:10%;\">".$rows_fornecedor['cel']."</td>	
												<td style=\"width:10%;\">".$rows_fornecedor['tel']."</td>
												<td style=\"width:10%;\">
												<a href=\"../php/abas_alterar_fornecedor.php?id=".$rows_fornecedor['idcliente']."\" class=\"bt-editar\" style=\"background: green; color: white; border-radius: 2px; text-decoration:none; padding-left:11px; padding-right: 11px\">V</a>
												<a href=\"../php/delete_for.php?id=".$rows_fornecedor['idcliente']."\" class=\"bt-excluir\" style=\"background: red; color: white; border-radius: 2px; text-decoration:none; padding-left:11px; padding-right: 11px\"\">X</a>
												</td>
												</tr>";
											}
											echo " </tbody>";
											echo "</table>";
										}
										else{
											$erro = mysqli_error($conexao);
											echo("<p>O seguinte erro ocorreu: ".$erro."</p>");
										}

?>
</body>
</html>