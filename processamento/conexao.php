<?php
$mysqli = new mysqli("localhost: 3308", "root", "", "petisco");

if ($mysqli->connect_errno) {
    echo "Erro ao conectar: " . $mysqli->connect_error;
    exit();
}

function conectarBD(){

    $conexao = mysqli_connect('localhost: 3308','root','','petisco');
    return($conexao);
}
?>