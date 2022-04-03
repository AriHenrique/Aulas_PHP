<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "arih", "1234");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo " APAGADO OK!<BR/>================================<br/>";

?>