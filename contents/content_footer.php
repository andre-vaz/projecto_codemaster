        <!-- Footer -->

    <footer class="container-fluid">

        <div class="row bottom-banner">
            <div class="col-12">
                <hr id="barra-baixo1" class="barra">
            </div>

            <div class="d-none d-lg-block bottom-nav">
                <nav class="navbar navbar-expand-lg" id="top_nav">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "autor") ? "active" : ""; ?>" href="autor.php">Autor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="abrir()">
                                    Livros
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "imprensa") ? "active" : ""; ?>" href="imprensa.php">Imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="d-none d-lg-block col-12">
                <hr id="barra-baixo2" class="barra">
            </div>
        </div>

        <div class="row footer d-flex flex-wrap justify-content-center">
            <!-- Area contactos -->
            <div class="col-12 col-lg-6 text-center text-lg-start area-contactos <?= ($pagina_actual == "contactos") ? "d-none d-lg-block" : ""; ?>">
                <div class="row">
                    <div class="col-12 titulo-1" id="titulo-contactos">
                        Contactos
                    </div>
                    <div class="col-12 col-lg-4">
                        <p class="subtitulo-contactos">Morada</p>
                        <p class="texto-contactos p-texto"><?= getMorada(); ?></p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <p class="subtitulo-contactos">Telefone</p>
                        <p class="texto-contactos p-texto"><?= getTelefone(); ?></p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <p class="subtitulo-contactos">Email</p>
                        <p class="texto-contactos p-texto"><?= getEmail(); ?></p>
                    </div>
                </div>
            </div>

            <!-- Area redes sociais -->
            <div class="col-12 col-lg-4 area-redes-sociais">
                <div class="row">
                    <div class="col-12 text-center titulo-1" id="titulo-redes">Siga-me nas redes sociais</div>

                    <div class="row d-flex justify-content-center gap-4">
                        <div class="col-1 p-0">
                            <a href="<?= getInstagram(); ?>" target="_blank" class="btn-redes" id="insta"></a>
                        </div>
                        <div class="col-1 p-0">
                            <a href="<?= getFacebook(); ?>" target="_blank" class="btn-redes" id="facebook"></a>
                        </div>
                        <div class="col-1 p-0">
                            <a href="<?= getLinkedin(); ?>" target="_blank" class="btn-redes" id="linkdin"></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row d-flex flex-wrap justify-content-center ">

            <div class="col-12 col-lg-5">
                <div class="row gap-0 gap-md-5 text-center" id="caixa-reclamacoes">
                    <div class="col-6 col-md-2 mx-auto mx-md-0">
                        <a href="">
                            <img src="imagens_para_site/desktop/livroreclamacoes.svg" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 mx-auto mx-md-0">
                        <a href="">
                            <img src="imagens_para_site/desktop/ralc.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="row">
                    <div class="col-12 text-center" id="cookies">
                        <a href="" class="p-texto">Politica de Cookies</a>
                    </div>
                    <div class="col-12 text-center p-texto" id="direitos">
                        Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
                    </div> 
                </div>
            </div>

        </div>
    </footer>

    <script src="functions.js"></script>
    <script src="main.js"></script>
</body>
</html>