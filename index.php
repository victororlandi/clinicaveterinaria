<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>home</title>
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
                                <li><a href="view/agendamentos-consulta.php">consulta</a></li>
                                <li><a href="view/agendamentos-vacinacao.php">vacinação</a></li>
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
    <section class="propaganda">
        <a href="#">
            <img src="assets\img\propaganda\7.png">
        </a>
    </section>
    <section class="sobre-clinica">
        <div class="container">
            <section class="sobre-item">
                <h3>nossa história</h3>
                <div class="texto-destaque">
                    <p>fundada em 2010 por <strong>karina favareto</strong> e <strong>victor orlandi</strong>, a petisco começou como um pequeno consultório no coração do bairro. hoje, somos referência em cuidados animais com uma abordagem humanizada!</p>
                    <p>nosso maior orgulho? o <strong>programa petisco na comunidade</strong> que já atendeu mais de 5.000 animais gratuitamente.</p>
                </div>
                <img src="assets/img/fachada.jpg" alt="Fachada da clínica" class="img-redonda">
            </section>

            <section class="sobre-item reverse">
                <div class="texto-destaque">
                    <h3>nossa missão</h3>
                    <p class="destaque-azul">"oferecer medicina veterinária com <strong>carinho</strong>, <strong>ética</strong> e <strong>alegria</strong> para prolongar a vida feliz dos seus melhores amigos."</p>
                </div>
                <img src="assets/img/missao.jpg" alt="Cachorro sendo atendido" class="img-sombra">
            </section>

            <section class="horarios">
                <h3>horário de funcionamento</h3>
                <ul class="lista-horarios">
                    <li>
                        <span class="dia">segunda a sexta</span>
                        <span class="horario">08h às 20h</span>
                        <span class="obs">(plantão até 22h)</span>
                    </li>
                    <li class="destaque">
                        <span class="dia">sábados</span>
                        <span class="horario">09h às 16h</span>
                    </li>
                    <li>
                        <span class="dia">domingos/feriados</span>
                        <span class="horario">10h às 14h</span>
                        <span class="obs">(somente emergências)</span>
                    </li>
                </ul>
                <p class="aviso">* atendimento 24h para emergências</p>
            </section>
        </div>
    </section>

    <section class="depoimentos">
        <h2 class="titulo-depoimentos">nossos clientes</h2>
        
        <div class="depoimentos-grid">
            <section class="relato">
                <div class="balao-fala">"eu adorei o atendimento da equipe. todos muito atenciosos e preparados para atender nossos bichos de estimação. o phillip ama ir e ser atendido pela tia carla."</div>
                <h6 class="autor">joana jones</h6>
            </section>
            
            <section class="relato">
                <div class="balao-fala">"melhor clínica veterinária em prudente. serviço rápido e de qualidade. o jorginho adora tomar banho e interagir com os aumigos."</div>
                <h6 class="autor">maria da silva</h6>
            </section>
            
            <section class="relato">
                <div class="balao-fala">"primeira clínica em que meu dog se sentiu confortável. ele adora ir toda semana. o carlão gosta de bater papo e lanchar com os demais."</div>
                <h6 class="autor">tião gurgel</h6>
            </section>
            
            <section class="relato">
                <div class="balao-fala">"todos os bichos recebem atendimento vip. meu gato vai e não quer voltar para casa. um dia ele fugiu e foi parar lá na clínica."</div>
                <h6 class="autor">josé santos</h6>
            </section>
        </div>
    </section>

    <section class="grid-container">
        <h1>espaços da clínica</h1>
        <section class="espaco">
            <img src="assets\img\espacos\recepcao.jpg">
            <p>recepção</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\famarcia-24h.jpg">
            <p>farmácia 24 horas</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\consultorio-1.jpg">
            <p>consultório - 1</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\consultorio-2.jpg">
            <p>consultório - 2</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\sala-de-nutricao.jpg">
            <p>sala de nutrição</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\centro-cirurgico-1.jpg">
            <p>centro cirúrgico - 1</p>
        </section>
            <section class="espaco">
            <img src="assets\img\espacos\centro-cirurgico-2.jpg">
            <p>centro cirúrgico - 2</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\internacao-1.jpg">
            <p>sala de internação - 1</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\internacao-2.jpg">
            <p>sala de internação - 2</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\ultrassom.jpg">
            <p>sala de ultrassom</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\raio-x.jpg">
            <p>sala de raio-x</p>
        </section>
        <section class="espaco">
            <img src="assets\img\espacos\laboratorio.jpg">
            <p>laboratório</p>
        </section>
    </section>
    <script src="assets/script.js"></script>
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