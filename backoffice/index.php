<?php 

require_once("../requisitos.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $user = fazerLogin($login, $senha);

    if(!empty($user)){
        header("Location: inicio.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackOffice</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style-backoffice.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Login BackOffice</h1>
            </div>
        </div>

        <div class="caixa mt-3">
            <form action="" method="POST" class="d-flex flex-column gap-2">

                <input type="text" name="login" required autofocus placeholder="User">

                <input type="password" name="senha" required placeholder="Senha">

                <input type="submit" value="Login" class="btn-novo">

            </form>
        </div>
    </div>
    
</body>
</html>