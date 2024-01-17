$(function(){
    'use strict'
    //Animar countdown//
    
    $('.contador').countdown('2024/05/31', event =>{
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));    
      });
      
    //Animar countdown//
    
});

$(function(){


  // Contar palabras en los inputs del testimonial
  var textArea_testimonial = $('#testimonial-texto');
  var contador_testimonial = $('#contador_testimonial');
  contador_testimonial.html(0);

  textArea_testimonial.on('input', function() {
    var contenido = $(this).val();
    
    if (contenido.length > 200) {
      $(this).val(contenido.substring(0,200));
      contador_testimonial.html(200);
      contador_testimonial.css({color:'red'})
    } else{
      contador_testimonial.html(contenido.length);
      contador_testimonial.css({color:'black'})
    }
  
  });


  var textArea_autor = $('#autor-testimonial');
  var contador_autor = $('#contador_autor');
  contador_autor.html(0);

  textArea_autor.on('input', function() {
    var contenidoAutor = $(this).val();
    
    if (contenidoAutor.length > 32) {
      $(this).val(contenidoAutor.substring(0,32));
      contador_autor.html(32);
      contador_autor.css({color:'red'})
    } else{
      contador_autor.html(contenidoAutor.length);
      contador_autor.css({color:'black'})
    }
  
  });

  //Contador para encabezado

  var input_encabezado = $('#encabezado');
  var contador_encabezado= $('#contador_encabezado');
  contador_encabezado.html(0);

  input_encabezado.on('input', function() {
    var contenido = $(this).val();
  
    if (contenido.length > 80) {
      $(this).val(contenido.substring(0,80));
      contador_encabezado.html(80);
      contador_encabezado.css({color:'red'});
    } else{
      contador_encabezado.html(contenido.length);
      contador_encabezado.css({color:'black'});
    }
  
  });



  //Contador para contacto

  var input_contacto = $('#titulo-contacto');
  var contador_contacto = $('#contador_contacto');
  contador_contacto.html(0);
  input_contacto.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 100) {
      $(this).val(contenido.substring(0,100));
      contador_contacto.html(100);
      contador_contacto.css({color:'red'});
    } else{
      contador_contacto.html(contenido.length);
      contador_contacto.css({color:'black'});
    }
  })


  //Contador para propiedad

  var input_titulo = $('#titulo-propiedad');
  var input_descripcion = $('#descripcion-propiedad');

  var contador_titulo = $('#contador-titulo');
  contador_titulo.html(0);
  var contador_descripcion = $('#contador-descripcion');
  contador_descripcion.html(0);
  

  input_titulo.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 80) {
      $(this).val(contenido.substring(0,80));
      contador_titulo.html(80);
      contador_titulo.css({color:'red'});
    } else{
      contador_titulo.html(contenido.length);
      contador_titulo.css({color:'black'});
    }
  })

  input_descripcion.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 1000) {
      $(this).val(contenido.substring(0,1000));
      contador_descripcion.html(1000);
      contador_descripcion.css({color:'red'});
    } else{
      contador_descripcion.html(contenido.length);
      contador_descripcion.css({color:'black'});
    }
  })



  // Contadores de blog
  input_tituloB = $('#agregar-blog');
  input_autorB = $('#autor');
  input_parrafoB = $('#texto-blog');
  input_descripcionB = $('#descripcion-blog');
  var contador_tituloB=$('#contador-tituloB').html(0);
  var contador_autorB=$('#contador-autorB').html(0);
  var contador_parrafoB=$('#contador-parrafoB').html(0);
  var contador_descripcionB=$('#contador-descripcionB').html(0);

  input_tituloB.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 80) {
      $(this).val(contenido.substring(0,80));
      contador_tituloB.html(80);
      contador_tituloB.css({color:'red'});
    } else{
      contador_tituloB.html(contenido.length);
      contador_tituloB.css({color:'black'});
    }
  })

  input_autorB.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 30) {
      $(this).val(contenido.substring(0,30));
      contador_autorB.html(30);
      contador_autorB.css({color:'red'});
    } else{
      contador_autorB.html(contenido.length);
      contador_autorB.css({color:'black'});
    }
  })

  input_parrafoB.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 300) {
      $(this).val(contenido.substring(0,300));
      contador_parrafoB.html(300);
      contador_parrafoB.css({color:'red'});
    } else{
      contador_parrafoB.html(contenido.length);
      contador_parrafoB.css({color:'black'});
    }
  })

  input_descripcionB.on('input', function(){
    var contenido = $(this).val();

    if (contenido.length > 10000) {
      $(this).val(contenido.substring(0,10000));
      contador_descripcionB.html(10000);
      contador_descripcionB.css({color:'red'});
    } else{
      contador_descripcionB.html(contenido.length);
      contador_descripcionB.css({color:'black'});
    }
  })

});

$(function(){
'use strict';

//Evento Change para radios de contacto
var telefonoCheckbox = $("#telefonoCheckbox");
var correoCheckbox= $("#correoCheckbox");

telefonoCheckbox.on("change", ()=>{
  $('.eleccion-telefono').css({display:'block'})
});
correoCheckbox.on("change", ()=>{
  $('.eleccion-telefono').css({display:'none'})
});

//Contadodor para contacto

var nombre = $('#nombre-contacto');
var contadorC = $('#contador_nombreContacto');
contadorC.html(0);  
nombre.on('input', function(){
  
  var contenido = $(this).val();
  
  if (contenido.length > 50) {
    $(this).val(contenido.substring(0,50));
    contadorC.html(50);
    contadorC.css({color:'red'})
    
  } else{
    contadorC.html(contenido.length);
    contadorC.css({color:'black'})
  }
  
});

  var mensaje_contacto = $('#mensaje-contacto');
  var contador_mensaje = $('#contador-mensajeContacto');
  contador_mensaje.html(0);

  mensaje_contacto.on('input', function(){
    var contenido = $(this).val();

    if(contenido.length > 500){
      $(this).val(contenido.substring(0,500));
      contador_mensaje.html(500);
      contador_mensaje.css({color:'red'})
    }else{
      contador_mensaje.html(contenido.length);
      contador_mensaje.css({color:'black'})
    }
  })

});

$(function(){
'use strict';

window.addEventListener("scroll", function(event){
  if (this.scrollY >= 3000){
       console.log(this.scrollY.val)
  }  
}, false);
});

