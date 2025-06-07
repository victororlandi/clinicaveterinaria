<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>histórico médico</title>
</head>
<body>
    <header>
        <section class="marca"> 
            <a href="index.php"><img src="assets/img/icons/logo-2.png"></a>
            <a href="index.php"><h1>petisco</h1></a>
        </section>
        <nav>
            <ul>
                <li><a href="view/quem-somos.php">quem somos</a></li>
                <li><a href="view/servicos.php">serviços</a></li>
                    <li>
                        <a href="#" class="botao-dropdown">cadastros</a>
                        <section class="menu-dropdown">
                            <ul>
                                <li><a href="view/cadastro-tutores.php">tutores</a></li>
                                <li><a href="view/cadastro-animais.php">animais</a></li>
                                <li><a href="view/cadastro-historico.php">histórico</a></li>
                                <li><a href="view/cadastro-talentos.php">talentos</a></li>
                            </ul>
                    </section>
                    </li>
                    <li>
                        <a href="#" class="botao-dropdown">agendamentos</a>
                        <section class="menu-dropdown">
                            <ul>
                                <li><a href="view/agendamento-consulta.php">consulta</a></li>
                                <li><a href="view/agendamento-hospedagem.php">hospedagem</a></li>
                            </ul>
                    </section>
                    </li>
                <li><a href="view/login.php">login</a></li>
            </ul>
        </nav>
    </header>
    <pre>
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
    </pre>
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.6348838151825!2d-51.386619625905276!3d-22.139892510911558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f501254620eb%3A0x16bc508109c64255!2sFatec%20de%20Presidente%20Prudente!5e0!3m2!1spt-BR!2sbr!4v1747918682634!5m2!1spt-BR!2sbr" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer>
        <ul>
            <li><a href="#">nossos serviços</a></li>
            <li><a href="#">dicas para teu pet</a></li>
            <li><a href="#">presenteie com petisco</a></li>
            <li><a href="#">planos</a></li>
            <li><a href="#">eventos</a></li>
        </ul>
        <ul>
            <li><a href="#">perguntas frequentes</a></li>
            <li><a href="#">política de privacidade</a></li>
            <li><a href="#">termos e condições</a></li>
            <li><a href="#">clube de membros</a></li>
            <li><a href="#">assinaturas</a></li>
        </ul>
        <ul>
            <li><a href="#">nossos contatos</a></li>
            <section class="social">
            <a href="#"><img src="assets/img/icons/facebook.png"></a>
            <a href="#"><img src="assets/img/icons/instagram.png"></a>
            <a href="#"><img src="assets/img/icons/zapefron.png"></a>
            </section>
            <li><a href="#">desinscreva-se</a></li>
        </ul>
        <img id="dog" src="assets/img/illustrations/PNG/08-cut.png">
    </footer>
</body>
</html>