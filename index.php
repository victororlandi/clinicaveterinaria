<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
</head>
<body>
    <header>
        <section id="anuncio">
            <p>dia dos namorados chegando? cuide de quem mais te ama 🐶</p>
        </section>
        <section id="marca">
                <p>bem-vindo!<p>
                    <section id="logo">
                        <a href="/petisco/index.php"><img src="assets/img/icons/logo-2.png"></a>
                        <a href="/petisco/index.php"><h1>petisco</h1></a>
                    </section>
                <a href="view/login.php" alt="login"><img src="assets/img/icons/login.png"></a>
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
                                <li><a href="view/agendamento-vacinacao.php">hospedagem</a></li>
                            </ul>
                        </section>
                    </li>
            </ul>
        </nav>
    </header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/carrossel/2.png" alt="First slide">
            </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/carrossel/3.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/carrossel/4.png" alt="Third slide">  
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/carrossel/5.png" alt="Fourth slide">  
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
  </div>
    <section class="depoimentos">
        <section class="relatos">
            <p>"Eu adorei o atendimento da equipe. Todos muito atenciosos e preparados para atender nossos bichos de estimação. O Phillip ama ir e ser atendido pela tia Carla."</p>
            <h6>Joana Jones</h6>
        </section>
        <section class="relatos">
            <p>"Melhor clínica veterinária em Prudente. Serviço rápido e de qualidade. O Jorginho adora tomar banho e interagir com os aumigos.</p>
            <h6>Maria da Silva</h6>
        </section>
        <section class="relatos">
            <p>"Primeira clínica em que meu dog se sentiu confortável. Ele adora ir toda semana. O Carlão gosta de bater papo e lanchar com os demais. Recomendo 100%."</p>
            <h6>Tião Gurgel</h6>
        </section>
        <section class="relatos">
            <p>"Todos os bichos recebem atendimento VIP. Meu gato vai não quer voltar para casa. Um dia ele fugiu e foi parar lá na clínica. Experiência nota 10."</p>
            <h6>José Santos</h6>
        </section>
    </section>
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
                <a href="#"><img src="assets/img/icons/facebook.png"></a>
                <a href="#"><img src="assets/img/icons/instagram.png"></a>
                <a href="#"><img src="assets/img/icons/zapefron.png"></a>
                </section>
                <li><a href="#">desinscreva-se</a></li>
            </ul>
            <img id="dog" src="assets/img/illustrations/PNG/08-cut.png">
        </section>
    </footer>
</body>
</html>