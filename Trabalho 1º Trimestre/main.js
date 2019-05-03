//Mudar o tema
var tema_claro = document.querySelector("#light");
tema_claro.addEventListener('click', function(x){
    document.querySelector(".container").style = "background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)";
});
var tema_escuro = document.querySelector("#dark");
tema_escuro.addEventListener('click', function(x){
    document.querySelector(".container").style = "background: linear-gradient(-45deg, rgb(54, 12, 0), rgb(26, 10, 39), rgb(0, 24, 32), rgb(1, 26, 20))";
});
//Troca de placeholder
var placeholder_frase = document.querySelector("#frase");
placeholder_frase.addEventListener('change', function(x){
    if(this.value==1){
        document.querySelector("#palavra1").placeholder = "Digite um substantivo no plural";
        document.querySelector("#palavra2").placeholder = "Digite um verbo";
        document.querySelector("#palavra3").placeholder = "Digite um Substantivo de lugar";
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
    if(this.value==2){
        document.querySelector("#palavra1").placeholder = "Digite um Substantivo próprio";
        document.querySelector("#palavra2").placeholder = "Digite um adjetivo";
        document.querySelector("#palavra3").placeholder = "Digite o nome de algum lugar";
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
    if(this.value==3){
        document.querySelector("#palavra1").placeholder = "Digite um Substantivo próprio";
        document.querySelector("#palavra2").placeholder = "Digite o nome de algum lugar";
        document.querySelector("#palavra3").placeholder = "Digite um adjetivo no feminino";
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
    if(this.value==4){
        document.querySelector("#palavra1").placeholder = "Digite um Substantivo próprio";
        document.querySelector("#palavra2").placeholder = "Digite um substantivo";
        document.querySelector("#palavra3").placeholder = "Digite um adjetivo";
        document.querySelector("#palavra1").value = null;
        document.querySelector("#palavra2").value = null;
        document.querySelector("#palavra3").value = null;
    }
})
//Montagem de frase
var criar_frase = document.querySelector(".criar_frase");
criar_frase.addEventListener('click', function(x){
    if( (document.querySelector("#palavra1").value!=null) && (document.querySelector("#palavra2").value!=null) && (document.querySelector("#palavra3").value!=null)){
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
            document.querySelector("#frase_final").innerHTML = palavra1+" viu um gato "+palavra2+" no(a) "+palavra3;
            document.querySelector("#palavra1").value = null;
            document.querySelector("#palavra2").value = null;
            document.querySelector("#palavra3").value = null;
        }
        if(document.querySelector("#frase").value == 3){
            var palavra1 = document.querySelector("#palavra1").value;
            var palavra2 = document.querySelector("#palavra2").value;
            var palavra3 = document.querySelector("#palavra3").value;
            document.querySelector("#frase_final").innerHTML = "Quando "+palavra1+" viajou a(ao) "+palavra2+" encontrou muitas pessoas "+palavra3;
            document.querySelector("#palavra1").value = null;
            document.querySelector("#palavra2").value = null;
            document.querySelector("#palavra3").value = null;
        }
        if(document.querySelector("#frase").value == 4){
            var palavra1 = document.querySelector("#palavra1").value;
            var palavra2 = document.querySelector("#palavra2").value;
            var palavra3 = document.querySelector("#palavra3").value;
            document.querySelector("#frase_final").innerHTML = palavra1+" procurou sua(seu) "+palavra2+" por dias e o(a) encontrou "+palavra3;
            document.querySelector("#palavra1").value = null;
            document.querySelector("#palavra2").value = null;
            document.querySelector("#palavra3").value = null;
        }
    }
})