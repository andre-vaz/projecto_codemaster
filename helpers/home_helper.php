<?php 

function getImagemHome(){
    $resultado = selectSQLUnico("SELECT imagem_autor_home FROM home WHERE id=1");
    return $resultado["imagem_autor_home"];
}

function getTextoUltimosLivros(){
    $resultado = selectSQLUnico("SELECT texto_ultimos_livros FROM home WHERE id=1");
    return $resultado["texto_ultimos_livros"];
}

?>