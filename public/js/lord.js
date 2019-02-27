var textoDinamico = document.querySelector('#texto-dinamico')

var textoDinamicoMarca = document.querySelector('#texto-dinamico-marca');
var textoDinamicoObjetivos = document.querySelector('#texto-dinamico-objetivos');

var botonMarca = document.querySelector('#marca');
var botonObjetivos = document.querySelector('#objetivos');


textoDinamico.innerText = 'Adelaida es un emprendimiento personal en el que pude desarrollarme, meterme en el mundo del emprendimiento, valorar el trabajo dedicado y artesanal, conocer gente increible con ideas enormes y contagiarme de muchas energias y ganas de crecer; no solo en lo personal, sino tambien en el ambito social, ofeciendo mucho mas que ropa interior, sino tambien diseño, trabajo artesanal, contenido social y responsabilidad medioambiental. Pongo el alma en esto , y mucha dedicacion y esperanzas en que todos los proyectos que tengo puedan llevarse a cabo poco a poco. Se podría decir que Adelaida es como una hija para mi.';

botonMarca.addEventListener('click',function(){
    if(textoDinamicoMarca.innerText == ''){
        textoDinamicoMarca.innerText ='Adelaida es un emprendimiento personal en el que pude desarrollarme, meterme en el mundo del emprendimiento, valorar el trabajo dedicado y artesanal, conocer gente increible con ideas enormes y contagiarme de muchas energias y ganas de crecer; no solo en lo personal, sino tambien en el ambito social, ofeciendo mucho mas que ropa interior, sino tambien diseño, trabajo artesanal, contenido social y responsabilidad medioambiental. Pongo el alma en esto , y mucha dedicacion y esperanzas en que todos los proyectos que tengo puedan llevarse a cabo poco a poco. Se podría decir que Adelaida es como una hija para mi.';
    }else{
        textoDinamicoMarca.innerText = '';
    }
    textoDinamico.innerText = 'Adelaida es un emprendimiento personal en el que pude desarrollarme, meterme en el mundo del emprendimiento, valorar el trabajo dedicado y artesanal, conocer gente increible con ideas enormes y contagiarme de muchas energias y ganas de crecer; no solo en lo personal, sino tambien en el ambito social, ofeciendo mucho mas que ropa interior, sino tambien diseño, trabajo artesanal, contenido social y responsabilidad medioambiental. Pongo el alma en esto , y mucha dedicacion y esperanzas en que todos los proyectos que tengo puedan llevarse a cabo poco a poco. Se podría decir que Adelaida es como una hija para mi.';
});

const desktopBp = matchMedia('(min-width: 768px)');
    const changeSize = mql => {
        if(mql.matches == true){
            botonMarca.addEventListener('mouseover',function(){
                textoDinamico.innerText = 'Adelaida es un emprendimiento personal en el que pude desarrollarme, meterme en el mundo del emprendimiento, valorar el trabajo dedicado y artesanal, conocer gente increible con ideas enormes y contagiarme de muchas energias y ganas de crecer; no solo en lo personal, sino tambien en el ambito social, ofeciendo mucho mas que ropa interior, sino tambien diseño, trabajo artesanal, contenido social y responsabilidad medioambiental. Pongo el alma en esto , y mucha dedicacion y esperanzas en que todos los proyectos que tengo puedan llevarse a cabo poco a poco. Se podría decir que Adelaida es como una hija para mi.';
                document.getElementById('marcah3').style.background = "#BEA877";
                document.getElementById('objetivosh3').style.background = "#D6C8A8";
            });
            botonObjetivos.addEventListener('mouseover',function(){
                textoDinamico.innerText = 'Adelaida busca ofrecer productos únicos caracterizados no solo por el diseño, sino tambien por una historia, un sueño, un emprendimiento. Busca reflejar el trabajo y dedicación para que entiendas que no solo te estas llevando una pieza unica y de diseño, sino tambien la ilusión, dedicación y amor, de todas las personas que estan detras de cada marca que comercializa Adelaida. Buscamos generar conciencia social a travez del reciclaje, el valor por el emprendedurismo, el respeto por el trabajo ajeno y la importancia del trabajo justo. Esperamos de corazón que al comprar Adelaida compres mucho mas que una prenda. Esperamos que compres con sentido, con conciencia y con amor.';
                document.getElementById('marcah3').style.background = "#D6C8A8";
                document.getElementById('objetivosh3').style.background = "#BEA877";
            }); 
        }   
    };
desktopBp.addListener(changeSize);
changeSize(desktopBp);

botonObjetivos.addEventListener('click',function(){
    if(textoDinamicoObjetivos.innerText == ''){
        textoDinamicoObjetivos.innerText ='Adelaida busca ofrecer productos únicos caracterizados no solo por el diseño, sino tambien por una historia, un sueño, un emprendimiento. Busca reflejar el trabajo y dedicación para que entiendas que no solo te estas llevando una pieza unica y de diseño, sino tambien la ilusión, dedicación y amor, de todas las personas que estan detras de cada marca que comercializa Adelaida. Buscamos generar conciencia social a travez del reciclaje, el valor por el emprendedurismo, el respeto por el trabajo ajeno y la importancia del trabajo justo. Esperamos de corazón que al comprar Adelaida compres mucho mas que una prenda. Esperamos que compres con sentido, con conciencia y con amor.';
    }else{
        textoDinamicoObjetivos.innerText = '';
    }
    textoDinamico.innerText = 'Adelaida busca ofrecer productos únicos caracterizados no solo por el diseño, sino tambien por una historia, un sueño, un emprendimiento. Busca reflejar el trabajo y dedicación para que entiendas que no solo te estas llevando una pieza unica y de diseño, sino tambien la ilusión, dedicación y amor, de todas las personas que estan detras de cada marca que comercializa Adelaida. Buscamos generar conciencia social a travez del reciclaje, el valor por el emprendedurismo, el respeto por el trabajo ajeno y la importancia del trabajo justo. Esperamos de corazón que al comprar Adelaida compres mucho mas que una prenda. Esperamos que compres con sentido, con conciencia y con amor.';
});

