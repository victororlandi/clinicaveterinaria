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

    header('Location:../view/cadastro-tutores.php');
    
    die();
} 

else if (!empty ($_POST['inputNomeCompleto']) && !empty ($_POST['inputCPF']) 
    && !empty ($_POST['inputAreaInteresse']) && !empty ($_POST['inputTelefone'])
    && !empty ($_POST['inputEndereco']) && !empty ($_POST['inputEmail'])){

    $NomeCompleto = $_POST['inputNomeCompleto'];
    $CPF = $_POST['inputCPF'];
    $AreaInteresse = $_POST['inputAreaInteresse'];
    $Telefone = $_POST['inputTelefone'];
    $Endereco = $_POST['inputEndereco'];
    $Email = $_POST['inputEmail'];

    inserirTalento($NomeCompleto, $CPF, $AreaInteresse, $Telefone, $Endereco, $Email);

    header('Location:../view/cadastro-talentos.php');

    die();
}

else if (!empty ($_POST['inputNome']) && !empty ($_POST['inputTipo']) 
    && !empty ($_POST['inputIdade']) && !empty ($_POST['inputPeso'])
    && !empty ($_POST['inputTutor']) && !empty ($_POST['inputEmail'])){

    $Nome = $_POST['inputNome'];
    $Tipo = $_POST['inputTipo'];
    $Idade = $_POST['inputIdade'];
    $Peso = $_POST['inputPeso'];
    $Tutor = $_POST['inputTutor'];
    $Email = $_POST['inputEmail'];

    inserirAnimal($Nome, $Tipo, $Idade, $Peso, $Tutor, $Email);

    header('Location:../view/cadastro-animais.php');

    die();
}

else if (!empty ($_POST['inputPet']) && !empty ($_POST['inputTutor']) 
    && !empty ($_POST['inputDataRegistro']) && !empty ($_POST['inputDiagnostico']) 
    && !empty ($_POST['inputTratamentoPrescrito']) && !empty ($_POST['inputMedicamentos']) 
    && !empty ($_POST['inputVeterinarioResponsavel'])){

    $Pet = $_POST['inputPet'];
    $Tutor = $_POST['inputTutor'];
    $DataRegistro = $_POST['inputDataRegistro'];
    $Diagnostico = $_POST['inputDiagnostico'];
    $TratamentoPrescrito = $_POST['inputTratamentoPrescrito'];
    $Medicamentos = $_POST['inputMedicamentos'];
    $VeterinarioResponsavel = $_POST['inputVeterinarioResponsavel'];
    $AnexarArquivos = $_POST['inputAnexarArquivos'];

    inserirHistorico($Pet, $Tutor, $DataRegistro, $Diagnostico, $TratamentoPrescrito, $Medicamentos, $VeterinarioResponsavel, $AnexarArquivos);

    header('Location:../view/cadastro-historico.php');
    
    die();
}

else if (!empty ($_POST['inputPet']) && !empty ($_POST['inputVacina']) 
    && !empty ($_POST['inputDataAplicacao']) && !empty ($_POST['inputDataProximaDose']) 
    && !empty ($_POST['inputVeterinarioResponsavel']) && !empty ($_POST['inputLoteVacina']) 
    && !empty ($_POST['inputTutor'])){

    $Pet = $_POST['inputPet'];
    $Vacina = $_POST['inputVacina'];
    $DataAplicacao = $_POST['inputDataAplicacao'];
    $DataProximaDose = $_POST['inputDataProximaDose'];
    $VeterinarioResponsavel = $_POST['inputVeterinarioResponsavel'];
    $LoteVacina = $_POST['inputLoteVacina'];
    $Tutor = $_POST['inputTutor'];

    AgendarVacinacao($Pet, $Vacina, $DataAplicacao, $DataProximaDose, $VeterinarioResponsavel, $LoteVacina, $Tutor);

    header('Location:../view/agendamentos-vacinacao.php');
    
    die();
}

else if (!empty ($_POST['inputPet']) && !empty ($_POST['inputTutor']) 
    && !empty ($_POST['inputDataHoraConsulta']) && !empty ($_POST['inputMotivoConsulta']) 
    && !empty ($_POST['inputVeterinarioResponsavel']) && !empty ($_POST['inputObservacoes'])){

    $Pet = $_POST['inputPet'];
    $Tutor = $_POST['inputTutor'];
    $DataHoraConsulta = $_POST['inputDataHoraConsulta'];
    $MotivoConsulta = $_POST['inputMotivoConsulta'];
    $VeterinarioResponsavel = $_POST['inputVeterinarioResponsavel'];
    $Observacoes = $_POST['inputObservacoes'];

    AgendarConsulta($Pet, $Tutor, $DataHoraConsulta, $MotivoConsulta, $VeterinarioResponsavel, $Observacoes);

    header('Location:../view/agendamentos-consulta.php');
    
    die();
}

?>