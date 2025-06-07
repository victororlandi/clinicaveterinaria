<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>petisco</title>
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
    <section class="bichos-atendidos">
        <P>Aqui podemos colocar um carrossel com imagens dos bichos atendidos.</P>
        <p>A aba "Cadastre-se" por ser um menu suspenso onde vamos colocar as demais páginas de cadastro</p>
    </section>
    <section class="depoimentos">
        <p>
            <section class="relatos">
            "Eu adorei o atendimento da equipe. Todos muito atenciosos e preparados para atender nossos bichos de estimação. O Phillip ama ir e ser atendido pela tia Carla."
            </section>
            <section class="relatos-tutores">
                Joana Jones
            </section>
        </p>
        <p>
            <section class="relatos">
            "Melhor clínica veterinária em Prudente. Serviço rápido e de qualidade. O Jorginho adora tomar banho e interagir com os aumigos.
            </section>
            <section class="relatos-tutores">
                Maria da Silva
            </section>
        </p>
        <p>
            <section class="relatos">
            "Primeira clínica em que meu dog se sentiu confortável. Ele adora ir toda semana. O Carlão gosta de bater papo e lanchar com os demais. Recomendo 100%."
            </section>
            <section class="relatos-tutores">
                Tião Gurgel
            </section>
        </p>
        <p>
            <section class="relatos">
            "Todos os bichos recebem atendimento VIP. Meu gato vai não quer voltar para casa. Um dia ele fugiu e foi parar lá na clínica. Experiência nota 10."
            </section>
            <section class="relatos-tutores">
                José Santos
            </section>
        </p>
    </section>
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