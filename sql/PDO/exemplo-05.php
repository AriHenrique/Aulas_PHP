<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "arih", "1234");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();


echo " APAGADO OK!<BR/>================================<br/>";

?>