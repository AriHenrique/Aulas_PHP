<?php

$conn = new mysqli("localhost"//ou ip do servidor
, "root"//usuario
,""//senha
,"dbphp7"//banco de dados
);

if ($conn->connect_error){
    echo "Error: ". $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!(*#&";

$stmt->execute();

?>