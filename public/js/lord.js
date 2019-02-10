var textoDinamico = document.querySelector('#texto-dinamico')

var textoDinamicoMarca = document.querySelector('#texto-dinamico-marca');
var textoDinamicoValores = document.querySelector('#texto-dinamico-valores');
var textoDinamicoVision = document.querySelector('#texto-dinamico-vision');
var textoDinamicoProductos = document.querySelector('#texto-dinamico-productos');

var botonMarca = document.querySelector('#marca');
var botonValores = document.querySelector('#valores');
var botonVision = document.querySelector('#vision');
var botonProductos = document.querySelector('#productos');

textoDinamico.innerText = 'Adelaida es un emprendimiento de ropa interior de diseño. Cuenta con su propia marca especializada en la confección de pijamas y batas; así como también con otra gran variedad de marcas que se caracterizan por sus diseños únicos, innovadores y super cómodos. Busca ofrecer sobre todo algo único y exclusivo. En constante cambio en géneros, modelos y estampado, brinda a sus clientes la posibilidad de renovarse, sentirse única y cómoda en una sola compra.';

botonMarca.addEventListener('click',function(){
    if(textoDinamicoMarca.innerText == ''){
        textoDinamicoMarca.innerText ='Adelaida es un emprendimiento de ropa interior de diseño. Cuenta con su propia marca especializada en la confección de pijamas y batas; así como también con otra gran variedad de marcas que se caracterizan por sus diseños únicos, innovadores y super cómodos. Busca ofrecer sobre todo algo único y exclusivo. En constante cambio en géneros, modelos y estampado, brinda a sus clientes la posibilidad de renovarse, sentirse única y cómoda en una sola compra.';
    }else{
        textoDinamicoMarca.innerText = '';
    }
    textoDinamico.innerText = 'Adelaida es un emprendimiento de ropa interior de diseño. Cuenta con su propia marca especializada en la confección de pijamas y batas; así como también con otra gran variedad de marcas que se caracterizan por sus diseños únicos, innovadores y super cómodos. Busca ofrecer sobre todo algo único y exclusivo. En constante cambio en géneros, modelos y estampado, brinda a sus clientes la posibilidad de renovarse, sentirse única y cómoda en una sola compra.';
});

botonMarca.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Adelaida es un emprendimiento de ropa interior de diseño. Cuenta con su propia marca especializada en la confección de pijamas y batas; así como también con otra gran variedad de marcas que se caracterizan por sus diseños únicos, innovadores y super cómodos. Busca ofrecer sobre todo algo único y exclusivo. En constante cambio en géneros, modelos y estampado, brinda a sus clientes la posibilidad de renovarse, sentirse única y cómoda en una sola compra.';
});

botonValores.addEventListener('click',function(){
    if(textoDinamicoValores.innerText == ''){
        textoDinamicoValores.innerText ='Tiene como objetivo a su vez generar un impacto social a través de diferentes vías. Una de ellas es el taller. El cual tiene como fin no solo la producción de las prendas que se comercializan, sino también la capacitación a través de diferentes talleres, tales como:  emprendedurismo , contabilidad, moda , corte y confección , mordería , géneros , empoderamiento , etc. Con la finalidad de lograr que las personas que trabajen en el, lo hagan solo por un periodo de tiempo preestablecido y posteriormente puedan por su lado abrir su propio emprendimiento.';
    }else{
        textoDinamicoValores.innerText = '';
    }
    textoDinamico.innerText = 'Tiene como objetivo a su vez generar un impacto social a través de diferentes vías. Una de ellas es el taller. El cual tiene como fin no solo la producción de las prendas que se comercializan, sino también la capacitación a través de diferentes talleres, tales como:  emprendedurismo , contabilidad, moda , corte y confección , mordería , géneros , empoderamiento , etc. Con la finalidad de lograr que las personas que trabajen en el, lo hagan solo por un periodo de tiempo preestablecido y posteriormente puedan por su lado abrir su propio emprendimiento.';
});


botonValores.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Tiene como objetivo a su vez generar un impacto social a través de diferentes vías. Una de ellas es el taller. El cual tiene como fin no solo la producción de las prendas que se comercializan, sino también la capacitación a través de diferentes talleres, tales como:  emprendedurismo , contabilidad, moda , corte y confección , mordería , géneros , empoderamiento , etc. Con la finalidad de lograr que las personas que trabajen en el, lo hagan solo por un periodo de tiempo preestablecido y posteriormente puedan por su lado abrir su propio emprendimiento.';
});


