<?php

require_once "config.php";


/* COM INSTANCIA A CLASS SQL 

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/* LISTANDO POR ID
$usuarios = new Usuario();

$usuarios->loadById(1);

echo $usuarios;
*/


/* LISTAR TODOS OS USUARIOS
$todosUsuario = Usuario::listarTodos();

echo json_encode($todosUsuario);

*/

/* LISTAR BUSCA

$consultaUsuario = Usuario::buscarDados("joão");

echo json_encode($consultaUsuario);*/

/* LISTAR - VALIDAR USUARIO


$validar= new Usuario();
$validar->validarUsuario('leo.sse','143113');
echo $validar;

*/