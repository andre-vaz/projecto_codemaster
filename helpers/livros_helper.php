<?php

function getTodosLivros(){
    $resultado=selectSQL("SELECT * FROM livros");
    return $resultado;
}

function getLivroEspecifico($id){
    $resultado=selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
    return $resultado;
}

function getImagemLivro($id){
    $resultado=selectSQLUnico("SELECT imagem FROM livros where id='$id'");
    return $resultado["imagem"];
}

function getTituloLivro($id){
    $resultado=selectSQLUnico("SELECT titulo FROM livros where id='$id'");
    return $resultado["titulo"];
}

function getObservacaoLivro($id){
    $resultado=selectSQLUnico("SELECT observacao FROM livros where id='$id'");
    return $resultado["observacao"];
}

function getTextoLivro($id){
    $resultado=selectSQLUnico("SELECT texto_livro FROM livros where id='$id'");
    return $resultado["texto_livro"];
}

function getTextoAbreviadoLivro($id){
    $id_livro = $id;
    $resultado = substr(getTextoLivro($id_livro), 0, 160) ." ...";
    return $resultado;
}

?>