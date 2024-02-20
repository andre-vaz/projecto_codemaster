function mudar() {
    let icon = document.querySelector(".navbar-toggler-icon");
    let computedStyle = window.getComputedStyle(icon);

    if (computedStyle.backgroundImage.includes("menu.svg")) {
        icon.style.backgroundImage = "url('/sebastiao_alves/imagens_para_site/desktop/fechar.svg')";
    } else {
        icon.style.backgroundImage = "url('/sebastiao_alves/imagens_para_site/desktop/menu.svg')";
    }
}

function voltar(){
    window.history.back();
}

function mostrarTexto(btn){
    let texto_completo = document.getElementById("texto-completo");
    let texto_abreviado = document.getElementById("texto-abreviado");

    texto_completo.classList.toggle("d-none");
    texto_abreviado.classList.toggle("d-block");
    btn.classList.add("d-none");
}

function abrir(){
    let menu = document.querySelector("#custom-dropdown");

    menu.scrollIntoView();
    setTimeout(clicar, 1200);

}

function clicar(){
    let menu = document.querySelector("#custom-dropdown");
    menu.click();
}