<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <section class="marca"> 
            <img src="../assets/img/icons/logo-2.png">
            <h1>petisco</h1>
        </section>
        <nav>
            <ul>
                <li><a href="#">A clínica</a></li>
                <li><a href="#">Planos</a></li>
                <li><a href="#">Nossos profissionais</a></li>
                <li><a href="#" class="item-menu-moldura">Participar</a></li>
                <li><a href="#" class="item-menu-moldura">Cadastro/Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="formulario-img-lateral">
        <section class="formulario">
            <h1>CADASTRO DE HISTÓRICO</h1>
            <form method="POST" action="../processamento/processamento.php">
                <input type="text" placeholder="Pet" name="inputPet">
                <input type="text" placeholder="Tutor" name="inputTutor">
                <label>Data do Registro</label>
                <input type="date" placeholder="Data do Registro" name="inputDataRegistro">
                <input type="text" placeholder="Diagnostico" name="inputDiagnostico">
                <input type="text" placeholder="Tratamento Prescrito" name="inputTratamentoPrescrito">
                <!--<label for="tratamentoprescrito">Tratamento Prescrito:</label><br>
                <textarea class="tratamentoprescrito" name="inputTratamentoPrescrito" rows="5" cols="50" style="width: 100%; height: 100px;"></textarea><br> -->
                <input type="text" placeholder="Medicamentos" name="inputMedicamentos">
                <input type="text" placeholder="Veterinário Responsável" name="inputVeterinarioResponsavel">
                <input type="file" name="inputAnexarArquivos">
                <button type="submit">Cadastrar</button>
            </form>
            <h3><a href="ver-historicos.php">Visuzalizar Historicos</a></h3>
        </section>
        <img id="cad-animais" src="../assets/img/illustrations/JPG/27.jpg">
    </section>
    <!--<pre>
        Campos:

        Pet (dropdown vinculado aos animais cadastrados)
        Tutor (auto-preenchido com base no pet)
        Data do registro (auto-preenchido com data atual)
        Diagnóstico (textarea obrigatório)
        Tratamento prescrito (textarea)
        Medicamentos (campo multilinha com dosagens)
        Veterinário responsável (dropdown)
        Anexar arquivos (opcional: upload de exames em PDF/imagem)
        
        <i>Essa tela só pode ser acessada após fazer login ou após um primeiro cadastro</i>
    </pre> -->
    <footer>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.6348838151825!2d-51.386619625905276!3d-22.139892510911558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f501254620eb%3A0x16bc508109c64255!2sFatec%20de%20Presidente%20Prudente!5e0!3m2!1spt-BR!2sbr!4v1747918682634!5m2!1spt-BR!2sbr" width="300px" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <ul>
            <li><a href="#">Nossos Serviços</a></li>
            <li><a href="#">Dicas Para Teu Pet</a></li>
            <li><a href="#">Presenteie com Petisco</a></li>
            <li><a href="#">Planos</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Link pro zap web</a></li>
        </ul>
        <ul>
            <li><a href="#">Perguntas Frequentes</a></li>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos e Condições</a></li>
            <li><a href="#">Clube de Membros</a></li>
        </ul>
        <ul>
            <li><a href="#">Nossos Contatos</a></li>
            <section class="social">
            <a href="#"><img src="../assets/img/icons/facebook.png"></a>
            <a href="#"><img src="../assets/img/icons/instagram.png"></a>
            <a href="#"><img src="../assets/img/icons/zapefron.png"></a>
            </section>
            <li><a href="#">Desinscreva-se</a></li>
        </ul>
        <img id="dog" src="../assets/img/illustrations/PNG/08-cut.png">
    </footer>
</body>
</html>