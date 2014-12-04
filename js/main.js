$(document).ready(function(){
    
	$('form').submit(function(e)
    {
		e.preventDefault();
		$.ajax(
        {
			url:'process.php',
			type: 'post',
			dataType:'json',
            timeout: 4000,
            data: 
            {
                accion: 'login',
                username : $("#username").val(),
                pass: $("#pass").val()
            },
			beforeSend: function()
            {
				$('.fa').css('display','inline');
			}
		})
		.success(function(data)
        {//Si realiza la conexion exitosa
            if(data.resultado == true)
            {
               $('span').html("Correcto");
                //window.location = 'main.html';
                $("#contenedor").load('main.html');

                $( "#contenedor" ).load( "main.html", function() {
                  $("#nombre_usuario").html(data.nombre_usuario);
                    if(data.nivel == 1)
                    {
                        $("#nombre_usuario").html($("#username").val());
                    }        
                });                  
            }
            else
            {
               $('span').html(data.mensaje); 
            }
            $('fa').hide();
		})
		.error(function(x, t, m)
        {//si no realiza una conexion exitosa
			alert("error al conectar con el servidor");
		})
	})

})