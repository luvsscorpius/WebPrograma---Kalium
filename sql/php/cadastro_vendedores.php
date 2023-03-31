<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once("conexao.php");

        $nome_ven = $_POST["nome_ven"];
        $cod_ven = $_POST["cod_ven"];
        $senha_ven = $_POST["senha_ven"];
        $cpf_ven = $_POST["cpf_ven"];
        $cep_ven = $_POST["cep_ven"];
        $bairro_ven = $_POST["bairro_ven"];
        $rua_ven = $_POST["rua_ven"];
        $numero_ven = $_POST["numero_ven"];
        $complemento_ven = $_POST["complemento_ven"];
        $telefone_ven = $_POST["telefone_ven"];
        $celular_ven = $_POST["celular_ven"];
        $email_ven = $_POST["email_ven"];
        $obs_ven = $_POST["obs_ven"];
        $cidade_ven = $_POST["cidade_ven"];
    


        if (!$conexao)
        {
            die("Ocorreu o seguinte erro: ".mysqli_connect_error());
        }
        
        $sql = "INSERT INTO vendedores (cod, nome, senha, cpf, email, tel, cel, bairro, rua, n, complemento, cep, obs, cidade_idcidade) 
        VALUES ('$cod_ven', '$nome_ven', '$senha_ven', '$cpf_ven', '$email_ven', '$telefone_ven', '$celular_ven', '$bairro_ven', '$rua_ven', '$numero_ven', '$complemento_ven', '$cep_ven', '$obs_ven', '$cidade_ven')";
        $instrucao = mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){ ?>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Vendedor cadastrado com Sucesso!</h4>
						</div>
						<div class="modal-body">
							<?php echo "O vendedor $nome_ven foi cadastrado com sucesso"; ?>
						</div>
						<div class="modal-footer">
							<a href="../page/abas.php"><button type="button" class="btn btn-success">Ok</button></a>
						</div>
					</div>
				</div>
			</div>				
			<script>
				$(document).ready(function () {
					$('#myModal').modal('show');
				});
			</script>
		<?php }else{ ?>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Erro ao cadastrar vendedor!</h4>
						</div>
						<div class="modal-body">
							<?php echo $nome_ven; ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
							<a href="../page/abas.php"><button type="button" class="btn btn-success" style="background: red;">Ok</button></a>
						</div>
					</div>
				</div>
			</div>				
			<script>
				$(document).ready(function () {
					$('#myModal').modal('show');
				});
			</script>
		<?php } ?>
</body>
</html>