var contenedorNoticia1 = document.querySelector('#contenedor-noticia1');
var infoNoticia1 = document.querySelector('#info-noticia1');
var categoria1 = document.querySelector('#categoria-noticia1');

contenedorNoticia1.addEventListener('click',function(){
    if(infoNoticia2.style.display != ''){
        infoNoticia2.style.display = 'none';
        contenedorNoticia2.style.background = "url('svg/sustentabilidad.svg') center / cover";
    }
    if(infoNoticia3.style.display != ''){
        infoNoticia3.style.display = 'none';
        contenedorNoticia3.style.background = "url('svg/emprendedurismo.svg') center / cover";
    }

    if(infoNoticia1.style.display == 'none' || infoNoticia1.style.display == ''){
        categoria1.style.display = "none";
        infoNoticia1.style.display = "initial";
        contenedorNoticia1.style.background = "url('svg/moda.svg') center / cover, #D6C8A8";
    }else{
        categoria1.style.display = 'flex';
        infoNoticia1.style.display = 'none';
        contenedorNoticia1.style.background = "url('svg/moda.svg') center / cover";
    }
})

contenedorNoticia1.addEventListener('mouseover',function(){
    categoria1.style.display = 'none';
    infoNoticia1.style.display = 'initial';
    contenedorNoticia1.style.background = "url('svg/moda.svg') center / cover, #D6C8A8";
});
contenedorNoticia1.addEventListener('mouseout',function(){
    categoria1.style.display = 'flex';
    infoNoticia1.style.display = 'none';
    contenedorNoticia1.style.background = "url('svg/moda.svg') center / cover";
});

var contenedorNoticia2 = document.querySelector('#contenedor-noticia2');
var infoNoticia2 = document.querySelector('#info-noticia2');
var categoria2 = document.querySelector('#categoria-noticia2');

contenedorNoticia2.addEventListener('click',function(){
    if(infoNoticia1.style.display != ''){
        infoNoticia1.style.display = 'none';
        contenedorNoticia1.style.background = "url('svg/moda.svg') center / cover";
    }
    if(infoNoticia3.style.display != ''){
        infoNoticia3.style.display = 'none';
        contenedorNoticia3.style.background = "url('svg/emprendedurismo.svg') center / cover";
    }

    if(infoNoticia2.style.display == 'none' || infoNoticia2.style.display == ''){
        categoria2.style.display = 'none';
        infoNoticia2.style.display = "initial";
        contenedorNoticia2.style.background = "url('svg/sustentabilidad.svg') center / cover, #D6C8A8";
    }else{
        categoria2.style.display = "flex";
        infoNoticia2.style.display = 'none';
        contenedorNoticia2.style.background = "url('svg/sustentabilidad.svg') center / cover";
    }
})

contenedorNoticia2.addEventListener('mouseover',function(){
    categoria2.style.display = 'none';
    infoNoticia2.style.display = 'initial';
    contenedorNoticia2.style.background = "url('svg/sustentabilidad.svg') center / cover, #D6C8A8";
});
contenedorNoticia2.addEventListener('mouseout',function(){
    categoria2.style.display = 'flex';
    infoNoticia2.style.display = 'none';
    contenedorNoticia2.style.background = "url('svg/sustentabilidad.svg') center / cover";
});

var contenedorNoticia3 = document.querySelector('#contenedor-noticia3');
var infoNoticia3 = document.querySelector('#info-noticia3');
var categoria3 = document.querySelector('#categoria-noticia3');

contenedorNoticia3.addEventListener('click',function(){
    if(infoNoticia2.style.display != ''){
        infoNoticia2.style.display = 'none';
        contenedorNoticia2.style.background = "url('svg/sustentabilidad.svg') center / cover";
    }
    if(infoNoticia1.style.display != ''){
        infoNoticia1.style.display = 'none';
        contenedorNoticia1.style.background = "url('svg/moda.svg') center / cover";
    }

    if(infoNoticia3.style.display == 'none' || infoNoticia3.style.display == ''){
        categoria3.style.display = 'none';
        infoNoticia3.style.display = "initial";
        contenedorNoticia3.style.background = "url('svg/emprendedurismo.svg') center / cover, #D6C8A8";
    }else{
        categoria3.style.display = 'flex';
        infoNoticia3.style.display = 'none';
        contenedorNoticia3.style.background = "url('svg/emprendedurismo.svg') center / cover";
    }
})

contenedorNoticia3.addEventListener('mouseover',function(){
    categoria3.style.display = 'none';
    infoNoticia3.style.display = 'initial';
    contenedorNoticia3.style.background = "url('svg/emprendedurismo.svg') center / cover, #D6C8A8";
});
contenedorNoticia3.addEventListener('mouseout',function(){
    categoria3.style.display = 'flex';
    infoNoticia3.style.display = 'none';
    contenedorNoticia3.style.background = "url('svg/emprendedurismo.svg') center / cover";
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

