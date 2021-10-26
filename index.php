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
/* INSERIR
$inserirUsuario = new Usuario();

$usuario = $inserirUsuario->setUsuario("lucas.sse");

$senha = $inserirUsuario->setSenha("123#424");
$email = $inserirUsuario->setEmail("lucas.sse@minhaempresa.com");
$salario= $inserirUsuario->setSalario(1.569);


$inserirUsuario->cadastrarUsuario($usuario,$senha,$email,$salario);

echo $inserirUsuario;

*/

/* UPDATE */

$usuario = new Usuario();
$usuario->loadById(8);

$nvUsuario = "joca.ssa";
$nvSenha = "689466";
$nvEmail = "joca.sse@comdeus.com";
$nvSalario = 1656.00;
$usuario->update($nvUsuario,$nvSenha,$nvEmail,$nvSalario);

echo $usuario;