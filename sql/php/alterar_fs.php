<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/cadastro_css.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Lato' rel="stylesheet" type="text/css">
		<title>Cadastro de cursos</title> 
	</head>
	
	<body>
		
		<?php
			include("dados_conexao_be.php");
			$cod = $_GET['id'];
			$result_cursos = "SELECT * FROM cursos WHERE cod=".$cod;
			$resultado_cursos = mysqli_query($conexao, $result_cursos);
			$instrucao = mysqli_query($conexao, $result_cursos);
			if($instrucao)
			{
			$rows_cursos = mysqli_fetch_array($resultado_cursos);
			}
			else{
				$erro = mysqli_error($conexao);
				echo("<p>O seguinte erro ocorreu: ".$erro."</p>");
			}
			mysqli_close($conexao);
		?>			
		
		
		<section id="setor-cadastro">
			<form class="form-cadastro" method="POST" action="muda_be.php">
				<!-- Cabeçalho do Formulário -->
				<div class="cabeca">
					<h1>Cadastro de Cursos</h1>
				</div>
				<!-- Corpo do formulário -->
				<div class="form-corpo">				
					<div class="separacao" >	
						<div class="linha">
							<div class="campo-entrada-diverso" style="width:10%;">
							<label for="nome_curso">Cod:</label>
							<input value="<?=$rows_cursos['cod']; ?>" name="cod" type="text" readonly="readonly" style="background-color:#d3d3d3;">
							</div>
						
							<div class="campo-entrada-diverso" style="width:35%;">
							<label for="unidade">Unidade:</label>
							<select name="unidade">
							<option value="<?=$rows_cursos['unidade']; ?>">Pouso Alegre</option>
							</select>
							</div>
													
							<div class="campo-entrada-diverso" style="width:65%;">
							<label for="nome_curso">Nome do Curso:</label>
							<input value="<?=$rows_cursos['nome']; ?>" name="nome_curso" type="text" maxlength="35">
							</div>
							
						</div>
						
						<div class="linha">
							<div class="campo-entrada-diverso" style="width:100%;">
								<label for="descr">Descrição:</label><br>
								<textarea name="descr" cols="90" rows="4" maxlength="250"><?=$rows_cursos['descr']; ?></textarea>	
							</div>
						</div>
					</div>	
					
					<br>
					
					<div class="separacao">	
						<div class="linha">
							<button class="btn btn-sep" id="icon-novo" name="gravar" value="v_gravar" style="width:100%;">Salvar</button>		
						</div>	
					</div>
					
				</div>	
			</section>		
		</body>
	</html>												