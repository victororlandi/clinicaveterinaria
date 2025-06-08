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

function inserirTalento($NomeCompleto, $CPF, $AreaInteresse, $Telefone, $Endereco, $Email){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastrotalentos (NomeCompleto, CPF, AreaInteresse, Telefone, Endereco, Email)
                 VALUES ('$NomeCompleto', '$CPF', '$AreaInteresse', '$Telefone', '$Endereco', '$Email')";
    mysqli_query($conexao,$consulta); 
}

function inserirAnimal($Nome, $Tipo, $Idade, $Peso, $Tutor, $Email){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastroanimais (Nome, Tipo, Idade, Peso, Tutor, Email)
                 VALUES ('$Nome', '$Tipo', '$Idade', '$Peso', '$Tutor', '$Email')";
    mysqli_query($conexao,$consulta); 
}

function inserirHistorico($Pet, $Tutor, $DataRegistro, $Diagnostico, $TratamentoPrescrito, $Medicamentos, $VeterinarioResponsavel, $AnexarArquivos){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO cadastrohistorico (Pet, Tutor, DataRegistro, Diagnostico, TratamentoPrescrito, Medicamentos, VeterinarioResponsavel, AnexarArquivos)
                 VALUES ('$Pet', '$Tutor', '$DataRegistro', '$Diagnostico', '$TratamentoPrescrito', '$Medicamentos', '$VeterinarioResponsavel', '$AnexarArquivos')";
    mysqli_query($conexao,$consulta); 
}

function AgendarVacinacao($Pet, $Vacina, $DataAplicacao, $DataProximaDose, $VeterinarioResponsavel, $LoteVacina, $Tutor){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO agendamentovacinacao (Pet, Vacina, DataAplicacao, DataProximaDose, VeterinarioResponsavel, LoteVacina, Tutor)
                 VALUES ('$Pet', '$Vacina', '$DataAplicacao', '$DataProximaDose', '$VeterinarioResponsavel', '$LoteVacina', '$Tutor')";
    mysqli_query($conexao,$consulta); 
}

function AgendarConsulta($Pet, $Tutor, $DataHoraConsulta, $MotivoConsulta, $VeterinarioResponsavel, $Obervacoes){

    $conexao = conectarBD();
    
    $consulta = "INSERT INTO agendamentoconsulta (Pet, Tutor, DataHoraConsulta, MotivoConsulta, VeterinarioResponsavel, Obervacoes)
                 VALUES ('$Pet', '$Tutor', '$DataHoraConsulta', '$MotivoConsulta', '$VeterinarioResponsavel', '$Obervacoes')";
    mysqli_query($conexao,$consulta); 
}
?>