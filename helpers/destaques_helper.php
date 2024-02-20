<?php 

function getTodosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

function getDestaqueUnico($id){
    $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id_livro='$id'");
    return $resultado;
}

?>