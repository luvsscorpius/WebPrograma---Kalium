<?php
				include("conexao.php");
				$result_cidades = "SELECT idcidade, nome FROM cidade order by nome ASC";
				$instrucao = mysqli_query($conexao, $result_cidades);
				
				if($instrucao)
				{
				while($rows_cidades = mysqli_fetch_array($instrucao))
					{
						echo "<option value=\"".$rows_cidades['idcidade']."\">".$rows_cidades['nome']."</option>";
					}
				}
				else{
					$erro = mysqli_error($conexao);
					echo("<p>Ocorreu o erro: ".$erro."</p>");
				}
				mysqli_close($conexao);
?>