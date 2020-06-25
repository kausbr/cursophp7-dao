<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//traz apenas um usuario da consulta do metodo
//$root = new usuario();
//$root->loadbyId(3);
//echo $root."</br>";

///////////////////
//carrega uma lista de usuarios
//$lista = usuario:: getList();
//echo json_encode($lista);

///////////////////
//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

///////////////////
//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","1111");
echo $usuario;

?>