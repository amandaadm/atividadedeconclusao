<?php 
    $this->view('home/Cabecalho');
?>

<body id="page-top">
    <!-- Navigation-->
    <?php 
    $this->view('home/menu.php');
?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Natureza</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Dentro dos diversos usos atuais desta palavra, "natureza"
                    pode fazer referência ao domínio geral de diversos tipos de seres vivos, como plantas e animais, e
                    em alguns casos aos processos associados com objetos inanimados - a forma em que existem os diversos
                    tipos particulares de coisas e suas mudanças espontâneas, assim como o tempo atmosférico, a geologia
                    da Terra e a matéria e energia estes entes possuem</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container">
            <?php 
    $this->view('home/forma');
?>
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg"
                        alt="" /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Projetos</h4>
                        <p class="text-black-50 mb-0">Os projetos sobre como fazer armazenamento de energia em escala
                            comercial no Brasil, oriundos da chamada pública da Agência Nacional de Energia Elétrica
                            (Aneel) lançada em 2016, devem ser concluídos no próximo ano. As tecnologias de
                            armazenamento de energia por longo período podem resolver o desafio da intermitência e a
                            sazonalidade das fontes energéticas solar e eólica, que são as mais promissoras do mundo.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="" /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Cachoeiras</h4>
                                <p class="mb-0 text-white-50">A água sempre fascinou as pessoas. Especialmente quando
                                    cai de grandes altitudes.
                                </p>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Montanhas</h4>
                                <p class="mb-0 text-white-50">Com paisagens de perder o fôlego, com montanhas em
                                    diferentes tons de verde, cachoeiras, rios, trilhas, fazendas e ainda por cima,
                                    lindos campos de lavanda!</p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Receber Informações</h2>
                    <form class="form-inline d-flex">
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email"
                            placeholder="Enter email address..." />
                        <button class="btn btn-primary mx-auto" type="submit">Informações</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Endereço</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">0000 Avenida Paulista - SP - Brasil</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">hello@email.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telefone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">(11)00000-0000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright ©AmandaLira 2020</div>
    </footer>
    <?php 
    $this->view('home/Rodape');
?>