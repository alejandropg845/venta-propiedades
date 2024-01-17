$('#enviar-testimonial').click(function(){
    var formulario = new FormData($('.formulario-testimonial')[0]);
    let testimonial = $('#testimonial-texto').val();
    let autor= $('#autor-testimonial').val();

    if (testimonial==='' || autor===''){
      Swal.fire({
        title: "No has llenado todos los datos requeridos",
        text: "",
        icon: "error",
        showConfirmButton: true
      });
    }else{
      formulario.append('testimonial',testimonial);
      formulario.append('autor',autor);

      $.ajax({
        url: "../../php's/acciones/cambiar_testimonial.php",
        type: 'POST',
        contentType: false,
        processData: false,
        data: formulario,
        success: function(){
          $('#testimonial-texto').val('');
          $('#autor-testimonial').val('');
          $('#contador_testimonial').html(0);
          $('#contador_testimonial').css({color:'black'})
          $('#contador_autor').html(0)
          $('#contador_autor').css({color:'black'})
          Swal.fire({
            title: "Testimonial agregado",
            text: "",
            icon: "success",
            showConfirmButton: false,
            timer: 1000
          });
        }
      })
    }
})  

$('#enviar-propiedad').click(function(){
  let inputFile = $('#imagen-propiedad');
  let imagenSeleccionada = inputFile[0].files[0];

  if(!imagenSeleccionada){
    Swal.fire({
      title: "Selecciona una imagen para subir",
      text: "",
      icon: "info",
      showConfirmButton: false,
      timer: 1000
    });
    return false;
  }
  var formulario = new FormData($('#formulario-agregarPropiedad')[0]);
  
  let titulo = $('#titulo-propiedad').val();
  let descripcion = $('#descripcion-propiedad').val();
  let precio =$('#precio-propiedad').val();
  let banhos = $('#cantidad-banhos').val();
  let garajes = $('#cantidad-garajes').val();
  let habitaciones = $('#cantidad-habitaciones').val();

  if(titulo==='' || descripcion==='' || precio==='' || banhos==='' || garajes==='' || habitaciones===''){

    Swal.fire({
      title: "No has llenado todos los datos requeridos",
      text: "",
      icon: "error",
      showConfirmButton: true
    });
  }else{
  
  formulario.append('titulo', titulo);
  formulario.append('descripcion',descripcion);
  formulario.append('precio',precio);
  formulario.append('banhos', banhos);
  formulario.append('garajes', garajes);
  formulario.append('habitaciones',habitaciones);

  $.ajax({
    url: "../../php's/acciones/agregar_propiedad.php",
    type: 'POST',
    data: formulario,
    contentType: false,
    processData: false,
    success: function(){
      $('#imagen-propiedad').val('');
      $('#titulo-propiedad').val('');
      $('#descripcion-propiedad').val('');
      $('#precio-propiedad').val('');
      $('#cantidad-banhos').val('');
      $('#cantidad-garajes').val('');
      $('#cantidad-habitaciones').val('');
      $('#imagen-propiedad').val('')
      $('#contador-titulo').html(0);
      $('#contador-descripcion').html(0);
      $('#contador-descripcion').css({color:'black'});
      $('#contador-titulo').css({color:'black'});
      Swal.fire({
        title: "Propiedad agregada",
        text: "",
        icon: "success",
        showConfirmButton: false,
        timer: 1000
      });
    }

  })}  

})

$('#boton-enviarBlog').on({
  click:function(){
    var formulario = new FormData($('#agregarBlog')[0]);
    let titulo = $('#agregar-blog').val();
    let fecha = $('#fecha-blog').val();
    let texto = $('#texto-blog').val();
    let descripcion = $('#descripcion-blog').val();
    let autor = $('#autor').val();

  let inputFile = $('#imagen-blog');
  let imagenSeleccionada = inputFile[0].files[0];

  if(!imagenSeleccionada){
    Swal.fire({
      title: "Selecciona una imagen para subir",
      text: "",
      icon: "info",
      showConfirmButton: false,
      timer: 1000
    });
    return false;
  }
    

    if (titulo==='' || fecha==='' || texto==='' || descripcion==='' || autor===''){
      Swal.fire({
        title: "No has llenado todos los datos requeridos",
        text: "",
        icon: "error",
        showConfirmButton: true
      });
    }else{
      formulario.append('autor',autor);
      formulario.append('titulo',titulo);
      formulario.append('fecha',fecha);
      formulario.append('texto',texto);
      formulario.append('descripcion', descripcion);
    

    $.ajax({

      url: "../../php's/acciones/cambiar_blogs.php",
      type: 'POST',
      data: formulario,
      contentType: false,
      processData: false,
      success: function(){
        $('#agregar-blog').val('');
        $('#fecha-blog').val('');
        $('#texto-blog').val('');
        $('#autor').val('');
        $('#descripcion-blog').val('');
        $('#imagen-blog').val('');
        $('#contador-tituloB').html(0);
        $('#contador-autorB').html(0);
        $('#contador-parrafoB').html(0);
        $('#contador-descripcionB').html(0);
        $('#contador-tituloB').css({color:'black'});
        $('#contador-autorB').css({color:'black'});
        $('#contador-parrafoB').css({color:'black'});
        $('#contador-descripcionB').css({color:'black'});
        Swal.fire({
          title: "Blog agregado",
          text: "",
          icon: "success",
          showConfirmButton: false,
          timer: 1000
        });
      }

    })}

  }
})

