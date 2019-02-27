function onChange(event){
    var file = event.target.files[0];
    var path = "url('" + window.URL.createObjectURL(file) + "')";
    document.getElementById('contenedor-imagen').style.backgroundImage = path;
}

var titulo = document.getElementById('titulo');
titulo.addEventListener('keyup',function(){

    document.getElementById('encabezado-principal').innerText = this.value;
    document.getElementById('encabezado-principal').style = "initial";
})