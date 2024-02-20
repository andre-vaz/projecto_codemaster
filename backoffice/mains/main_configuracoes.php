<?php 

if (isset($_SESSION["error_message"])) {
    echo '<div style="color: red;">' . $_SESSION["error_message"] . '</div>';
    unset($_SESSION["error_message"]);
}

if (isset($_SESSION["success_message"])) {
    echo '<div style="color: green;">' . $_SESSION["success_message"] . '</div>';
    unset($_SESSION["success_message"]);
}

?>

<main class="container-fluid">

    <div class="row mt-5">
        <div class="col-12 caixa d-block">
                <h3>Alterar Senha</h3>
                <form action="alterar_senha.php" method="POST">
                    <input type="password" name="old_pw" placeholder="Senha antiga" required>
                    <br><br>
                    <input type="password" name="new_pw" placeholder="Nova senha" required>
                    <br><br>
                    <input type="password" name="repeat_new_pw" placeholder="Confirme nova senha" required>
                    <br><br>
                    <button type="submit" class="btn-novo">Alterar Senha</button>
                </form>
        </div>
    </div>

</main>