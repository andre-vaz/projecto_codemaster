<?php 

require("../requisitos.php");

if(!estaLogado()){
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["user"];

$form = isset($_POST["old_pw"]) && isset($_POST["new_pw"]) && isset($_POST["repeat_new_pw"]);

if($form){
    $old_pw = $_POST["old_pw"];
    $new_pw = $_POST["new_pw"];
    $repeat_new_pw = $_POST["repeat_new_pw"];
    $id = $usuario["id"];

    if(password_verify($old_pw, $usuario["password"])){
        if($new_pw == $repeat_new_pw){
            $pw_cript = password_hash($new_pw, PASSWORD_DEFAULT);
            iduSQL("UPDATE users SET password='$pw_cript' WHERE id='$id'");
            $_SESSION["success_message"] = "Senha alterada com sucesso!";
        }else{
            $_SESSION["error_message"] = "Erro! Alguns dados não estão correctos. Tente novamente.";
        }
    }else{
        $_SESSION["error_message"] = "Erro! Alguns dados não estão correctos. Tente novamente.";
    }

}

header("Location: configuracoes.php");

?>