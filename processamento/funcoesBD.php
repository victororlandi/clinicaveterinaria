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

function retornarTutores(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cadastrotutores";
    $listaTutores = mysqli_query($conexao,$consulta);
    return $listaTutores;
}

function inserirTalento($NomeCompleto, $CPF, $AreaInteresse, $Telefone, $Endereco, $Email){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastrotalentos (NomeCompleto, CPF, AreaInteresse, Telefone, Endereco, Email)
                 VALUES ('$NomeCompleto', '$CPF', '$AreaInteresse', '$Telefone', '$Endereco', '$Email')";
    mysqli_query($conexao,$consulta); 
}

function retornarTalentos(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cadastrotalentos";
    $listaTalentos = mysqli_query($conexao,$consulta);
    return $listaTalentos;
}


function inserirAnimal($Nome, $Tipo, $Idade, $Peso, $Tutor, $Email){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastroanimais (Nome, Tipo, Idade, Peso, Tutor, Email)
                 VALUES ('$Nome', '$Tipo', '$Idade', '$Peso', '$Tutor', '$Email')";
    mysqli_query($conexao,$consulta); 
}

function retornarAnimais(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cadastroanimais";
    $listaAnimais = mysqli_query($conexao,$consulta);
    return $listaAnimais;
}

function inserirHistorico($Pet, $Tutor, $DataRegistro, $Diagnostico, $TratamentoPrescrito, $Medicamentos, $VeterinarioResponsavel, $AnexarArquivos){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastrohistorico (Pet, Tutor, DataRegistro, Diagnostico, TratamentoPrescrito, Medicamentos, VeterinarioResponsavel, AnexarArquivos)
                 VALUES ('$Pet', '$Tutor', '$DataRegistro', '$Diagnostico', '$TratamentoPrescrito', '$Medicamentos', '$VeterinarioResponsavel', '$AnexarArquivos')";
    mysqli_query($conexao,$consulta); 
}

function retornarHistoricos(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cadastrohistorico";
    $listaHistoricos = mysqli_query($conexao,$consulta);
    return $listaHistoricos;
}

function AgendarVacinacao($Pet, $Vacina, $DataAplicacao, $DataProximaDose, $VeterinarioResponsavel, $LoteVacina, $Tutor){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO agendamentosvacinacao (Pet, Vacina, DataAplicacao, DataProximaDose, VeterinarioResponsavel, LoteVacina, Tutor)
                 VALUES ('$Pet', '$Vacina', '$DataAplicacao', '$DataProximaDose', '$VeterinarioResponsavel', '$LoteVacina', '$Tutor')";
    mysqli_query($conexao,$consulta); 
}

function retornarAgendamentosVacinacao(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM agendamentosvacinacao";
    $listaAgendamentosVacinacao = mysqli_query($conexao,$consulta);
    return $listaAgendamentosVacinacao;
}

function AgendarConsulta($Pet, $Tutor, $DataHoraConsulta, $MotivoConsulta, $VeterinarioResponsavel, $Observacoes){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO agendamentosconsulta (Pet, Tutor, DataHoraConsulta, MotivoConsulta, VeterinarioResponsavel, Observacoes)
                 VALUES ('$Pet', '$Tutor', '$DataHoraConsulta', '$MotivoConsulta', '$VeterinarioResponsavel', '$Observacoes')";
    mysqli_query($conexao,$consulta); 
}

function retornarAgendamentosConsulta(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM agendamentosconsulta";
    $listaAgendamentosConsulta = mysqli_query($conexao,$consulta);
    return $listaAgendamentosConsulta;
}

?>