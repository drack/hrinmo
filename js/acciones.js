$(document).ready(function(){
		
		function siguiente(){
			$(".imagenes li").next($(".imagenes li:last"));
			$(".imagenes").animate({opacity:1}, 400,function(){ });		
		}
		
		function anterior(){
			$(".imagenes li:first").prev($(".imagenes li:last"));
			$(".imagenes").animate({opacity:1}, 400,function(){ });
		}
		
		
		$(".contlIzq").click(function(){  anterior(); });
		$(".contlDrch").click(function(){   siguiente();  });
		
		
		$("#home").click(function(){
			$("#home").fadeOut(100);
			$("#menu ul li").fadeIn(100);
			$("#btn01").css('fontWeight','bold');
			$("#seccion01").fadeIn(300);
			$("#proyectos, #proyectos .proyecto").fadeOut(300);
		});		
		
		
		$(".btn").click(function(){
			var valorBtn = $(this).attr('id');
			$("#menu ul li").css('fontWeight','normal');
			$(this).css('fontWeight','bold');
			$(".contenedor").fadeOut(100);
			$(".contenedor").css('display', 'none');
			
			switch(valorBtn){
				case 'btn01':		
					$("#seccion01").fadeIn(300);
				break;
				case 'btn02':		
					$("#seccion02").fadeIn(300);
				break;			
				case 'btn03':		
					$("#seccion03").fadeIn(300);
					$(".proyecto .imagenes img").css({'display':'none', 'opacity':'0','z-index':'0'});
				break;	
				case 'btn04':		
					$("#seccion04").fadeIn(300);
				break;					
			}
		});
		
				
		$("#galeria li.imgGal").click(function(){
			$(".contenedor").fadeOut(100);
			$(".contenedor").css('display', 'none');
			$("#proyectos").fadeIn(100);

			var valorBtn = $(this).attr('id');
			var valproyecto = "#tipo"+valorBtn;
			
			$("#proyectos div.proyecto").fadeOut(100);
			$(valproyecto).fadeIn(100);
			$(valproyecto+" .imagenes img:first").css({'z-index':'1','display':'block', 'opacity':'1'});
	
			});
			
			
//////////////////
///FORMULARIO			
//////////////////
	$("#enviar").click(function() {
		
		var nombre = $(".nombre").val();
			email = $(".email").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			telefono = $(".telefono").val();
			mensaje = $(".mensaje").val();
		
		if (nombre == "") {
		    $(".nombre").focus();
		    return false;
		}else if(email == "" || !validacion_email.test(email)){
		    $(".email").focus();	
		    return false;
		}else if(telefono == ""){
		    $(".telefono").focus();
		    return false;
		}else if(mensaje == ""){
		    $(".mensaje").focus();
		    return false;
		}else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'nombre='+ nombre + 
						'&email=' + email + 
						'&telefono=' + telefono + 
						'&mensaje=' + mensaje;
			$.ajax({
	    		type: "POST",
	    		url: "/enviar_mail.php",
	    		data: datos,
	    		success: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '120px' }, 300);	
	    		},
				error: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '120px' }, 300);					
				}
	   		});
	 		return false;	
		}
	});
			
		

});