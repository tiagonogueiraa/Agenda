<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container menu">
		<div class="row">

			<div class="col-8">

				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="controller/controllerContato.php?opcao=4">Inserir</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="controller/controllerContato.php?opcao=2">Lista</a>
					</li>

				</ul>

			</div>

			<div class="col-4">
				<form action="../controller/controllerContato.php?opcao=" method="post" class="form-inline">
				<!--	<input type="hidden" name="opcao" value="3" /> -->
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar" name="busca" aria-label="Search">
					<button class="btn btn-outline-primary" type="submit">Buscar</button>
				</form>
			</div>

		</div>
		

	</div>
