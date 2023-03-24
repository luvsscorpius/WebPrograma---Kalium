<!DOCTYPE html>
<html lang="pt-br">
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

	//Chama os parâmetros da conexão	
		include("conexao.php");
	
	//recebe dados via methodo Post
        $cod_for = $_POST['cod_for'];
        $cnpj_for = $_POST['cnpj_for'];
        $ie_for = $_POST['ie_for'];
        $i_municipal_for = $_POST['i_municipal_for'];
        $nome_fan_for = $_POST['nome_fan_for'];
        $razao_social_for = $_POST['razao_social_for'];
        $cep_for = $_POST['cep_for'];
        $bairro_for=$_POST['bairro_for'];
        $rua_for = $_POST['rua_for'];
        $numero_for = $_POST['numero_for'];
        $complemento_for = $_POST['complemento_for'];
        $telefone_for = $_POST['telefone_for'];
        $celular_for = $_POST['celular_for'];
        $email_for = $_POST['email_for'];
        $obs_for = $_POST['obs_for'];
        $cidade_for = $_POST['cidade_for'];
		
		//verifica se conexão está OK
        if (!$conexao)
        {
            die("Ocorreu o seguinte erro: ".mysqli_connect_error());
        }
        //Instrução SQl para inserir os dados
        $sql = "INSERT INTO fornecedor (idcliente, cpf_cnpj, ie, im, nome_fantasia, razao_social, cep, bairro, rua, num, complemento, tel, cel, email, obs, cidade_idcidade) VALUES ('$cod_for', '$cnpj_for', '$ie_for', '$i_municipal_for','$nome_fan_for','$razao_social_for','$cep_for','$bairro_for','$rua_for','$numero_for','$complemento_for','$telefone_for','$celular_for','$email_for','$obs_for','$cidade_for')";
      
        $instrucao = mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){ ?>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Fornecedor cadastrado com Sucesso!</h4>
						</div>
						<div class="modal-body">
							<?php echo "O fornecedor $nome_fan_for foi cadastrado com sucesso"; ?>
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
							<h4 class="modal-title" id="myModalLabel">Erro ao cadastrar Fornecedor!</h4>
						</div>
						<div class="modal-body">
							<?php echo $nome_fan_for; ?>
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
