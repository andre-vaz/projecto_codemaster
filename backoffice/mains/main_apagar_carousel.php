<?php 

$form= isset($_GET["apagar"]) || isset($_GET["resposta"]);

if($form){
    $id = $_GET["apagar"];
    
    if(isset($_GET["apagar"]) && isset($_GET["resposta"])){
        iduSQL("DELETE FROM carousel WHERE id=$id");
        header("Location: carousel.php");
        }
}

?>

<main class="container-fluid">
    <div class="caixa">
        <h3 class="text-center">Tem a certeza que pretende apagar o carousel ?</h3>
        <form action="">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <input type="submit" name="resposta" value="Sim">
            <a href="carousel.php">
                <button type="button">Não</button>
            </a>
        </form>

    </div>
</main>