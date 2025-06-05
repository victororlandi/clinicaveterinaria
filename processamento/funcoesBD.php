<?php 

function conectarBD(){

    $conexao = mysqli_connect('localhost: 3308','root','','petisco');
    return($conexao);
}

function inserirTutor($NomeCompleto, $CPF, $DataNascimento, $Telefone, $Endereco, $Email, $Senha ){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastrotutores (NomeCompleto, CPF, DataNascimento, Telefone, Endereco, Email, Senha)
                 VALUES ('$NomeCompleto', '$CPF', '$DataNascimento', '$Telefone', '$Endereco', '$Email', '$Senha')";
    mysqli_query($conexao,$consulta); 
}

/*
function inserirTalento($NomeCompleto, $CPF, $AreaInteresse, $Telefone, $Endereco, $Email){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastrotalentos (NomeCompleto, CPF, AreaInteresse, Telefone, Endereco, Email)
                 VALUES ('$NomeCompleto', '$CPF', '$AreaInteresse', '$Telefone', '$Endereco', '$Email')";
   mysqli_query($conexao,$consulta); 
}*/

?>