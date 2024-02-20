<?php

function getImagemAutor(){
    $resultado = selectSQLUnico("SELECT imagem_autor FROM autor WHERE id=1");
    return $resultado["imagem_autor"];
}

function getTextoAutor(){
    $resultado = selectSQLUnico("SELECT texto_sobre_mim FROM autor WHERE id=1");
    return $resultado["texto_sobre_mim"];
}

function getTextoAbreviadoAutor(){
    $resultado = substr(getTextoAutor(), 0, 800) ." ...";
    return $resultado;
}

?>