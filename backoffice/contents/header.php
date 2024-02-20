<?php 

require("../requisitos.php");

if(!estaLogado()){
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackOffice Sebastião Alves</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <!-- Editor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


        <!-- CSS LOCAL -->
        <link rel="stylesheet" href="css/style-backoffice.css">
</head>
<body>

    <header class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Backoffice (<?= $pagina; ?>)</h1>
            </div>
        </div>
        <div class="row">
            <div class="nav d-inline-flex justify-content-center gap-2 col-12 text-center">
                <a href="inicio.php"><button>Início</button></a>
                <a href="carousel.php"><button>Carousel</button></a>
                <a href="home.php"><button>Home</button></a>
                <a href="autor.php"><button>Autor</button></a>
                <a href="livros.php"><button>Livros</button></a>
                <a href="destaques.php"><button>Destaques</button></a>
                <a href="imprensa.php"><button>Imprensa</button></a>
                <a href="contactos.php"><button>Contactos</button></a>
                <a href="redes.php"><button>Redes</button></a>
                <a href="configuracoes.php"><button>Configurações</button></a>
                <a href="sair.php"><button>Sair</button></a>

                </div>
            </div>
        </div>
    </header>



