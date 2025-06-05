<?php

session_start();
require "funcoesBD.php";

if (!empty ($_POST['inputNomeCompleto']) && !empty ($_POST['inputCPF']) 
    && !empty ($_POST['inputDataNascimento']) && !empty ($_POST['inputTelefone'])
    && !empty ($_POST['inputEndereco']) && !empty ($_POST['inputEmail']) 
    && !empty ($_POST['inputSenha'])){

    $NomeCompleto = $_POST['inputNomeCompleto'];
    $CPF = $_POST['inputCPF'];
    $DataNascimento = $_POST['inputDataNascimento'];
    $Telefone = $_POST['inputTelefone'];
    $Endereco = $_POST['inputEndereco'];
    $Email = $_POST['inputEmail'];
    $Senha = $_POST['inputSenha'];

    inserirTutor($NomeCompleto, $CPF, $DataNascimento, $Telefone, $Endereco, $Email, $Senha);

    header('Location:../view/cadastro-tutores');
    die();
} 

/*
if (!empty ($_POST['inputNomeCompleto']) && !empty ($_POST['inputCPF']) 
    && !empty ($_POST['AreaInteresse']) && !empty ($_POST['inputTelefone'])
    && !empty ($_POST['inputEndereco']) && !empty ($_POST['inputEmail'])){

    $NomeCompleto = $_POST['inputNomeCompleto'];
    $CPF = $_POST['inputCPF'];
    $AreaInteresse = $_POST['inputAreaInteresse'];
    $Telefone = $_POST['inputTelefone'];
    $Endereco = $_POST['inputEndereco'];
    $Email = $_POST['inputEmail'];

    inserirTalento($NomeCompleto, $CPF, $AreaInteresse, $Telefone, $Endereco, $Email);

    header('Location:../view/cadastro-tutores');
    die();
} */
?>