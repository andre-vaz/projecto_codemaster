<?php 

function getTodaImprensa(){
    $resultado=selectSQL("SELECT * FROM imprensa");
    return $resultado;
}

function getImprensaEspecifica($id){
    $resultado=selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");
    return $resultado;
}

function getImagemImprensa($id){
    $resultado=selectSQLUnico("SELECT imagem FROM imprensa where id='$id'");
    return $resultado["imagem"];
}

function getTituloImprensa($id){
    $resultado=selectSQLUnico("SELECT titulo FROM imprensa where id='$id'");
    return $resultado["titulo"];
}

function getTextoImprensa($id){
    $resultado=selectSQLUnico("SELECT texto FROM imprensa where id='$id'");
    return $resultado["texto"];
}

function getDataImprensa($id){
    $resultado=selectSQLUnico("SELECT data_publicacao FROM imprensa where id='$id'");
    return $resultado["data_publicacao"];
}

?>