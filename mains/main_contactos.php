<main class="container-fluid">

    <!-- Caixa titulo Contactos -->
    <div class="row justify-content-md-end ">
        <div class="col-10 caixa-bem-vindo caixa-scroll bg-white p-5">
            <div class="row justify-content-md-start">
                <div class="col-12 menu-selecionado" id="">
                    Contactos
                </div>
                <div class="col-12 titulo-caption">
                    Pode contactar-me através do e-mail ou telefone
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center text-center mt-5 gap-4">

        <div class="col-6 col-sm-2">
            <p class="subtitulo-contactos">Telefone</p>
            <p class="texto-contactos p-texto"><?= getTelefone(); ?></p>
        </div>

        <div class="col-6 col-sm-2">
            <p class="subtitulo-contactos">Morada</p>
            <p class="texto-contactos p-texto"><?= getMorada(); ?></p>
        </div>

        <div class="col-6 col-sm-2">
            <p class="subtitulo-contactos">Email</p>
            <p class="texto-contactos p-texto"><?= getEmail(); ?></p>
        </div>

        <div class="col-12 d-flex justify-content-center">
            <hr id="linha-contactos">
        </div>

        <div class="col-6 col-sm-3">
            <p class="subtitulo-contactos">Horário</p>
            <p class="texto-contactos p-texto"><?= getHorario(); ?></p>
        </div>

    </div>



</main>