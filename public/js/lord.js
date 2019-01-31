var textoDinamico = document.getElementById("texto-dinamico");

textoDinamico.innerText = 'Adelaida es un emprendimiento de ropa interior de diseño. Cuenta con su propia marca especializada en la confección de pijamas y batas; así como también con otra gran variedad de marcas que se caracterizan por sus diseños únicos, innovadores y super cómodos. Busca ofrecer sobre todo algo único y exclusivo. En constante cambio en géneros, modelos y estampado, brinda a sus clientes la posibilidad de renovarse, sentirse única y cómoda en una sola compra.';

var botonMarca = document.querySelector('#marca');
var botonValores = document.querySelector('#valores');
var botonVision = document.querySelector('#vision');
var botonProductos = document.querySelector('#productos');

botonMarca.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Adelaida es un emprendimiento de ropa interior de diseño. Cuenta con su propia marca especializada en la confección de pijamas y batas; así como también con otra gran variedad de marcas que se caracterizan por sus diseños únicos, innovadores y super cómodos. Busca ofrecer sobre todo algo único y exclusivo. En constante cambio en géneros, modelos y estampado, brinda a sus clientes la posibilidad de renovarse, sentirse única y cómoda en una sola compra.';
});

botonValores.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Tiene como objetivo a su vez generar un impacto social a través de diferentes vías. Una de ellas es el taller. El cual tiene como fin no solo la producción de las prendas que se comercializan, sino también la capacitación a través de diferentes talleres, tales como:  emprendedurismo , contabilidad, moda , corte y confección , mordería , géneros , empoderamiento , etc. Con la finalidad de lograr que las personas que trabajen en el, lo hagan solo por un periodo de tiempo preestablecido y posteriormente puedan por su lado abrir su propio emprendimiento.';
});

botonVision.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Por otro lado, la marca tiene especial interés en la confección de todo tipo de talles, desde un S a un XXL. Ya que busca comprender a la mujer al natural, dejando de lado estereotipos fijados por una sociedad que se empeña en remarcar cuerpos escuálidos como estándares de belleza. En ADELAIDA se busca romper con esos prototipos, resaltar a la mujer real y aquellas cosas que realmente las hacen hermosas “sus historias”. Estas ideas se ven aplicadas en las producciones de fotos que';
});

botonProductos.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Este proyecto tiene que ver con la confección de prendas (todas las que se vendan en el local) en talles especiales. Y a su vez para casos especiales como mujeres que tuvieron cáncer de mamas. Todo esto también acompañado por una estrategia de marketing que busca por un lado resaltar la belleza natural, hacer fotos con mujeres con sobre peso. Buscar que las personas valoren el cuerpo que tienen y no busquen un ideal que hasta termina siendo poco saludable. A su vez concientizar sobre el cáncer de mama y las personas que pudieron sobrepasarlo y pueden vivir con excelente calidad de vida sin acomplejarse por ello.';
});

var contenedorNoticia1 = document.querySelector('#contenedor-noticia1');
var infoNoticia1 = document.querySelector('#info-noticia1');

contenedorNoticia1.addEventListener('mouseover',function(){
    infoNoticia1.style.display = "initial";
})
contenedorNoticia1.addEventListener('mouseout',function(){
    infoNoticia1.style.display = "none";
})

var contenedorNoticia2 = document.querySelector('#contenedor-noticia2');
var infoNoticia2 = document.querySelector('#info-noticia2');

contenedorNoticia2.addEventListener('mouseover',function(){
    infoNoticia2.style.display = "initial";
})
contenedorNoticia2.addEventListener('mouseout',function(){
    infoNoticia2.style.display = "none";
})

var contenedorNoticia3 = document.querySelector('#contenedor-noticia3');
var infoNoticia3 = document.querySelector('#info-noticia3');

contenedorNoticia3.addEventListener('mouseover',function(){
    infoNoticia3.style.display = "initial";
})
contenedorNoticia3.addEventListener('mouseout',function(){
    infoNoticia3.style.display = "none";
})

