<?php 

require_once('../class/conexao.php');
require_once('../class/usuario.php');
require_once('../class/usuarioDAO.php');


$opcao = (int)$_REQUEST['opcao'];


if($opcao == 1)
{

	$options = [

		'cost' => 11;
	];

	$senha = $_POST['senha'];
	$senhaC = password_hash($senha, PASSWORD_DEFAULT, $options);

	$usuario = new Usuario($_POST['nome'], $POST['email'], $POST['cpf'], $POST['usuario'], $senhaC, $POST['nivel'], $POST['ativo']);

	$usuarioDao = new UsuarioDAO();

	$usuarioDao->incluirUsuario($usuario);
}


 ?>