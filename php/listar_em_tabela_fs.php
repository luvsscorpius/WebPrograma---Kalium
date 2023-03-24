<?php
	include("conexao.php");
	$result_cursos = "SELECT * FROM cliente";
	$resultado_cursos = mysqli_query($conexao, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Cod</th>
								<th>Nome</th>
								<th>Cel</th>
								<th>Tel</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_clientes = mysqli_fetch_assoc($resultado_cursos)){ ?>
								<tr>
									<td><?php echo $rows_clientes['idcliente']; ?></td>
									<td><?php echo $rows_clientes['nome']; ?></td>
									<td><?php echo $rows_clientes['cel']; ?></td>
									<td><?php echo $rows_clientes['tel']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rows_clientes['idcliente']; ?>" data-whatevernome="<?php echo $rows_clientes['nome']; ?>"data-whateverdetalhes="<?php echo $rows_clientes['cel']; ?>">Editar</button>
										<button type="button" class="btn btn-xs btn-danger">Apagar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_clientes['idcliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_clientes['nome']; ?></h4>
											</div>
											<div class="modal-body">
												<p><?php echo $rows_clientes['idcliente']; ?></p>
												<p><?php echo $rows_clientes['nome']; ?></p>
												<p><?php echo $rows_clientes['cel']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>
		
		
		

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  </div>
			  <div class="modal-body">
				<form method="POST" action="processa.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Cod:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Tipo:</label>
					<select name="tipo_cli" id="txt_tipo_cli" required style="height: 25px;">
							<option value="01">Física</option>
							<option value="02">Jurídica</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">CPF / CNPJ:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">IE:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nome:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nasc:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">RG:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">CNH:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">CAT:</label>
					<select name="cat_cli" id="txt_cat_cli" style="height: 25px;">
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="d">D</option>
							<option value="e">E</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">CAT:</label>
					<select name="e_civil_cli" id="txt_e_civil_cli" style="height: 25px;">
							<option value="solteiro">Solteiro</option>
							<option value="casado">Casado</option>
							<option value="viuvo">Viúvo</option>
							<option value="divorciado">Divorciado</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Dta. Cad:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">CEP:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">CEP:</label>
					<select name="uf_cli" style="height: 25px;">
										<option value="ac">AC</option>
										<option value="al">AL</option>
										<option value="ap">AP</option>
										<option value="am">AM</option>
										<option value="ba">BA</option>
										<option value="ce">CE</option>
										<option value="es">ES</option>
										<option value="go">GO</option>
										<option value="ma">MA</option>
										<option value="mt">MT</option>
										<option value="ms">MS</option>
										<option value="mg">MG</option>
										<option value="pa">PA</option>
										<option value="pb">PB</option>
										<option value="pr">PR</option>
										<option value="pe">PE</option>
										<option value="pi">PI</option>
										<option value="rj">RJ</option>
										<option value="rn">RN</option>
										<option value="rs">RS</option>
										<option value="ro">RO</option>
										<option value="rr">RR</option>
										<option value="sc">SC</option>
										<option value="sp">SP</option>
										<option value="se">SE</option>
										<option value="to">TO</option>
										<option value="df">DF</option>
					</select>
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Cidade:</label>
					<select name="cidade_cli" style="height: 25px;">
						<?php include("../php/lista_cidade_be.php") ?>
					</select>
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Bairro:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Rua:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Número:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Complemento:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Telefone:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Celular:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Email:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				</div>

				<div class="form-group">
					<label for="message-text" class="control-label">Obs:</label>
					<textarea name="detalhes" class="form-control" id="detalhes"></textarea>
				</div>
				
				<input name="id" type="hidden" class="form-control" id="id-curso" value="">

				<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>
			 
				</form>
			  </div>
			  
			</div>
		  </div>
		</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientnome = button.data('whatevernome')
		  var recipientdetalhes = button.data('whateverdetalhes')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('ID ' + recipient)
		  modal.find('#id-curso').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#detalhes').val(recipientdetalhes)
		  
		})
	</script>
  </body>
</html>