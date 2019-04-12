var soma = document.querySelector('#soma')

soma.addEventListener('click',function(e){
    let v1 = document.querySelector('#valor1')
    let v2 = document.querySelector('#valor2')
    let soma = parseFloat(v1.value)+parseFloat(v2.value);
    document.querySelector('#resultado').innerHTML = "O resultado é: "+soma.toFixed(2);
    e.preventDefault(); /* Retira a configuração Default, ou seja nesse caso nao atualiza a pagina */
    console.log(e.target); /* Mostra as ações realizadas quando iniciada a função */
});

var subtrai = document.querySelector('#subtrai')

subtrai.addEventListener('click',function(e){
    let v1 = document.querySelector('#valor1')
    let v2 = document.querySelector('#valor2')
    let subtrai = parseFloat(v1.value)-parseFloat(v2.value);
    document.querySelector('#resultado').innerHTML = "O resultado é: "+subtrai.toFixed(2);
    e.preventDefault();
    console.log(e.target); 
});

var divide = document.querySelector('#divide')

divide.addEventListener('click',function(e){
    let v1 = document.querySelector('#valor1')
    let v2 = document.querySelector('#valor2')
    let divide = parseFloat(v1.value)/parseFloat(v2.value);
    document.querySelector('#resultado').innerHTML = "O resultado é: "+divide.toFixed(2);
    e.preventDefault();
    console.log(e.target); 
});

var multiplica = document.querySelector('#multiplica')
multiplica.addEventListener('click',function(e){
    let v1 = document.querySelector('#valor1')
    let v2 = document.querySelector('#valor2')
    let multiplica = parseFloat(v1.value)*parseFloat(v2.value);
    document.querySelector('#resultado').innerHTML = "O resultado é: "+multiplica.toFixed(2);
    e.preventDefault();
    console.log(e.target); 
});