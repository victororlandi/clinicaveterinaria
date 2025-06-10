<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <title>cadastro de histórico</title>
</head>
<body>
    <header>
        <section id="anuncio">
            <p>dia dos namorados chegando? cuide de quem mais te ama 🐶</p>
        </section>
        <section id="marca">
                <p>bem-vindo!<p>
                    <section id="logo">
                        <a href="/petisco/index.php"><img src="../assets/img/icons/logo-2.png"></a>
                        <a href="/petisco/index.php"><h1>petisco</h1></a>
                    </section>
                <a href="login.php" alt="login"><img src="../assets/img/icons/login.png"></a>
        </section>
        <nav>
            <ul>
                <li><a href="quem-somos.php">quem somos</a></li>
                <li><a href="servicos.php">serviços</a></li>
                    <li>
                        <a href="#" class="botao-dropdown">cadastros</a>
                        <section class="menu-dropdown">
                            <ul>
                                <li><a href="cadastro-tutores.php">tutores</a></li>
                                <li><a href="cadastro-animais.php">animais</a></li>
                                <li><a href="cadastro-historico.php">histórico</a></li>
                                <li><a href="cadastro-talentos.php">talentos</a></li>
                            </ul>
                        </section>
                    </li>
                    <li>
                        <a href="#" class="botao-dropdown">agendamentos</a>
                        <section class="menu-dropdown">
                            <ul>
                                <li><a href="agendamentos-consulta.php">consulta</a></li>
                                <li><a href="agendamentos-vacinacao.php">vacinação</a></li>
                            </ul>
                        </section>
                    </li>
            </ul>
        </nav>
    </header>
        <section class="propaganda">
            <a href="#">
                <img src="..\assets\img\propaganda\6.png">
            </a>
        </section>
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
    <section class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.6348838151825!2d-51.386619625905276!3d-22.139892510911558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f501254620eb%3A0x16bc508109c64255!2sFatec%20de%20Presidente%20Prudente!5e0!3m2!1spt-BR!2sbr!4v1747918682634!5m2!1spt-BR!2sbr" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer>
        <section class="links-e-imagem">
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
                <a href="#"><img src="../assets/img/icons/facebook.png"></a>
                <a href="#"><img src="../assets/img/icons/instagram.png"></a>
                <a href="#"><img src="../assets/img/icons/zapefron.png"></a>
                </section>
                <li><a href="#">desinscreva-se</a></li>
            </ul>
            <img id="dog" src="../assets/img/illustrations/PNG/08-cut.png">
        </section>
    </footer>
</body>
</html>