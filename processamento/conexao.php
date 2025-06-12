<?php
$mysqli = new mysqli("localhost", "root", "", "petisco");

if ($mysqli->connect_errno) {
    echo "Erro ao conectar: " . $mysqli->connect_error;
    exit();
}

function conectarBD(){

    $conexao = mysqli_connect('localhost','root','','petisco');
    return($conexao);
}
?>