//Mudar o tema
var tema_claro = document.querySelector("#light");
tema_claro.addEventListener('click', function(x){
    document.querySelector(".container").style = "background-color: white; color: black";
});
var tema_escuro = document.querySelector("#dark");
tema_escuro.addEventListener('click', function(x){
    document.querySelector(".container").style = "background-color: black; color: white";
});
//Troca de placeholder
var placeholder_frase = document.querySelector("#frase");
placeholder_frase.addEventListener('change', function(x){
    if(this.value==1){
        document.querySelector("#palavra1").placeholder = "Digite um substantivo no plural";
        document.querySelector("#palavra2").placeholder = "Digite um verbo";
        document.querySelector("#palavra3").placeholder = "Digite um substantivo de lugar";
    }
    if(this.value==2){
        document.querySelector("#palavra1").placeholder = "Digite um verbo";
        document.querySelector("#palavra2").placeholder = "Digite um adjetivo";
        document.querySelector("#palavra3").placeholder = "Digite um substantivo";
    }
    if(this.value==3){
        document.querySelector("#palavra1").placeholder = "Digite um verbo";
        document.querySelector("#palavra2").placeholder = "Digite um verbo";
        document.querySelector("#palavra3").placeholder = "Digite um substantivo";
    }
})
//Montagem de frase
var criar_frase = document.querySelector(".criar_frase");
criar_frase.addEventListener('click', function(x){
    if(document.querySelector("#frase").value == 1){
        var palavra1 = document.querySelector("#palavra1").value;
        var palavra2 = document.querySelector("#palavra2").value;
        var palavra3 = document.querySelector("#palavra3").value;
        document.querySelector("#frase_final").innerHTML = palavra1+" "+palavra2+" no(a) "+palavra3;
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
    if(document.querySelector("#frase").value == 2){
        var palavra1 = document.querySelector("#palavra1").value;
        var palavra2 = document.querySelector("#palavra2").value;
        var palavra3 = document.querySelector("#palavra3").value;
        document.querySelector("#frase_final").innerHTML = "Frase 2";
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
    if(document.querySelector("#frase").value == 3){
        var palavra1 = document.querySelector("#palavra1").value;
        var palavra2 = document.querySelector("#palavra2").value;
        var palavra3 = document.querySelector("#palavra3").value;
        document.querySelector("#frase_final").innerHTML = "Frase 3";
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
})