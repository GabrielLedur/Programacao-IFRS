//Mudar o tema
var tema_claro = document.querySelector("#light");
tema_claro.addEventListener('click', function(x){
    document.querySelector(".container").style = "background-color: white; color: black";
});
var tema_escuro = document.querySelector("#dark");
tema_escuro.addEventListener('click', function(x){
    document.querySelector(".container").style = "background-color: black; color: white";
});
