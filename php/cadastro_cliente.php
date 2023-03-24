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

        $idcliente = $_POST["cod_cli"];
        $cpf_cnpj = $_POST["cpf_cli"];
        $ie = $_POST["ie_cli"];
        $nome = $_POST["nome_cli"];
        $nasc = $_POST["nasc_cli"];
        $rg = $_POST["rg_cli"];
        $cnh = $_POST["cnh_cli"];
        $cat = $_POST["cat_cli"];
        $e_civil = $_POST["e_civil_cli"];
        $dta_cad = $_POST["dta_cad_cli"];
        $cep = $_POST["cep_cli"];
        $bairro = $_POST["bairro_cli"];
        $rua = $_POST["rua_cli"];
        $num = $_POST["numero_cli"];
        $complemento = $_POST["complemento_cli"];
        $tel = $_POST["telefone_cli"];
        $cel = $_POST["celular_cli"];
        $email = $_POST["email_cli"];
        $obs = $_POST["obs_cli"];
        $cidade = $_POST["cidade_cli"];


        if (!$conexao)
        {
            die("Ocorreu o seguinte erro: ".mysqli_connect_error());
        }
        
        $sql = "INSERT INTO cliente (idcliente, cpf_cnpj, ie, nome, nasc, rg, cnh, cat, e_civil, dta_cad, cep, bairro, rua, num, complemento, tel, cel, email, obs, cidade_idcidade) 
        VALUES ('$idcliente', '$cpf_cnpj', '$ie', '$nome', '$nasc', '$rg', '$cnh', '$cat', '$e_civil', '$dta_cad', '$cep', '$bairro', '$rua', '$num', '$complemento', '$tel', '$cel', '$email', '$obs','$cidade')";
        $instrucao = mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){ ?>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Usuário cadastrado com Sucesso!</h4>
						</div>
						<div class="modal-body">
							<?php echo "O usuário $nome foi cadastrado com sucesso"; ?>
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
							<h4 class="modal-title" id="myModalLabel">Erro ao cadastrar usuário!</h4>
						</div>
						<div class="modal-body">
							<?php echo $nome; ?>
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