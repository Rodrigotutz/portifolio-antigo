<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Rodrigo Antunes</title>
        <!--SEO-->
        <meta property="og:title" content="Rodrigo tutz" />
        <meta property="og:description" content="Portifólio de Rodrigo Antunes">
        <meta property="og:url" content="https://github.com/Rodrigotutz" />
        <meta property="og:image" content="https://avatars.githubusercontent.com/u/77134687?s=400&u=481bc930b592b0d35790cd290d9a3429b5b14b9d&v=4" />
        <meta property="og:type" content="website" />

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Rodrigo Antunes Rufino">
        <meta name="description" content="Portifólio Rodrigo tutz">
        <meta name="keywords" content="sites, web, desenvolvimento">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="copyright" content="© 2022 Rodrigo Antunes" />
        <!--<meta http-equiv="refresh" content="15"/>-->
        <!--ROBOTS-->
        <meta name="robots" content="index">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/animate.css">
        <link rel="stylesheet" href="./assets/css/normalize.css">
        <link rel="stylesheet" href="./assets/css/colors.css">
        <link rel="stylesheet" href="./assets/css/default.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/footer.css">
        <link rel="stylesheet" href="./assets/css/responsive.css">
        <link rel="stylesheet" href="./assets/css/classes.css">
        <link rel="stylesheet" href="./assets/css/navbar.css">
  
        
    </head>
    <body>
        <nav class="navbar navbar-light bg-transparent fixed-top">
            <div class="container-fluid justify-content-end">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#modalNav">
                   Menu <span class="navbar-toggler-icon ms-1"></span>
                </button>
            </div>
        </nav>
                
        <div class="modal fade" id="modalNav" tabindex="-1" aria-labelledby="navModal" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="navModal">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="./assets/img/perfil.jpg" style="border-radius: 50%;" class="w-50" alt="Rodrigo Antunes">
                        <h4>Rodrigo TUTZ</h4>
                        <div class="list-group text-center">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#home" role="tab" aria-controls="home"><i class="bi bi-house-fill"></i> Inicio</a>
                            <a class="list-group-item list-group-item-action" id="list-about-list" data-bs-toggle="list" href="#about" role="tab" aria-controls="about"><i class="bi bi-file-person-fill"></i> Sobre</a>
                            <a class="list-group-item list-group-item-action" id="list-works-list" data-bs-toggle="list" href="#skills" role="tab" aria-controls="skills"><i class="bi bi-bookmark-star-fill"></i> Habilidades</a>
                            <a class="list-group-item list-group-item-action" id="list-contact-list" data-bs-toggle="list" href="#contact" role="tab" aria-controls="contact"><i class="bi bi-telephone-fill"></i> Contato</a>
                          </div>
                    </div>
                    <div class="modal-footer text-center">
                        <footer class="container-fluid">
                            <div class="container social-midias-modal d-flex justify-content-around">
                                <a href="#" class="text-dark" target="_blank"><i class="bi bi-linkedin"></i></a>
                                <a href="https://github.com/Rodrigotutz" class="text-dark" target="_blank"><i class="bi bi-github"></i></a>
                                <a href="https://www.instagram.com/rodrigo_tutz" class="text-dark" target="_blank"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="text-dark" target="_blank"><i class="bi bi-whatsapp"></i></a>
                            </div>
                            <span> <br><a href="https://github.com/Rodrigotutz" class="text-dark h6" target="_blank">&copy; Copyright 2022 <br> Rodrigo TUTZ</a> </span> <br>
                            <small>Todos dos direitos reservados</small>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

        <section class="container" id="inicio">
            <div class="row mt-5">
                <div class="anime-item col-md-6 col-sm-12 text-center mt-5">
                    <h1 class="display-2 poppins ola fw-bold">Olá!</h1>
                    <h1 class="display-4 poppins fw-bold suadacao">Eu Sou o Tutz!</h1>
                    <h5 class="noto-italic suadacao fw-bold">Desenvolvedor Web</h5>
                    <a href="./assets/docs/Rodrigo Antunes.pdf" class="btn btn-dark mt-3 poppins suadacao fw-bold" download>Baixar CV</a>
                </div>
                <div class="anime-img col-md-6 d-none d-md-block mt-2 text-center">
                    <img src="./assets/img/anime-img.svg" class="w-100" style="border-radius: 50%;" alt="Rodrigo">
                </div>
            </div>
            <div class="text-center mt-5">
                <span>Deslize para ver mais!</span> <br>
                <span><i class="bi bi-arrow-down-circle-fill"></i></span>
            </div>
        </section>

        <div class="divider">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="wave-1" fill="#273036" fill-opacity="1" d="M0,224L30,208C60,192,120,160,180,165.3C240,171,300,213,360,224C420,235,480,213,540,176C600,139,660,85,720,85.3C780,85,840,139,900,170.7C960,203,1020,213,1080,224C1140,235,1200,245,1260,224C1320,203,1380,149,1410,122.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                <path class="wave-2" fill="#273036" fill-opacity="0.75" d="M0,224L30,192C60,160,120,96,180,64C240,32,300,32,360,58.7C420,85,480,139,540,154.7C600,171,660,149,720,133.3C780,117,840,107,900,112C960,117,1020,139,1080,154.7C1140,171,1200,181,1260,197.3C1320,213,1380,235,1410,245.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                <path class="wave-3" fill="#273036" fill-opacity="0.50" d="M0,160L30,144C60,128,120,96,180,117.3C240,139,300,213,360,208C420,203,480,117,540,122.7C600,128,660,224,720,261.3C780,299,840,277,900,272C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,154.7C1320,149,1380,203,1410,229.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
            </svg>
        </div>

        <section  id="sobre">
            <div class="sobre-section shadow-lg">
                <div class="container sobre-content">
                    <h3 class="text-white text-center pt-5"><span class="display-6"> Olá! 😁</span><br> Meu nome é Rodrigo.</h3>
                    <h5 class="text-white text-center">É um prazer te conhecer! </h5>
                    <p class="mt-5 text-center text-white">
                            Desenvolvedor Fullstack PHP há 2 anos, atualmente trabalho remotamente como freelancer. <br>
                            Sou extremamente curioso, apaixonado por desafios e sempre buscando dar o meu 
                            <br> melhor desempenho pra tudo em que sou designado!
                    </p>
                    <div class="text-center">
                        <a href="#" class="btn btn-light"> <i class="bi bi-whatsapp"></i> Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="skills" id="habilidades">
                <div class="container">
                    <h2 class="text-center text-white mb-5">Habilidades:</h2>
                    <div class="row">
                        
                        <div class="col-md-4 mt-2">
                            <div class="card card-item-1 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="/assets/img/paleta-de-cores.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Designer">
                                    <h3 class="card-title">Designer</h3>
                                    <h6 class="card-subtitle mt-3">Desenho toda as estrutura do seu site, interações e padrões de projeto</h6> <br>
                                    <span class="fw-bold">Ferramentas</span>
                                    <p class="mt-1">Adobe XD, Photoshop, Illustrator </p>
                                </div>
                              </div>
                        </div>
    
                        <div class="col-md-4 mt-2">
                            <div class="card card-item-2 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="/assets/img/front.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Front end">
                                    <h3 class="card-title">Front End</h3>
                                    <h6 class="card-subtitle mt-3">Desenvolvimento da parte visual e as interações do seu site</h6> <br>
                                    <span class="fw-bold mt-3">Linguagens</span>
                                    <p class="mt-1">HTML, CSS, SASS, Javascript</p>
                                    <span class="fw-bold">Frameworks</span>
                                    <p class="mt-1">Bootstrap, Vue.js</p>
                                </div>
                              </div>
                        </div>
    
                        <div class="col-md-4 mt-2">
                            <div class="card card-item-3 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="/assets/img/icon-desenvolvimento.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Back end">
                                    <h3 class="card-title">Back-end</h3>
                                    <h6 class="card-subtitle mt-3">Desenvolvimento da parte funcional e de segurança do site com a estrutura MVC</h6> <br>
                                    <span class="fw-bold">Linguagens</span>
                                    <p class="mt-1">PHP, MySql</p>
                                    <span class="fw-bold">Frameworks</span>
                                    <p class="mt-1">Laravel</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato">
            <h1 class="text-center fw-bold">Fale Comigo</h1>
            <p class="text-center">Para ter mais informações ou enviar uma mensagem, preencha os dados no formulário abaixo:</p>
            <div class="background-contact mt-5">
                <div class="row">
                    <div class="col-md-4 offset-md-7 text-center">
                        <fieldset class="mt-5 text-white fw-bold">
                            <legend>Preencha todos os campos!</legend>
                            <div class="mb-4 text-start">
                                <small><span class="text-danger">*</span> Campos obrigatórios</small>
                            </div>
                            <form action="/source/App/components/email.php" method="POST">
                                <div class="mb-3">
                                    <label for="nome" class="form-label"><span class="text-danger">*</span> Insira seu nome:</label>
                                    <input type="text" name="nome" id="nome" class="form-control text-center" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label"><span class="text-danger">*</span> Insira seu email:</label>
                                    <input type="email" name="email" id="email" class="form-control text-center" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="telefone" class="form-label"><span class="text-danger">*</span> Insira seu telefone:</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control text-center" required>
                                </div>

                                <div class="mb-3">
                                    <label for="mensagem" class="form-label"><span class="text-danger">*</span> Insira sua mensagem:</label>
                                    <textarea name="mensagem" id="mensagem" class="form-control text-center" style="height: 200px;" required></textarea>
                                </div>

                                <div class="text-center">
                                    <button name="acao" type="submit" class="btn btn-dark fw-bold">Enviar</button>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </section>

        <?php if(isset($_GET['sucesso']) && $_GET["sucesso"] === "mensagem") {?>
        <div class="mensagem-sucesso" id="mensagem-sucesso">
            <div class="mensagem-conteudo">
                <h4 class="text-success">Mensagem enviada com sucesso!</h4>
                <p class="mt-3">Estou muito feliz que tenha me enviado uma mensagem!!!</p>
                <small>Em breve retornarei o seu contato!</small> <br>
                <button id="close-mensagem-sucesso" class="btn btn-secondary mt-3">Fechar</button>
            </div>
        </div>
        <?php } ?>  

        <footer id="footer-content" class="texto-dark mt-5">
            <span class="text-muted"> Desenvolvido por mim &copy; Rodrigo TUTZ</span> <br> 
            <small class="text-muted">Feito com</small> <a href="https://getbootstrap.com/" target="_blank" class="text-muted">Bootstrap <img src="/assets/img/bootstrap-logo.svg" style="width: 25px;" class="img-fluid" alt="Bootstrap"></a>
        </footer>  

        <!-- SCRIPTS -->
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/jquery.mask.min.js"></script>
        <script src="./assets/js/index.js"></script>
        <script src="./assets/js/anime.js"></script>
    </body>
</html>