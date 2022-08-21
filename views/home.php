    <?php $this->layout("_theme") ?>
        <section class="container" id="home">
            <div class="row mt-5">
                <div class="anime-item col-md-6 col-sm-12 text-center mt-5">
                    <h1 class="display-2 poppins ola fw-bold">Olá!</h1>
                    <h1 class="display-4 poppins mt-3 fw-bold suadacao">Eu Sou o Tutz!</h1>
                    <h5 class="noto-italic suadacao fw-bold">Desenvolvedor Web</h5>
                    <a href="http://encurtador.com.br/fijsv" class="btn btn-dark mt-3 poppins suadacao fw-bold" target="_blank" ><i class="bi bi-whatsapp"></i> Whatsapp</a>
                </div>
                <div class="anime-img col-md-6 d-none d-md-block mt-2 text-center">
                    <img src="<?=URL?>/views/assets/img/anime-img.svg" class="w-100" style="border-radius: 50%;" alt="Rodrigo">
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

        <section  id="about">

            <div class="sobre-section shadow-lg">
                <div class="container sobre-content">
                    <h3 class="text-white text-center pt-5"><span class="display-6"> Olá!</span><br> Meu nome é Rodrigo.</h3>
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

            <div class="skills" id="skills">
                <div class="container">
                    <h2 class="text-center text-white mb-5">Habilidades:</h2>
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <div class="card card-div card-item-1 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="<?=URL?>/views/assets/img/paleta-de-cores.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Designer">
                                    <h3 class="card-title">Designer</h3>
                                    <h6 class="card-subtitle mt-3">Desenho toda as estrutura do seu site, interações e padrões de projeto</h6> <br>
                                    <span class="fw-bold">Ferramentas</span>
                                    <p class="mt-1">Adobe XD, Photoshop, Illustrator </p>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="card card-div card-item-2 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="<?=URL?>/views/assets/img/gears.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Designer">
                                    <h3 class="card-title">SEO</h3>
                                    <h6 class="card-subtitle mt-3">Otimização para os motores de busca, anúncios e geração de leads</h6> <br>
                                    <span class="fw-bold">Ferramentas</span>
                                    <p class="mt-1">Google Ads, Facebook Ads, SEO Optimization </p>
                                </div>
                              </div>
                        </div>
    
                        <div class="col-md-3 mt-2">
                            <div class="card card-div card-item-2 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="<?=URL?>/views/assets/img/front.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Front end">
                                    <h3 class="card-title">Front End</h3>
                                    <h6 class="card-subtitle mt-3">Desenvolvimento da parte visual e as interações do seu site</h6> <br>
                                    <span class="fw-bold mt-3">Linguagens</span>
                                    <p class="mt-1">HTML, CSS, SASS, Javascript</p>
                                    <span class="fw-bold">Frameworks</span>
                                    <p class="mt-1">Bootstrap, Vue.js</p>
                                </div>
                              </div>
                        </div>
    
                        <div class="col-md-3 mt-2">
                            <div class="card card-div card-item-3 shadow" style="height: 400px;">
                                <div class="card-body text-center">
                                    <img src="<?=URL?>/views/assets/img/icon-desenvolvimento.png" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Back end">
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

            <div class="container" id="certificate">
                <h2 class="text-center text-dark mb-5">Certificações:</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <img src="<?=URL?>/views/assets/docs/certificado-fullstack.jpg" class="card-img-top rounded-3" alt="Certificação FullStack">
                            <div class="card-body">
                                <h5 class="card-title">Fullstack PHP</h5>
                                <small>Udemy - Concluído em: 26/10/2021</small>
                                <p class="card-text">Desenvolvimento Web completo 2021 - 20 cursos + 20 projetos</p>
                                <div class="text-center">
                                    <a href="https://www.udemy.com/certificate/UC-b8e5410c-5142-40e9-a0ed-36d9b8218791/" target="_blank" class="btn btn-dark">Ver certificado</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <img src="<?=URL?>/views/assets/docs/certificado-laravel.jpg" class="card-img-top rounded-3" alt="Certificação FullStack">
                            <div class="card-body">
                                <h5 class="card-title">Curso Latavel, Vue.js</h5>
                                <small>Udemy - Concluído em: 20/04/2022</small>
                                <p class="card-text">Desenvolvimento Web avançado 2022 com PHP, Laravel e Vue.js</p>
                                <div class="text-center">
                                    <a href="https://www.udemy.com/certificate/UC-1f35aa10-8f19-4068-89d9-3a0d805aca74/" target="_blank" class="btn btn-dark">Ver certificado</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <img src="<?=URL?>/views/assets/docs/certificado-photoshop.jpg" class="card-img-top rounded-3" alt="Certificação Photoshop">
                            <div class="card-body">
                                <h5 class="card-title">Curso Designer Gráfico Photoshop</h5>
                                <small>Udemy - Concluído em: 13/01/2022</small>
                                <p class="card-text">Curso Designer Gráfico Completo</p>
                                <div class="text-center">
                                    <a href="https://www.udemy.com/certificate/UC-b391112e-1de5-40d7-8384-d10c0788c7d8/" target="_blank" class="btn btn-dark">Ver certificado</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-secondary" id="ver-mais-btn">Ver Todos os certificados</button>
                    </div>

                    <div class="row ver-mais" id="ver-mais">
                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="<?=URL?>/views/assets/docs/curso-adobe-xd.jpg" class="card-img-top rounded-3" alt="Certificação Adobe XD">
                                <div class="card-body">
                                    <h5 class="card-title">Curso Adobe XD</h5>
                                    <small>Danki Code - Carga horária 3h</small>
                                    <p class="card-text">Designer de Apps Adobe XD</p>
                                    <div class="text-center">
                                        <a href="https://cursos.dankicode.com/certificados?view=8302" target="_blank" class="btn btn-dark">Ver certificado</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="<?=URL?>/views/assets/docs/curso-de-php.jpg" class="card-img-top rounded-3" alt="Certificação PHP">
                                <div class="card-body">
                                    <h5 class="card-title">Curso PHP Jedai</h5>
                                    <small>Danki Code - Carga horária 27h</small>
                                    <p class="card-text">Designer de Apps Adobe XD</p>
                                    <div class="text-center">
                                        <a href="https://cursos.dankicode.com/certificados?view=9125" target="_blank" class="btn btn-dark">Ver certificado</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="<?=URL?>/views/assets/docs/curso-javascript.jpg" class="card-img-top rounded-3" alt="Certificação Javascript">
                                <div class="card-body">
                                    <h5 class="card-title">Curso Javascript Completo</h5>
                                    <small>Danki Code - Carga horária 14h</small>
                                    <p class="card-text">Curso Javascript puro</p>
                                    <div class="text-center">
                                        <a href="https://cursos.dankicode.com/certificados?view=8271" target="_blank" class="btn btn-dark">Ver certificado</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </section>

        <section id="contact">
            <h1 class="text-center fw-bold">Fale Comigo</h1>
            <p class="text-center">Para ter mais informações ou enviar uma mensagem, preencha os dados no formulário abaixo:</p>
            <div class="background-contact mt-5">
                <div class="row">
                    <div class="col-md-4 offset-md-7 text-center">
                        <fieldset class="mt-5 text-white fw-bold">
                            <legend class="mb-5">Envie uma mensagem!</legend>
                            <form action="<?=URL?>/send" method="POST">
                                <div class="mb-3">
                                    <label for="nome" class="form-label"> Insira seu nome:</label>
                                    <input type="text" name="nome" id="nome" class="form-control text-center" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label"> Insira seu email:</label>
                                    <input type="email" name="email" id="email" class="form-control text-center" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="telefone" class="form-label"> Insira seu telefone:</label>
                                    <input type="tel" name="telefone" id="telefone" class="form-control text-center" required>
                                </div>

                                <div class="mb-3">
                                    <label for="mensagem" class="form-label"> Insira sua mensagem:</label>
                                    <textarea name="mensagem" id="mensagem" class="form-control text-center" style="height: 200px;" required></textarea>
                                </div>

                                <div class="text-center">
                                    <button name="acao" type="submit" class="btn btn-dark fw-bold">Enviar <i class="bi bi-send-fill"></i></button>
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
