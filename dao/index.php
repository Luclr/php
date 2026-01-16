<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
//carrega um usuario
//$root = new Usuario();
//$root->loadbyID(6);
//echo $root;

// carrega uma lista de usuarios

//$usuario = new Usuario();
//$lista = $usuario->getList();

//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("l");
//echo json_encode($search);


//carrega um usuario usando o login e a senha 

//$usuario = new Usuario();
//$usuario->login("lucas","12345@123");

//echo $usuario;

/*criando um novo usuario
$aluno = new Usuario("aluno","@lun0");

$aluno->insert();

echo $aluno;
*/

/* alterar um usuario
$usuario = new Usuario();

$usuario->loadByID(7);

$usuario->update("Lucas Ramos","17demaio");

echo $usuario;
*/


$usuario =  new Usuario();

$usuario->loadByID(7);

$usuario->delete();

echo $usuario;




?>