$('.boton-eliminarPropiedad').on({
  click: function(){
    let atributoId = $(this).attr('id');
    let id = 'id='+atributoId;
    let contenedor= $(this).parent();

    $.ajax({
      url: "../../php's/acciones/eliminar_propiedad.php",
      type: 'POST',
      cache: false,
      data: id,
      success: function(){
        Swal.fire({
          title: "Propiedad eliminada",
          text: "",
          icon: "success",
          showConfirmButton: false,
          timer: 1000
        });

        contenedor.fadeOut(1000);

      }
    })
  }
})

$('.btn-eliminarBlog').on({
  click: function(){
    let atributoId = $(this).attr('id');
    let idd = 'id='+atributoId;
    let contenedor = $(this).parent();

    $.ajax({
      url: "../../php's/acciones/eliminar_blog.php",
      cache: false,
      type: 'POST',
      data: idd,
      success: function(){
        Swal.fire({
          title: "Blog eliminado",
          text: "",
          icon: "success",
          showConfirmButton: false,
          timer: 1000
        });
        contenedor.fadeOut(1000);
      }

    })
  }
})

$('.btn-encabezado').on({
  click:function(){
    var idImagen = $('#imagen-encabezado');
    var imagenSeleccionada = idImagen[0].files[0];
  
    if (!imagenSeleccionada) {
      Swal.fire({
        title: "Por favor, selecciona una imagen.",
        text: "",
        icon: "error",
        showConfirmButton: true
      });
      return false
    }
    var formulario = new FormData($('.formulario-encabezado')[0]);

    let titulo = $('#encabezado').val();

    if(titulo===''){
      Swal.fire({
        title: "No has llenado todos los datos requeridos",
        text: "",
        icon: "error",
        showConfirmButton: true
      });
    }else{
      formulario.append('titulo',titulo);
      
      $.ajax({
        url: "../../php's/acciones/cambiar_encabezado.php",
        data: formulario,
        type: 'POST',
        contentType: false,
        processData: false,
        success: function(){
         
          $('#encabezado').val('');
          $('#imagen-encabezado').val('')
          $('#contador_encabezado').html(0);
          $('#contador_encabezado').css({color:'black'});
          Swal.fire({
            title: "Encabezado modificado",
            text: "",
            icon: "success",
            showConfirmButton: false,
            timer: 1000
          });
          
        }
      })
    }
  }
})

$('.btn-contacto').on({
  click: function(){
    var formulario = new FormData($('.formulario-contacto')[0]);
    let titulo = $('#titulo-contacto').val();
    
    let inputFile = $('#imagen-contacto');
    let imagenSeleccionada = inputFile[0].files[0];

  if(!imagenSeleccionada){
    Swal.fire({
      title: "Selecciona una imagen para subir",
      text: "",
      icon: "info",
      showConfirmButton: false,
      timer: 1000
    });
    return false;
  }
    if(titulo===''){
      Swal.fire({
        title: "No has llenado todos los datos requeridos",
        text: "",
        icon: "error",
        showConfirmButton: true
      });
    }else{
      formulario.append('titulo',titulo)
      $.ajax({
        url: "../../php's/acciones/cambiar_contacto.php",
        data: formulario,
        type: 'POST',
        contentType: false,
        processData: false,
        success: function(){
          $('#titulo-contacto').val('');
          $('#contador_contacto').css({color:'black'})
          $('#contador_contacto').html(0);
          $('#imagen-contacto').val('')
          Swal.fire({
            title: "Sección contacto modificada",
            text: "",
            icon: "success",
            showConfirmButton: false,
            timer: 1000
          });
        }
      })
    }
  }
})

