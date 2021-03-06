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

	$contatos = $_SESSION['contatos'];

	?>
	
	<div class="container menu">
		<div class="row">

			<div class="col-8">

				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="inserirContato.php">Inserir</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Buscar</a>
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
		

	</div>

	

	<div class="container">

		<h1>Lista de Telefone</h1>




		<div class="row tabelaContatos" >
			<table class="table-hover table-sm table-responsive" >
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Nome</th>
						<!-- <th>Sobrenome</th> -->
						<th scope="col">Telefone Celular</th>
						<th scope="col">Telefone Fixo</th>
						<th scope="col">Rua</th>
						<th scope="col">Bairro</th>
						<th scope="col">Cidade</th>
						<th scope="col" style="width: all;">CEP</th>
						<th scope="col">Estado</th>
						<th scope="col">País</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($contatos as $cont) {
						echo "<tr>";
						
						echo "<td>".$cont->nome."</td>";
						echo "<td>".$cont->telefoneCelular."</td>";
						echo "<td>".$cont->telefoneFixo."</td>";
						echo "<td>".$cont->rua."</td>";
						echo "<td>".$cont->bairro."</td>";
						echo "<td>".$cont->cidade."</td>";
						echo "<td>".$cont->estado."</td>";
						echo "<td>".$cont->cep."</td>";
						echo "<td>".$cont->pais."</td>";
						
					#	echo "<td><a href='controlerAutor.php?opcao=3&id=".$cont->id. "'>Alterar</a>&nbsp;";
					#	echo "<a href='controlerAutor.php?opcao=4&id=".$cont->id."'>Excluir</a></td>";
					#	echo "</tr>";


						echo "
						
						<td><a href='../controller/controllerContato.php?opcao=5&id=".$cont->id. "'>
						<button type='button' class='btn btn-primary'>Alterar</button>

						</a></td>";
						echo "<td><a href='controlerAutor.php?opcao=4&id=".$cont->id."'>
						<button type='button' class='btn btn-primary'>Excluir</button>
						</a></td>";
						echo "</tr>

						"
						
						;

					}
					?>
				</tbody>
			</table>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>


	</body>
	</html>