<?php
				include("conexao.php");
				$result_cidades = "SELECT idcliente, nome_fantasia FROM fornecedor order by nome_fantasia ASC";
				$instrucao = mysqli_query($conexao, $result_cidades);
				
				if($instrucao)
				{
				while($rows_cidades = mysqli_fetch_array($instrucao))
					{
						echo "<option value=\"".$rows_cidades['idcliente']."\">".$rows_cidades['idcliente']." - ".$rows_cidades['nome_fantasia']."</option>";
					}
				}
				else{
					$erro = mysqli_error($conexao);
					echo("<p>Ocorreu o erro: ".$erro."</p>");
				}
				mysqli_close($conexao);
?>