$('#boton-contacto').on({
  
  click:function(){
    
    var formulario = new FormData($('#formulario-contacto')[0]);

    var nombre = $('#nombre-contacto').val(),
        email = $('#email-contacto').val(),
        telefono = $('#telefono-contacto').val(),
        mensaje = $('#mensaje-contacto').val(),
        seleccion = $('#seleccion-contacto').val(),
        presupuesto = $('#presupuesto').val(),
        telefonoRadio = $('#telefonoCheckbox'),
        correoRadio = $('#correoCheckbox'),
        fechaContacto = $('#fecha-contacto').val(),
        horaContacto = $('#hora-contacto').val(),
        opcionContacto ='',
        codigoGenerado=generarCodigo();

        if(
          nombre==='' || email==='' || telefono==='' || mensaje==='' || seleccion==='' || presupuesto<1 || (!telefonoRadio.is(':checked') && !correoRadio.is(':checked'))){   
        Swal.fire({
          title: "No has llenado todos los campos del formulario",
          text: "",
          icon: "error",
          showConfirmButton: false,
          timer:2000
        });
        return false;
        }

      if(telefonoRadio.is(':checked')){
        if(fechaContacto==='' || horaContacto===''){
        Swal.fire({
          title: "No has llenado todos los campos del formulario",
          text: "",
          icon: "error",
          showConfirmButton: false,
          timer:2000
        });
        return false;
        }else{
          opcionContacto='Teléfono';
        }
      }else{
        opcionContacto='Correo';
      }

      formulario.append('radio', opcionContacto);
      formulario.append('nombre',nombre);
      formulario.append('email', email);
      formulario.append('telefono',telefono);
      formulario.append('mensaje', mensaje);
      formulario.append('seleccion', seleccion);
      formulario.append('presupuesto', presupuesto);
      formulario.append('fecha', fechaContacto);
      formulario.append('hora', horaContacto);
      formulario.append('codigo', codigoGenerado);
      $.ajax({
        url: "../../php's/acciones/datos_contacto.php",
        data: formulario,
        type: 'POST',
        processData: false,
        contentType: false,
        success: function(){
        $('#nombre-contacto').val('');
        $('#email-contacto').val('');
        $('#telefono-contacto').val('');
        $('#mensaje-contacto').val('');
        $('#seleccion-contacto').val('');
        $('#presupuesto').val(0);
        $('#telefonoCheckbox').prop("checked", false);
        $('#correoCheckbox').prop("checked", false);
        $('#fecha-contacto').val('');
        $('#hora-contacto').val('');
        $('#contador_nombreContacto').html(0);
        $('#contador_nombreContacto').css({color:'black'});
        $('#contador-mensajeContacto').html(0);
        $('#contador-mensajeContacto').css({color:'black'});
        opcionContacto ='';
        window.location.href="../../php's/paginas/contacto_enviado.php?codigo="+codigoGenerado;
          
        }
      });
      
  }
});

function generarCodigo() {
  let longitud=15;
  const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let codigo = '';

  for (let i = 0; i < longitud; i++) {
    const indice = Math.floor(Math.random() * caracteres.length);
    codigo += caracteres.charAt(indice);
  }

  return codigo;
}

function pagoExitoso(){
  var formulario = new FormData($('#formulario-pago')[0]);
    
  var nombre_completo = $('#nombre_completo').val(),
      fecha_nacimiento = $('#fecha_nacimiento').val(),
      correo_electronico = $('#correo_electronico').val(),
      ciudad = $('#ciudad-pago').val(),
      departamento = $('#departamento-pago').val(),
      opcionID = $('#opcion-identificacion').val(),
      identificacion = $('#identificacion-pago').val(),
      direccion = $('#direccion-pago').val(),
      detalles = $('#detalles-extra').val(),
      id_formulario = $('#id_url').val(),
      codigoUnico = generarCodigo();
      
      
      
    formulario.append('nombre', nombre_completo);
    formulario.append('nacimiento', fecha_nacimiento);
    formulario.append('correo',correo_electronico);
    formulario.append('ciudad', ciudad);
    formulario.append('departamento', departamento);
    formulario.append('opcionID', opcionID);
    formulario.append('identificacion', identificacion);
    formulario.append('direccion',direccion);
    formulario.append('detalles', detalles);
    formulario.append('id_propiedad', id_formulario);
    formulario.append('codigo',codigoUnico);
    
    $.ajax({
      url: "../../php's/acciones/datos_compra.php",
      type: 'POST',
      data: formulario,
      processData: false,
      contentType: false,
      success: function(){
        window.location.href='resumen_pago.php?codigo='+codigoUnico;
      }
  })       
}
