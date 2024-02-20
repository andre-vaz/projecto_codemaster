<?php 

$form= isset($_GET["apagar"]) || isset($_GET["resposta"]);

if($form){
    $id = $_GET["apagar"];
    
    if(isset($_GET["apagar"]) && isset($_GET["resposta"])){
        iduSQL("DELETE FROM imprensa WHERE id=$id");
        header("Location: imprensa.php");
        }
}

?>

<main class="container-fluid">
    <div class="caixa">
        <h3 class="text-center">Tem a certeza que pretende apagar a publicação?</h3>
        <form action="">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <input type="submit" name="resposta" value="Sim">
            <a href="imprensa.php">
                <button type="button">Não</button>
            </a>
        </form>

    </div>
</main>