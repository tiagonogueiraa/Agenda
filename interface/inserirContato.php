

<?php require_once("../class/conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Contatos</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


	<?php 

	session_start();

	#$cidades = $_SESSION['cidades'];

	?>

	<div class="container">
		<!-- menu -->


		<div class="row">

			<div class="col-8">

				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="inserirContato.php">Inserir</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="exibirContatos.php">Lista Contatos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="alterarContato.php">Alterar Contato</a>
					</li>

				</ul>

			</div>

			<div class="col-4">
				<form action="../controller/controllerContato.php?opcao=3" method="post" class="form-inline">
					<!--	<input type="hidden" name="opcao" value="3" /> -->
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar" name="busca" aria-label="Search">
					<button class="btn btn-outline-primary" type="submit">Buscar</button>
				</form>
			</div>

		</div>
		



		<div class="row formContato" >
			<div class="col-12">

				<h1>Cadastro Contato</h1>
				<fieldset>
					<form action="../controller/controllerContato.php" method="post">

						<input type="hidden" name="opcao" value="1" />

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
							</div>
							<div class="form-group col-md-3">
								<label for="telefoneFixo">Telefone Fixo</label>
								<input type="number" class="form-control" name="telefoneFixo" id="telefoneFixo" placeholder="Telefone Fixo">
							</div>
							<div class="form-group col-md-3">
								<label for="telefoneCelular">Telefone Celular</label>
								<input type="number" class="form-control" name="telefoneCelular" id="telefoneCelular" placeholder="Celular">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="rua">Rua</label>
								<input type="text" class="form-control" name="rua" id="rua" placeholder="Rua">
							</div>

							<div class="form-group col-md-4">
								<label for="bairro">Bairro</label>
								<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
							</div>
							<div class="form-group col-md-4">
								<label for="cidade">Cidade</label>
								<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="estado">Estado</label>
								<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
							</div>

							<div class="form-group col-md-4">
								<label for="cep">Cep</label>
								<input type="text" class="form-control" name="cep" id="cep" placeholder="cep">
							</div>




						<!--		<div class="form-group">
									<label for="cidade">Cidade</label>
									<select type="text" class="form-control" name="id_cidade">
										<?php foreach ($cidades as $c) {
				#							echo "<option value=$c->id_cidade> $c->cidade</option>";
										} ?>	

									</select>
								</div>
							-->
							<div class="form-group col-md-4">
								<label for="pais">País</label>
								<input type="text" class="form-control" name="pais" id="cep" placeholder="País">
							</div>
						</div>
						<br>

						<br>
						<button type="submit" class="btn btn-primary">Gravar</button>
					</form>
				</fieldset>


			</div>
		</div>

	</div>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>


</body>
</html>



