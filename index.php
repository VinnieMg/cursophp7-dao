<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


//Carrega '1' usuário
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ol");
//echo json_encode($search);


//Carrega um usuário utilizando o login e a senha
$usuario = new Usuario();
$usuario->login("vinicius", "viniciuslindo");

echo $usuario;
 ?>