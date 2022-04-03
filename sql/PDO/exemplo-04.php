<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "arih", "1234");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "jose";
$password = "123456789";
$id = 5;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo " INSERIDO OK!<BR/>================================<br/>";

?>