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
            $cod = $_GET['id'];
            $result_fornecedor = "SELECT * FROM fornecedor WHERE idcliente=".$cod;
            $resultado_fornecedor = mysqli_query($conexao, $result_fornecedor);
			$instrucao = mysqli_query($conexao, $result_fornecedor);
            if ($instrucao){
                $rows_fornecedor = mysqli_fetch_array($resultado_fornecedor);
            }else {
                $erro = mysqli_error($conexao);
                echo "<p> O seguinte erro ocorreu: ".$erro."</p>";
            }
			mysqli_close($conexao);
        ?>

		<section class="container-abas" >
			<input type="radio" name="abas" class="abas" id="aba1" >
			<label for="aba1" class="abas_cab">Cliente</label>
			<div>
				<section id="setor-cadastro" >
					<form class="form-cadastro" method="post" action="../php/cadastro_cliente.php" >
						<!-- Cabeçalho do Formulário -->
						<div class="cabeca">
							<h2 style="color: #1BBA93; font-weight: bold;">Cadastro de Clientes</h2>
						</div>
						<div class="form-corpo">
							<div class="content" >
							<div class="separacao" style="border:2px solid transparent;" >
								<div class="linha-botoes">
									<button class="btn btn-sep" id="icon-novo"><i class="fa-solid fa-file-pen"></i>Novo</button>		
									<button class="btn btn-sep" id="icon-imprimir"><i class="fa-solid fa-print"></i>Imprimir</button>
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada">
									<label for="cod_cli">Código</label>
									<input type="text" name="cod_cli" id="txt_cod_cli" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="tipo_cli">Tipo</label>
									<select name="tipo_cli" id="txt_tipo_cli" required style="height: 25px;">
										<option value="01">Física</option>
										<option value="02">Jurídica</option>
									</select>
								</div>
								<div class="campo-entrada">
									<label for="cpf_cli">CPF / CPNJ</label>
									<input type="text" name="cpf_cli" id="txt_cpf_cli" maxlength="15" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="ie_cli">IE</label>
									<input type="text" name="ie_cli" id="txt_ie_cli" maxlength="9" style="height: 25px;">
								</div>
							</div>
							<div class="linha" >
								<div class="campo-entrada-diverso" style="width: 97%;">
									<label for="nome_cli">Nome</label>
									<input type="text" name="nome_cli" id="txt_nome_cli" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso">
									<label for="nasc_cli">Nasc</label>
									<input type="date" name="nasc_cli" id="txt_nasc_cli" style="height: 25px;">
								</div>
							</div>
							<div class="linha" >
								<div class="campo-entrada">
									<label for="rg_cli">RG</label>
									<input type="text" name="rg_cli" id="txt_rg_cli" maxlength="9" style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="cnh_cli">CNH</label>
									<input type="text" name="cnh_cli" id="txt_cnh_cli" maxlength="9" style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="cat_cli">CAT</label>
									<select name="cat_cli" id="txt_cat_cli" style="height: 25px;">
										<option value="a">A</option>
										<option value="b">B</option>
										<option value="c">C</option>
										<option value="d">D</option>
										<option value="e">E</option>
									</select>
								</div>
								<div class="campo-entrada">
									<label for="e_civil_cli">Estado Civil</label>
									<select name="e_civil_cli" id="txt_e_civil_cli" style="height: 25px;">
										<option value="solteiro">Solteiro</option>
										<option value="casado">Casado</option>
										<option value="viuvo">Viúvo</option>
										<option value="divorciado">Divorciado</option>
									</select>
								</div>
								<div class="campo-entrada">
									<label for="dta_cad_cli">Dta. Cad</label>
									<input type="date" name="dta_cad_cli" id="txt_dta_cad_cli" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 12%;">
									<label fpr="cep_cli">CEP</label>
									<input type="text" name="cep_cli" id="txt_cep_cli" maxlength="8" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 8%;">
									<label for="uf_cli">UF</label>
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
								<div class="campo-entrada">
									<label for="cidade_cli">Cidade</label>
									<select name="cidade_cli" style="height: 25px;">
									<?php include("../php/lista_cidade_be.php") ?>
									</select>
								</div>
								<div class="campo-entrada-diverso" style="width: 25%;">
									<label for="bairro_cli">Bairro</label>
									<input type="text" name="bairro_cli" id="txt_bairro_cli" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 70%;">
									<label for="rua_cli">Rua</label>
									<input type="text" name="rua_cli" id="txt_rua_cli" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 10%;">
									<label for="numero_cli">Número</label>
									<input type="text" name="numero_cli" id="txt_num_cli" maxlength="4" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 20%;">
									<label for="complemento_cli">Complemento</label>
									<input type="text" name="complemento_cli" id="txt_complemento_cli" style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 12.5%;">
									<label for="telefone_cli">Telefone</label>
									<input type="text" name="telefone_cli" id="txt_telefone_cli" maxlength="8" style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 15%;">
									<label for="celular_cli">Celular</label>
									<input type="text" name="celular_cli" id="txt_celular_cli" maxlength="11" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="email_cli">E-mail</label>
									<input type="email" name="email_cli" id="txt_email_cli" required style="height: 25px;">
								</div>
							</div>
							<!--  obs   -->
							<div class="linha">
								<div class="campo-entrada">
									<label for="obs_cli">Observações</label>
									<textarea name="obs_cli" id="txt_obs_cli"></textarea>
								</div>
							</div>
						</div>
					</form>
				</section>
			</div>
			<!-- Fim formulário de cadastro de cliente-->
			<input type="radio" name="abas" class="abas" id="aba2" checked>
			<label for="aba2" class="abas_cab">Fornecedor</label>
			<div>
				<section id="setor-cadastro">
					<form id="form-cadastro-for" method= "post" action="../php/cadastro_fornecedor.php">
						<!-- Cabeçalho do Formulário -->
						<div class="cabeca">
							<h2 style="color: #1BBA93; font-weight: bold;">Cadastro de Fornecedores</h2>
						</div>
						<div class="form-corpo">
							<div class="content">
							<div class="separacao" style="border:2px solid transparent;">
								<div class="linha-botoes">
								<button class="btn btn-sep" id="icon-novo"><i class="fa-solid fa-file-pen"></i>Novo</button>		
								<button class="btn btn-sep" id="icon-imprimir"><i class="fa-solid fa-print"></i>Imprimir</button>
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada">
									<label for="cod_for">Código</label>
									<input type="number" value="<?=$rows_fornecedor['idcliente']; ?>" name="cod_for" id="txt_cod_for" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="cnpj_for">CNPJ</label>
									<input type="text" value="<?=$rows_fornecedor['cpf_cnpj']; ?>" name="cnpj_for" id="txt_cnpj_for" maxlength="15" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="ie_for">IE</label>
									<input type="text" value="<?=$rows_fornecedor['ie']; ?>" name="ie_for" id="txt_ie_for" maxlength="9" style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="i_municipal_for">I. Municipal</label>
									<input type="text" value="<?=$rows_fornecedor['im']; ?>" name="i_municipal_for" id="txt_i_municipal_for" maxlength="9" style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada">
									<label for="nome_fan_for">Nome fan</label>
									<input type="text" value="<?=$rows_fornecedor['nome_fantasia']; ?>" name="nome_fan_for" id="txt_nome_fan_for" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="razao_social_for">Razão social</label>
									<input type="text" value="<?=$rows_fornecedor['razao_social']; ?>" name="razao_social_for" id="txt_razao_social_for" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 12%;">
									<label for="cep_for">CEP</label>
									<input type="text" value="<?=$rows_fornecedor['cep']; ?>" name="cep_for" id="txt_cep_for" maxlength="8" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 8%;">
									<label for="uf_for">UF</label>
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
								<div class="campo-entrada">
									<label for="cidade_for">Cidade</label>
									<select name="cidade_for" style="height: 25px;">
									<?php include("conexao.php");
            								$result_cliente = "SELECT nome FROM cidade WHERE idcidade=".$rows_clientes['cidade_idcidade'];
											
											$resultado_cliente = mysqli_query($conexao, $result_cliente);
											if ($instrucao){
												$rows_cliente = mysqli_fetch_array($resultado_cliente);
											}else {
											$erro = mysqli_error($conexao);
											echo "<p> O seguinte erro ocorreu: ".$erro."</p>";
											}
										?>
									</select>
								</div>
								<div class="campo-entrada-diverso" style="width: 25%;">
									<label for="bairro_for">Bairro</label>
									<input type="text" value="<?=$rows_fornecedor['bairro']; ?>" name="bairro_for" id="txt_bairro_for" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 70%;">
									<label for="rua_for">Rua</label>
									<input type="text" value="<?=$rows_fornecedor['rua']; ?>" name="rua_for" id="txt_rua_for" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 10%;">
									<label for="numero_for">Número</label>
									<input type="text" value="<?=$rows_fornecedor['num']; ?>" name="numero_for" id="txt_numero_for" maxlength="4" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 20%;">
									<label for="complemento_for">Complemento</label>
									<input type="text" value="<?=$rows_fornecedor['complemento']; ?>" name="complemento_for" id="txt_complemento_for" style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 12.5%;">
									<label for="telefone">Telefone</label>
									<input type="text" value="<?=$rows_fornecedor['tel']; ?>" name="telefone_for" id="txt_telefone_for" maxlength="8" style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 15%;">
									<label for="celular_for">Celular</label>
									<input type="text" value="<?=$rows_fornecedor['cel']; ?>" name="celular_for" id="txt_celular_for" maxlength="11" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="email_for">E-mail</label>
									<input type="email" value="<?=$rows_fornecedor['email']; ?>" name="email_for" id="txt_email_for" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada">
									<label for="obs_for">Observações</label>
									<textarea name="obs_for" value="<?=$rows_fornecedor['obs']; ?>" id="txt_obs_for"> </textarea>
								</div>
							</div>
						</div>
					</form>
				</section>
			</div>
			<input type="radio" name="abas" class="abas" id="aba3"  >
			<label for="aba3" class="abas_cab">Produtos</label>
			<div>
				<section id="setor-cadastro">
					<form id="form-cadastro-pro" method="post" action="../php/cadastro_produto.php">
						<!-- Cabeçalho do Formulário -->
						<div class="cabeca">
							<h2 style="color: #1BBA93; font-weight: bold;">Cadastro de produtos</h2>
						</div>
						<div class="form-corpo">
						<div class="separacao" style="border:2px solid transparent;" >
								<div class="linha-botoes">
								<button class="btn btn-sep" id="icon-novo"><i class="fa-solid fa-file-pen"></i>Novo</button>		
								<button class="btn btn-sep" id="icon-imprimir"><i class="fa-solid fa-print"></i>Imprimir</button>
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 20%;">
									<label for="cod_interno_pro">Código Interno</label>
									<input type="number" name="cod_interno_pro" id="txt_cod_interno_pro" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="cod_barras_pro">Código de barras</label>
									<input type="text" name="cod_barras_pro" id="txt_cod_barras_pro" maxlength="15" required style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 10%;">
									<label for="unidade_pro">Unidade</label>
									<input type="text" name="unidade_pro" id="txt_unidade_pro" maxlength="9" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 20%;">
									<label for="quantidade_pro">Quantidade</label>
									<input type="text" name="quantidade_pro" id="txt_quantidade_pro" required style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="descricao_pro">Descrição</label>
									<input type="text" name="descricao_pro" id="txt_descricao_pro" required style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso">
									<label for="fornecedor_pro">Fornecedor</label>
									<select name="cod_fornecedor_pro" style="height: 25px; width: 850px;">
										<?php include("../php/lista_fornecedor_be.php") ?>
									</select>
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 70%;">
									<label for="rua_pro">Rua</label>
									<input type="text" name="rua_pro" id="txt_rua_pro" style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 10%;">
									<label for="numero_pro">Número</label>
									<input type="text" name="numero_pro" id="txt_numero_pro" maxlength="4" style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="complemento_pro">Complemento</label>
									<input type="text" name="complemento_pro" id="txt_complemento_pro" style="height: 25px;">
								</div>
							</div>
							<div class="linha">
								<div class="campo-entrada-diverso" style="width: 12.5%;">
									<label for="telefone_pro">Telefone</label>
									<input type="text" name="telefone_pro" id="txt_telefone_pro" maxlength="8" style="height: 25px;">
								</div>
								<div class="campo-entrada-diverso" style="width: 15%;">
									<label for="celular_pro">Celular</label>
									<input type="text" name="celular_pro" id="txt_celular_pro" maxlength="11" style="height: 25px;">
								</div>
								<div class="campo-entrada">
									<label for="email_pro">E-mail</label>
									<input type="email" name="email_pro" id="txt_email_pro" style="height: 25px;">
								</div>
							</div>
							<div class="linha" >
								<div class="linha">
									<fieldset  class="campo-entrada-fieldset">
										<legend style="color: #1BBA93;">Definições de entrada</legend>
										<div class="campo-entrada-fieldset">
											<label for="entrada_pro">Entrada</label>
											<input type="text" name="entrada_pro" id="txt_entrada_pro" required style="height: 25px;">
										</div>
										<div class="campo-entrada-fieldset">
											<label for="custo_pro">Custo</label>
											<input type="text" name="custo_pro" id="txt_custo_pro" required style="height: 25px;">
										</div>
										<div class="campo-entrada-fieldset">
											<label for="lucro_pro">Lucro</label>
											<input type="text" name="lucro_pro" id="lucro_pro" style="height: 25px;">
										</div>
									</fieldset>
								</div>
								<div class="linha">
									<fieldset class="campo-entrada-fieldset">
										<legend style="color: #1BBA93;">Controle de estoque</legend>
										<div class="campo-entrada-fieldset">
											<label for="min_pro">Min</label>
											<input type="text" name="min_pro" id="txt_min_pro" required style="height: 25px;">
										</div>
										<div class="campo-entrada-fieldset">
											<label for="max_pro">Max</label>
											<input type="text" name="max_pro" id="txt_max_pro" required style="height: 25px;">
										</div>
									</fieldset>
								</div>
							</div>
						</div>
					</form>
				</section>
			</div>
			<input type="radio" name="abas" class="abas" id="aba4">
			<label for="aba4" class="abas_cab">Relatório</label>
			<div >
				<section id="setor-cadastro">
					<form id="form-relatorio" method="post" action="../php/relatorio.php">
						<!-- Cabeçalho do Formulário -->
						<div class="cabeca">
							<h2 style="color: #1BBA93; font-weight: bold;">Relatório</h2>
						</div>
						<div class="form-corpo">
							<div class="separacao" >
								<div class="linha" >
									<div class="separacao-interna">
										<div class="campo-entrada-diverso">	
											<label for="cliente_rel">Cliente</label>
											<input id="txt_clt_rel" type="radio" value="1" name="tiporel">
										</div>
									</div>
									<div class="separacao-interna">
										<div class="campo-entrada-diverso">
											<label for="fornecedor_rel">Fornecedor</label>
											<input id="txt_for_rel" type="radio" value="2" name="tiporel">
										</div>
									</div>
									<div class="separacao-interna"  >
										<div class="campo-entrada-diverso">
											<label for="produto_rel">Produto</label>
											<input id="txt_prod_rel" type="radio" value="3" name="tiporel">
										</div>
									</div>
								</div>
							</div>
							<div class="separacao">
								<div class="linha">
									<div class="campo-entrada-diverso" style="width:100%;">
										<label for="cod.inicial">Cód. Inicial</label>
										<input name="codini_rel" id="txt_codini_rel" type="text" style="height: 25px;">
									</div>
									<div class="campo-entrada-diverso" style="width:100%;">
										<label for="codfinal">Cód. Final</label>
										<input name="codfin_rel" id="txt_codfin_rel" type="text" style="height: 25px;">
									</div>
								</div>
							</div>
							<div class="separacao">
								<div class="linha">
									<div class="campo-entrada-diverso" style="width:70%;">
										<label for="nome">Cidade</label>
										<select name="cidade_rel">
											<option value="0">--</option>
											<?php
												include("../php/lista_cidade_be.php");
												?>	
										</select>
									</div>
									<div class="campo-entrada-diverso" style="width:70%;">
										<label for="nome">Bairro</label>
										<input name="bairro_rel" id="txt_bairro_rel" type="text" style="height: 25px;">
									</div>
								</div>
							</div>
							<div class="separacao" style="border:2px solid gray;">
								<div class="linha">
									<button type="submit" class="btn1 btn-sep1" id="icon-gerar" style="margin-left:37%;">Gerar</button>		
									<button type="reset" class="btn1 btn-sep1" id="icon-limpar">Limpar</button>
									<p id="teste"></p>
								</div>
							</div>
							<br>
						<div class="separacao" style="width:99%; height:400px; overflow:auto;">
							<div class="separacao" style="width:99%;">
								<div class="cabeca">
									<h1 style="padding:0px;">Clientes</h1>
								</div>
							</div>
							<div class="separacao" style="width:99%; height:100px; overflow:auto;">
								<div class="linha">
									<div class="campo-entrada-diverso" style="width:100%;">
										<?php
											include("../php/listar_em_tabela_fs.php");
											?>
									</div>
								</div>
							</div>
							<div class="separacao" style="width:99%;">
								<div class="cabeca">
									<h1 style="padding:0px;">Fornecedores</h1>
								</div>
							</div>
											
							<div class="separacao" style="width:99%; height:100px; overflow:auto;">
								<div class="linha">
									<div class="campo-entrada-diverso" style="width:100%;">
										<?php
											include("../php/listar_em_tabela_for.php");
											?>										
									</div>
								</div>
							</div>
							<div class="separacao" style="width:99%;">
								<div class="cabeca">
									<h1 style="padding:0px;" >Produtos</h1>
								</div>
							</div>
							<div class="separacao" style="width:99%; height:100px; overflow:auto;">
								<div class="linha">
									<div class="campo-entrada-diverso" style="width:100%;">
										<?php
											include("../php/listar_em_tabela_pro.php");
											?>
									</div>
								</div>
							</div>
						</div>
						</div>
						<br>
					</form>
				</section>
			</div>
		</section>

		<!-- Modal -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!-- Font awesome -->
		<script src="https://kit.fontawesome.com/8e9cc19741.js" crossorigin="anonymous"></script>
	</body>
</html> 