botonVision.addEventListener('click',function(){
    if(textoDinamicoVision.innerText == ''){
        textoDinamicoVision.innerText ='Por otro lado, la marca tiene especial interés en la confección de todo tipo de talles, desde un S a un XXL. Ya que busca comprender a la mujer al natural, dejando de lado estereotipos fijados por una sociedad que se empeña en remarcar cuerpos escuálidos como estándares de belleza. En ADELAIDA se busca romper con esos prototipos, resaltar a la mujer real y aquellas cosas que realmente las hacen hermosas “sus historias”. Estas ideas se ven aplicadas en las producciones de fotos que';
    }else{
        textoDinamicoVision.innerText = '';
    }
    textoDinamico.innerText = 'Por otro lado, la marca tiene especial interés en la confección de todo tipo de talles, desde un S a un XXL. Ya que busca comprender a la mujer al natural, dejando de lado estereotipos fijados por una sociedad que se empeña en remarcar cuerpos escuálidos como estándares de belleza. En ADELAIDA se busca romper con esos prototipos, resaltar a la mujer real y aquellas cosas que realmente las hacen hermosas “sus historias”. Estas ideas se ven aplicadas en las producciones de fotos que'
});

botonVision.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Por otro lado, la marca tiene especial interés en la confección de todo tipo de talles, desde un S a un XXL. Ya que busca comprender a la mujer al natural, dejando de lado estereotipos fijados por una sociedad que se empeña en remarcar cuerpos escuálidos como estándares de belleza. En ADELAIDA se busca romper con esos prototipos, resaltar a la mujer real y aquellas cosas que realmente las hacen hermosas “sus historias”. Estas ideas se ven aplicadas en las producciones de fotos que';
});


botonProductos.addEventListener('click',function(){
    if(textoDinamicoProductos.innerText == ''){
        textoDinamicoProductos.innerText ='Este proyecto tiene que ver con la confección de prendas (todas las que se vendan en el local) en talles especiales. Y a su vez para casos especiales como mujeres que tuvieron cáncer de mamas. Todo esto también acompañado por una estrategia de marketing que busca por un lado resaltar la belleza natural, hacer fotos con mujeres con sobre peso. Buscar que las personas valoren el cuerpo que tienen y no busquen un ideal que hasta termina siendo poco saludable. A su vez concientizar sobre el cáncer de mama y las personas que pudieron sobrepasarlo y pueden vivir con excelente calidad de vida sin acomplejarse por ello.';
    }else{
        textoDinamicoProductos.innerText = '';
    }
    textoDinamico.innerText = 'Este proyecto tiene que ver con la confección de prendas (todas las que se vendan en el local) en talles especiales. Y a su vez para casos especiales como mujeres que tuvieron cáncer de mamas. Todo esto también acompañado por una estrategia de marketing que busca por un lado resaltar la belleza natural, hacer fotos con mujeres con sobre peso. Buscar que las personas valoren el cuerpo que tienen y no busquen un ideal que hasta termina siendo poco saludable. A su vez concientizar sobre el cáncer de mama y las personas que pudieron sobrepasarlo y pueden vivir con excelente calidad de vida sin acomplejarse por ello.'
});

botonProductos.addEventListener('mouseover',function(){
    textoDinamico.innerText = 'Este proyecto tiene que ver con la confección de prendas (todas las que se vendan en el local) en talles especiales. Y a su vez para casos especiales como mujeres que tuvieron cáncer de mamas. Todo esto también acompañado por una estrategia de marketing que busca por un lado resaltar la belleza natural, hacer fotos con mujeres con sobre peso. Buscar que las personas valoren el cuerpo que tienen y no busquen un ideal que hasta termina siendo poco saludable. A su vez concientizar sobre el cáncer de mama y las personas que pudieron sobrepasarlo y pueden vivir con excelente calidad de vida sin acomplejarse por ello.';
});

var contenedorNoticia1 = document.querySelector('#contenedor-noticia1');
var infoNoticia1 = document.querySelector('#info-noticia1');
var categoria1 = document.querySelector('#categoria-noticia1');

contenedorNoticia1.addEventListener('click',function(){
    if(infoNoticia2.style.display != ''){
        infoNoticia2.style.display = 'none';
        contenedorNoticia2.style.background = "url('images/reciclaje.jpg') center / cover";
    }
    if(infoNoticia3.style.display != ''){
        infoNoticia3.style.display = 'none';
        contenedorNoticia3.style.background = "url('images/lorem.jpg') center / cover";
    }

    if(infoNoticia1.style.display == 'none' || infoNoticia1.style.display == ''){
        categoria1.style.display = "none";
        infoNoticia1.style.display = "initial";
        contenedorNoticia1.style.background = "url('images/moda.jpg') center / cover, #D6C8A8";
    }else{
        categoria1.style.display = 'flex';
        infoNoticia1.style.display = 'none';
        contenedorNoticia1.style.background = "url('images/moda.jpg') center / cover";
    }
})

