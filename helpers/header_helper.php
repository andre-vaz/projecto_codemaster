<?php

function getTodosCarousel(){
    $resultado=selectSQL("SELECT * FROM carousel");
    return $resultado;
}

function getCarouselEspecifico($id){
    $resultado=selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");
    return $resultado;
}

function getImagemCarouselDesktop($id){
    $resultado=selectSQLUnico("SELECT imagem_desktop FROM carousel where id='$id'");
    return $resultado["imagem_desktop"];
}

function getImagemCarouselMobile($id){
    $resultado=selectSQLUnico("SELECT imagem_mobile FROM carousel where id='$id'");
    return $resultado["imagem_mobile"];
}

function getTituloCarousel($id){
    $resultado=selectSQLUnico("SELECT titulo FROM carousel where id='$id'");
    return $resultado["titulo"];
}

function getObservacaoCarousel($id){
    $resultado=selectSQLUnico("SELECT observacao FROM carousel where id='$id'");
    return $resultado["observacao"];
}

function getTextoCarousel($id){
    $resultado=selectSQLUnico("SELECT subtitulo FROM carousel where id='$id'");
    return $resultado["subtitulo"];
}

function getTextoAbreviadoCarousel($id){
    $id_carousel = $id;
    $resultado = substr(getTextoCarousel($id_carousel), 0, 200) ." ...";
    return $resultado;
}

function getLinkCarousel($id){
    $resultado=selectSQLUnico("SELECT link_livro FROM carousel where id='$id'");
    return $resultado["link_livro"];
}

?>