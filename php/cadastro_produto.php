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
        $cod_interno_pro = $_POST['cod_interno_pro'];
        $cod_barras_pro = $_POST['cod_barras_pro'];
        $unidade_pro = $_POST['unidade_pro'];
        $quantidade_pro = $_POST['quantidade_pro'];
        $descricao_pro = $_POST['descricao_pro'];
        $rua_pro = $_POST['rua_pro'];
        $numero_pro = $_POST['numero_pro'];
        $complemento_pro = $_POST['complemento_pro'];
        $telefone_pro = $_POST['telefone_pro'];
        $celular_pro = $_POST['celular_pro'];
        $email_pro = $_POST['email_pro'];
        $entrada_pro = $_POST['entrada_pro'];
        $custo_pro = $_POST['custo_pro'];
        $lucro_pro = $_POST['lucro_pro'];
        $min_pro = $_POST['min_pro'];
        $max_pro = $_POST['max_pro'];
        $fornecedor_idcliente = $_POST['cod_fornecedor_pro'];
        $lucro = $_POST['lucro_pro'];
		
		//verifica se conexão está OK
        if (!$conexao)
        {
            die("Ocorreu o seguinte erro: ".mysqli_connect_error());
        }
        //Instrução SQl para inserir os dados
        $sql = "INSERT INTO produtos (idprodutos, cod_barras, unidade, quant, descricao, preco_entrada, preco_custo, lucro, min, max, fornecedor_idcliente) 
                                VALUES ('$cod_interno_pro', '$cod_barras_pro', '$unidade_pro', '$quantidade_pro','$descricao_pro','$entrada_pro','$custo_pro', '$lucro', '$min_pro','$max_pro', '$fornecedor_idcliente')";
      
      	//cria uma query com a conexão e a instrução SQL
          $instrucao = mysqli_query($conexao, $sql);

          if(mysqli_affected_rows($conexao) > 0){ ?>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">Produto cadastrado com Sucesso!</h4>
                          </div>
                          <div class="modal-body">
                              <?php echo "O produto $descricao_pro foi cadastrado com sucesso"; ?>
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
                              <h4 class="modal-title" id="myModalLabel">Erro ao cadastrar Produto!</h4>
                          </div>
                          <div class="modal-body">
                              <?php echo "$descricao_pro nao foi cadastrado com sucesso"; ?>
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