contenedorNoticia1.addEventListener('mouseover',function(){
    categoria1.style.display = 'none';
    infoNoticia1.style.display = 'initial';
    contenedorNoticia1.style.background = "url('images/moda.jpg') center / cover, #D6C8A8";
});
contenedorNoticia1.addEventListener('mouseout',function(){
    categoria1.style.display = 'flex';
    infoNoticia1.style.display = 'none';
    contenedorNoticia1.style.background = "url('images/moda.jpg') center / cover";
});

var contenedorNoticia2 = document.querySelector('#contenedor-noticia2');
var infoNoticia2 = document.querySelector('#info-noticia2');
var categoria2 = document.querySelector('#categoria-noticia2');

contenedorNoticia2.addEventListener('click',function(){
    if(infoNoticia1.style.display != ''){
        infoNoticia1.style.display = 'none';
        contenedorNoticia1.style.background = "url('images/moda.jpg') center / cover";
    }
    if(infoNoticia3.style.display != ''){
        infoNoticia3.style.display = 'none';
        contenedorNoticia3.style.background = "url('images/lorem.jpg') center / cover";
    }

    if(infoNoticia2.style.display == 'none' || infoNoticia2.style.display == ''){
        categoria2.style.display = 'none';
        infoNoticia2.style.display = "initial";
        contenedorNoticia2.style.background = "url('images/reciclaje.jpg') center / cover, #D6C8A8";
    }else{
        categoria2.style.display = "flex";
        infoNoticia2.style.display = 'none';
        contenedorNoticia2.style.background = "url('images/reciclaje.jpg') center / cover";
    }
})

contenedorNoticia2.addEventListener('mouseover',function(){
    categoria2.style.display = 'none';
    infoNoticia2.style.display = 'initial';
    contenedorNoticia2.style.background = "url('images/reciclaje.jpg') center / cover, #D6C8A8";
});
contenedorNoticia2.addEventListener('mouseout',function(){
    categoria2.style.display = 'flex';
    infoNoticia2.style.display = 'none';
    contenedorNoticia2.style.background = "url('images/reciclaje.jpg') center / cover";
});

var contenedorNoticia3 = document.querySelector('#contenedor-noticia3');
var infoNoticia3 = document.querySelector('#info-noticia3');
var categoria3 = document.querySelector('#categoria-noticia3');

contenedorNoticia3.addEventListener('click',function(){
    if(infoNoticia2.style.display != ''){
        infoNoticia2.style.display = 'none';
        contenedorNoticia2.style.background = "url('images/reciclaje.jpg') center / cover";
    }
    if(infoNoticia1.style.display != ''){
        infoNoticia1.style.display = 'none';
        contenedorNoticia1.style.background = "url('images/moda.jpg') center / cover";
    }

    if(infoNoticia3.style.display == 'none' || infoNoticia3.style.display == ''){
        categoria3.style.display = 'none';
        infoNoticia3.style.display = "initial";
        contenedorNoticia3.style.background = "url('images/lorem.jpg') center / cover, #D6C8A8";
    }else{
        categoria3.style.display = 'flex';
        infoNoticia3.style.display = 'none';
        contenedorNoticia3.style.background = "url('images/lorem.jpg') center / cover";
    }
})

contenedorNoticia3.addEventListener('mouseover',function(){
    categoria3.style.display = 'none';
    infoNoticia3.style.display = 'initial';
    contenedorNoticia3.style.background = "url('images/lorem.jpg') center / cover, #D6C8A8";
});
contenedorNoticia3.addEventListener('mouseout',function(){
    categoria3.style.display = 'flex';
    infoNoticia3.style.display = 'none';
    contenedorNoticia3.style.background = "url('images/lorem.jpg') center / cover";
});

var conocenos = document.querySelector('#link-conocenos');

conocenos.addEventListener('click',function(){
    document.querySelector('#conocenos').scrollIntoView({block: "start",behavior: "instant"});
});

var noticias = document.querySelector('#link-noticias');

noticias.addEventListener('click',function(){
    document.querySelector('#noticias').scrollIntoView({block: "start",behavior: "instant"});
});

var contacto = document.querySelector('#link-contacto');

contacto.addEventListener('click',function(){
    document.querySelector('#contacto').scrollIntoView({block: "start",behavior: "instant"});
});

var logoFooter = document.querySelector('#logo-footer');

logoFooter.addEventListener('click',function(){
    document.querySelector('#home').scrollIntoView({block: "start", behavior: "instant"});
})

