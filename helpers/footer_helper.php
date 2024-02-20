<?php 

function getMorada(){
    $resultado=selectSQLUnico("SELECT morada FROM contactos where id=1");
    return $resultado["morada"];
}

function getTelefone(){
    $resultado=selectSQLUnico("SELECT telefone FROM contactos where id=1");
    return $resultado["telefone"];
}

function getEmail(){
    $resultado=selectSQLUnico("SELECT email FROM contactos where id=1");
    return $resultado["email"];
}

function getHorario(){
    $resultado=selectSQLUnico("SELECT horario FROM contactos where id=1");
    return $resultado["horario"];
}

function getFacebook(){
    $resultado=selectSQLUnico("SELECT facebook FROM redes where id=1");
    return $resultado["facebook"];
}

function getInstagram(){
    $resultado=selectSQLUnico("SELECT instagram FROM redes where id=1");
    return $resultado["instagram"];
}

function getLinkedin(){
    $resultado=selectSQLUnico("SELECT linkedin FROM redes where id=1");
    return $resultado["linkedin"];
}

?>