<?php

$conn = new mysqli("localhost"//ou ip do servidor
, "root"//usuario
,""//senha
,"dbphp7"//banco de dados
);

if ($conn->connect_error){
    echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array()){
    array_push($data, $row);
}

echo json_encode($data);

?>