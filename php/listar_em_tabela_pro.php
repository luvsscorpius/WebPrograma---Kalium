<?php
	include("conexao.php");
								
    echo "<table style=\"max-width: 1000px;\">";
    echo "<thead>";
    echo "	<tr>";
    echo "		<th style=\"width:10%;\">Cod</th>";
    echo "		<th style=\"width:50%;\">Cod Barras</th>";
    echo "		<th style=\"width:10%;\">Descrição</th>";
    echo "		<th style=\"width:10%;\">Ação</th>";
    echo "	</tr>";
    echo "</thead>";
    echo "<tbody>";

    $result_cursos = "SELECT idprodutos, cod_barras, descricao FROM `produtos` ";
										$resultado_cursos = mysqli_query($conexao, $result_cursos);
										$instrucao = mysqli_query($conexao, $result_cursos);
										
										if($instrucao)
										{
											while($rows_fornecedor = mysqli_fetch_array($resultado_cursos))
											{
												echo "<tr>
												<td style=\"width:10%;\">".$rows_fornecedor['idprodutos']."</td>
												<td style=\"width:50%;\">".$rows_fornecedor['cod_barras']."</td>
												<td style=\"width:10%;\">".$rows_fornecedor['descricao']."</td>	
												<td style=\"width:10%;\">
												<a href=\"alterar_fs.php?id=".$rows_fornecedor['idprodutos']."\" class=\"bt-editar\" style=\"background: green; color: white; border-radius: 2px;  text-decoration:none; padding-left:13px; padding-right: 13px;\">V</a>
												<a href=\"delete_be.php?id=".$rows_fornecedor['idprodutos']."\" class=\"bt-excluir\" style=\"background: red; color: white; border-radius: 2px;  text-decoration:none; padding-left:13px; padding-right: 13px;\">X</a>
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