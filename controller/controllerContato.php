<?php 


require_once('../class/conexao.php');
require_once('../class/contato.php');
require_once('../class/contatoDAO.php');

$opcao = (int)$_REQUEST['opcao'];
if($opcao == 1)
{
	$contato = new Contato($_POST['nome'], $_POST['telefoneFixo'], $_POST['telefoneCelular'], $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['cep'], $_POST['estado'], $_POST['pais']);

	$contatoDao = new ContatoDAO();

	$contatoDao->incluirContato($contato);

	

	header("Location:controllerAutor.php?opcao=2");
}





 ?>