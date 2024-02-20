<?php 

function getTimeDate(){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    return $data_atual;
}

function fazerLogin($login, $senha){
    $user_encontrado = selectSQLUnico("SELECT * FROM users WHERE user='$login'");

    if(!empty($user_encontrado)){
        
        if(password_verify($senha, $user_encontrado["password"])){
            session_start();
            $_SESSION["user"] = $user_encontrado;
    
            $data_atual = getTimeDate();
            $id = $user_encontrado["id"];
            
            iduSQL("UPDATE users SET data_ultimo_acesso='$data_atual' WHERE id=$id");
            iduSQL("INSERT INTO acessos (id_user, data_ultimo_acesso) VALUES ('$id', '$data_atual')");

            return $user_encontrado;
        }
        else{
            return [];
        }
    }

    
}

function estaLogado(){
    session_start();

    if(!empty($_SESSION["user"])){
        return true;
    }
    else{
        return false;
    }
}

function logout(){

    session_start();
    session_destroy();

    header("Location: index.php");
    exit;

}

?>