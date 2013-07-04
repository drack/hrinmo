<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-ES" lang="es-ES">
<head>
<title>Hr ESTUDIO DE INTERIORISMO & INMOBILIARIA</title> 
<link rel="shortcut icon" href="images/favicon.ico">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">  <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/formulario.css" />
<link rel="stylesheet" href="css/lightbox.css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/acciones.js"></script>
<script type="text/javascript" src="js/jqueryCycle.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript">
	$.fn.cycle.defaults.timeout = 6000;
	$(function() { $('.imagenes').cycle({  fx: 'fade',  speed:  'fast', timeout: 0, next:  '.next', prev: '.prev' }) });


	function cambiarInmo(){
	
		$(".imgProyectosEstudioVivienda01").delay(4000).animate({opacity:0}, 600,function(){ 
			$(".imgProyectosEstudioVivienda01 li:first").before($(".imgProyectosEstudioVivienda01 li:last"));
			$(".imgProyectosEstudioVivienda01").animate({opacity:1}, 400,function(){ });
			cambiarInmo();
		});
		}
			
		
		jQuery.jQueryRandom = 0;
jQuery.extend(jQuery.expr[":"], {
    random: function(a, i, m, r) {
        if (i == 0) {
            jQuery.jQueryRandom = Math.floor(Math.random() * r.length);
        };
        return i == jQuery.jQueryRandom;
    }
});

     $().ready(function() {  
         valorImgInmo = $("#inmobiliaria li img:random ").attr("alt");  
         $(".imgInmo"+valorImgInmo).fadeIn(800);
 
         valorImg = $("#estudio li img:random ").attr("alt");  
         $(".imgEstu"+valorImg).fadeIn(800);
     }); 
    



  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37943068-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head> 


<body>
	<div id="general">
<!-- Menu -->
		<div id="menu"> 
			<img src="images/datos.jpg" id="telefono" alt="C/ Burguete 26  Madrid, 917 507 376" title="C/ Burguete 26  Madrid, 917 507 376">
				<ul>
					<li id="btn01" class="btn">Interiorismo</li>
					<li id="btn02" class="btn">Home Staging</li>
					<li id="btn03" class="btn">Proyectos</li>
					<li id="btn04" class="btn">Contacto</li>
					<li><a class="twitter" href="https://twitter.com/HRinmo" tittle="twitter de hrinmo" target="_blank">@hrinmo</a></li>
				</ul>			
		</div>
<!-- Fin Menu -->
		
<!-- cuerpo -->
		<div id="cuerpo" >
	<!-- Home -->
			<div id="home" class="contenedorHome">
				<ul id="inmobiliaria" class="inmobiliaria imgHome">
					<li class="imgInmo"><img src="images/home/01.jpg" alt="01" class="imgInmo01" width="485" height="525" /></li>
					<li class="imgInmo"><img src="images/home/02.jpg" alt="02" class="imgInmo02" width="485" height="525" /></li>
					<li class="imgInmo"><img src="images/home/03.jpg" alt="03" class="imgInmo03" width="485" height="525" /></li>
				</ul>
			
				<ul id="estudio" class="estudio imgHome">
					<li class="imgEstu"><img src="images/home/04.jpg" alt="01" class="imgEstu01"  width="485" height="525" /></li>
					<li class="imgEstu"><img src="images/home/05.jpg" alt="02" class="imgEstu02"  width="485" height="525" /></li>
					<li class="imgEstu"><img src="images/home/06.jpg" alt="03" class="imgEstu03"  width="485" height="525" /></li>
				</ul>
			</div>
	<!-- Fin Home -->
	<!-- Seccion1 -->
			<div id="seccion01" class="contenedor">	
				<div class="textoPresentacion01">
					<p><strong>HR inmo</strong> tiene como principal premisa diseñar para mejorar la vida de las personas.</p>
					
					<p>Los nuevos avances tecnológicos, materiales de construcción y cambios de estilo de vida son referentes básicos a la hora
					de proyectar.</p>
					
					<p>Aportamos buenos principios de diseño que resisten el paso del tiempo para que cada proyecto sea único y se convierta
					en un nuevo desafío donde esforzarnos al máximo arquitectos y diseñadores.</p>
					
					<p>En nuestros proyectos de Interiorismo concebimos entornos que reflejan y refuerzan la identidad de cada vivienda.</p>
					
					<p>El diseño individualizado y la completa supervisión de la ejecución garantiza el cumplimiento de presupuestos y plazos de
					entrega determinando el éxito final del proyecto.</p>
					
					<p>Una vez escuchadas las necesidades y deseos del cliente le ofrecemos servicios integrales dando una respuesta total
					personalizada desde el proyecto de idea hasta los más mínimos detalles de la ejecución de la obra.</p>
					
					<p>Proporcionamos servicios de gestión y consultoría con el objetivo de optimizar el proyecto de edificación de forma
					integral más allá del diseño creativo y la dirección de obra, coordinando y gestionando los agentes, procesos y trámites
					implicados en cada una de las etapas.</p>
					
					<p>El cliente también es parte del proceso creativo, mantenemos una interlocución única con él.</p>
					
					<p>Damos servicio nacional e internacional.</p>
				</div>
				<div class="imgPresentacion01"><img src="images/interiorismo.jpg" width="420" height="500" /></div>			
			</div>
	<!-- FIN Seccion2 -->
	<!-- Seccion1 -->
			<div id="seccion02" class="contenedor">	
				<div class="textoPresentacion02">
					<p>Home Staging o "Puesta en Escena" es el acto de preparar una residencia privada para su venta, para
					
					hacerla más atractiva para el mayor número de potenciales clientes. Los primeros 90 segundos de la
					
					visita a la vivienda, el potencial comprador ya se ha hecho a la idea de si sigue interesado en la vivienda o
					
					no, por lo que lograr una primera buena impresión del inmueble es fundamental.
					
					Hablamos de un nuevo concepto de Venta Inmobiliaria. Algo que hasta la fecha no se está aplicando
					
					en España, y que es la solución a la difícil situación por la que pasa actualmente el mercado
					
					inmobiliario.</p>
					
					<p>Los compradores / inversores tardan 90 segundos en decidir si les gusta la propiedad o no, ¡la primera
					
					impresión es la que cuenta!</p>
					
					<p>Su casa será vendida mucho antes, lo que significa más dinero y menos quebraderos de cabeza y stress.
					
					Una encuesta de una asociación nacional de los Estados Unidos dio como resultado que cuanto más
					
					tiempo una vivienda está en el mercado, más abajo cae en la lista de precios. Las viviendas que se
					
					vendieron en las 4 primeras semanas superaron el 1% de media de su precio inicial, de 4 a 12 semanas
					
					en el mercado baja su precio en torno a un 5% de su precio inicial, de 13 a 24 semanas en el mercado
					
					hace caer su precio en un 6,4%, y estar en el mercado unas 24 semanas hace caer su precio en torno a
					
					un 10%.</p>
					
					<p>La inversión en realizar un staging a la vivienda será siempre inferior a la bajada de precio de la casa.
					
					En una encuesta en 2007 realizada a 2000 agentes inmobiliarios descubrió que realizar un staging da
					
					como media un 343% de retorno sobre la inversión!</p>
					
					
					<p>El mostrar buenas fotos de la vivienda le hará sobresalir de entre todos los competidores. De acuerdo
					
					a diversos estudios, en torno al 85 % de los compradores realizan su primera selección de vivienda de
					
					manera online, antes de decidirse a visitar la vivienda. De a los compradores una buena razón por la que
					
					conducir hasta su casa mostrando una buena selección de habitaciones debidamente presentadas y que
					
					le harán sobresalir de entre los competidores.</p>
					
					<p>Solo el 10 % de los compradores pueden visualizar el potencial de una casa. Esa es la razón por la que el
					
					Home Staging es crítico. Seguro que no quiere que las ventajas de su vivienda sean pasadas por alto en
					
					la imaginación del comprador. ¡Debe servírselo en bandeja!</p>
					</div>
				<div class="imgPresentacion01">
					<a href="images/hs/01.jpg" rel="lightbox[roadtrip]"><img src="images/hs/tblr-01.jpg"  width="420" height="139" /></a>
					<a href="images/hs/02.jpg" rel="lightbox[roadtrip]"><img src="images/hs/tblr-02.jpg"  width="420" height="158" /></a>
					<a href="images/hs/03.jpg" rel="lightbox[roadtrip]"><img src="images/hs/tblr-03.jpg"  width="420" height="156" /></a>
						<form class="contacto">
					 	    <fieldset>
								<div><label>Nombre:</label><br><input type="text" class="nombre" name="nombre" /></div>
								<div><label>Email:</label><br><input type="text" class="email" name="email" /></div>
								<div><label>Telefono:</label><br><input type="text" class="telefono" name="email" /></div>
								<div><label>Mensaje:</label><br><textarea cols="4"  class="mensaje" name="mensaje" ></textarea></div>
					 	        <div class="ultimo">
									<div class="msg"></div>
									<input type="button" id="enviar" class="boton_envio" value="Enviar Mensaje">
								</div>
					 	    </fieldset>
					 	 </form>				
				</div>			
			</div>
	<!-- FIN Seccion2 -->
	<!-- Seccion3 -->
			<div id="seccion03" class="contenedor">	
				<ul id="galeria" >
					<li class="imgGal" id="proyecto01"><img src="images/tipo1/tblr-01.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto02"><img src="images/tipo2/tblr-02.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto03"><img src="images/tipo3/tblr-03.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto04"><img src="images/tipo4/tblr-04.jpg"  width="185" height="185" /></li>
					<li class="imgGal ultima" id="proyecto05"><img src="images/tipo5/tblr-05.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto06"><img src="images/tipo6/tblr-06.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto07"><img src="images/tipo7/tblr-07.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto08"><img src="images/tipo8/tblr-08.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto09"><img src="images/tipo9/tblr-09.jpg"  width="185" height="185" /></li>
					<li class="imgGal ultima" id="proyecto10"><img src="images/tipo10/tblr-10.jpg"  width="185" height="185" /></li>
					<li class="imgGal" id="proyecto11"><img src="images/tipo11/tblr-11.jpg"  width="185" height="185" /></li>
				</ul>
			</div>
	<!-- FIN Seccion3 -->
	<!-- Seccion4 -->
			<div id="seccion04" class="contenedor">	
				<div class="datosContacto">
					<!--<iframe class="contContacto" src="mail/index.html"></iframe><br><br>-->
						<form class="contacto">
					 	    <fieldset>
								<div><label>Nombre:</label><input type="text" class="nombre" name="nombre" /></div>
								<div><label>Email:</label><input type="text" class="email" name="email" /></div>
								<div><label>Telefono:</label><input type="text" class="telefono" name="email" /></div>
								<div><label>Mensaje:</label><textarea cols="30" rows="9" class="mensaje" name="mensaje" ></textarea></div>
					 	        <div class="ultimo">
									<div class="msg"></div>
									<input type="button" id="enviar" class="boton_envio" value="Enviar Mensaje">
								</div>
					 	    </fieldset>
					 	 </form>
					 	 <span>917 507 376 - <a class="twitter" href="https://twitter.com/HRinmo" tittle="twitter de hrinmo" target="_blank">@hrinmo</a>
</span>
				</div>
				<div class="imgPresentacion01"><img src="images/contacto.jpg" width="420" height="500" /></div>			
			</div>
	<!-- FIN Seccion4 -->
	
	
	<!-- ############ -->
	<!-- ############ -->
	<!-- ############ -->
	<!-- PROYECTOS -->
			<div id="proyectos" class="contenedor">	
				<!-- ############ -->
				<!-- Proyecto Casa Ulises -->
					<div id="tipoproyecto01" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo1/01.jpg" width="485" height="525" />
							<img src="images/tipo1/02.jpg" width="485" height="525" />
							<img src="images/tipo1/03.jpg" width="485" height="525" />
							<img src="images/tipo1/04.jpg" width="485" height="525" />
							<img src="images/tipo1/05.jpg" width="485" height="525" />
							<img src="images/tipo1/06.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Emplazada en el madrileño barrio de Canillas, la Casa Ulises apuesta por un material noble
							   como la piedra en pavimentos y superficies blancas en paredes y techos.</p>
							<p>Así, paramentos horizontales y verticales contrastan a la perfección con la calidez de las
							   maderas y los acabados neutros del mobiliario.</p>
							<p>Gran aprovechamiento de la luz natural a través de grandes ventanales.</p>
						</div>
						<div class="titulo">Casa Ulises<br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Casa Ulises -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Casa M -->
					<div id="tipoproyecto02" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo2/01.jpg" width="485" height="525" />
							<img src="images/tipo2/02.jpg" width="485" height="525" />
							<img src="images/tipo2/03.jpg" width="485" height="525" />
							<img src="images/tipo2/04.jpg" width="485" height="525" />
							<img src="images/tipo2/05.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>La Casa M se compone de dos volúmenes unidos mediante un núcleo acristalado donde está ubicado el
								elemento comunicativo vertical, una escalera apoyada sobre una estructura de hierro acabada en negro
								al igual que las ventanas.</p>

								<p>Las puertas de paso de suelo a techo hacen que los espacios aumenten o disminuyan según la privacidad
									requerida.</p>
						</div>
						<div class="titulo">Casa M<br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Casa M -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Fuente del Berro -->
					<div id="tipoproyecto03" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo3/02.jpg" width="485" height="525" />
							<img src="images/tipo3/01.jpg" width="485" height="525" />
							<img src="images/tipo3/03.jpg" width="485" height="525" />
							<img src="images/tipo3/04.jpg" width="485" height="525" />
							<img src="images/tipo3/05.jpg" width="485" height="525" />
							<img src="images/tipo3/06.jpg" width="485" height="525" />
							<img src="images/tipo3/07.jpg" width="485" height="525" />
							<img src="images/tipo3/08.jpg" width="485" height="525" />
							<img src="images/tipo3/09.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Transformación integral de vivienda situada en la colonia Fuente del Berro de Madrid. <br>
								La amplitud de espacio en elementos de comunicación vertical hace que las estancias ganen luz natural.<br>
								Colores neutros y maderas oscuras están en armonia tanto en el interior como en el patio exterior.</p>
						</div>
						<div class="titulo">Fuente del Berro<br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Fuente del Berro -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Casa Prado -->
					<div id="tipoproyecto04" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo4/01.jpg" width="485" height="525" />
							<img src="images/tipo4/02.jpg" width="485" height="525" />
							<img src="images/tipo4/03.jpg" width="485" height="525" />
							<img src="images/tipo4/04.jpg" width="485" height="525" />
							<img src="images/tipo4/05.jpg" width="485" height="525" />
							<img src="images/tipo4/06.jpg" width="485" height="525" />
							<img src="images/tipo4/07.jpg" width="485" height="525" />
							<img src="images/tipo4/08.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Casa Prado, Madrid: Rehabilitación de piso en edificio histórico del barrio de Las Letras. <br>Mezcla de elementos originales restaurados y nuevas aportaciones arquitectonicas.<br> Los espacios públicos 						comunicados entre sí aportan mayor amplitud y mejor aprovechamiento de la luz natural. </p>
						</div>
						<div class="titulo">Casa Prado<br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Casa Prado -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Casa C -->
					<div id="tipoproyecto05" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo5/01.jpg" width="485" height="525" />
							<img src="images/tipo5/02.jpg" width="485" height="525" />
							<img src="images/tipo5/03.jpg" width="485" height="525" />
							<img src="images/tipo5/04.jpg" width="485" height="525" />
							<img src="images/tipo5/05.jpg" width="485" height="525" />
							<img src="images/tipo5/06.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Casa C, Madrid: Rehabilitación de vivienda ubicada en la zona centro de Madrid. La casa M, respetando su arquitectura original, combina colores neutros con las maderas y los lacados empleados en todas 						las estancias. </p>
						</div>
						<div class="titulo">Casa C<br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Casa C -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto A-tic -->
					<div id="tipoproyecto06" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo6/01.jpg" width="485" height="525" />
							<img src="images/tipo6/02.jpg" width="485" height="525" />
							<img src="images/tipo6/03.jpg" width="485" height="525" />
							<img src="images/tipo6/04.jpg" width="485" height="525" />
							<img src="images/tipo6/05.jpg" width="485" height="525" />
							<img src="images/tipo6/06.jpg" width="485" height="525" />
							<img src="images/tipo6/07.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>A-tic, Madrid: Pequeño ático ubicado en el barrio de Salamanca, se compone de dos zonas independientes: estancia publica con terraza y estancia privada. Decoración de paramentos en tonos beige; telas y 							DM lacado. </p>
						</div>
						<div class="titulo">A-tic<br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto A-tic -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Casa JJ.  -->
					<div id="tipoproyecto07" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo7/01.jpg" width="485" height="525" />
							<img src="images/tipo7/02.jpg" width="485" height="525" />
							<img src="images/tipo7/03.jpg" width="485" height="525" />
							<img src="images/tipo7/04.jpg" width="485" height="525" />
							<img src="images/tipo7/05.jpg" width="485" height="525" />
							<img src="images/tipo7/06.jpg" width="485" height="525" />
							<img src="images/tipo7/07.jpg" width="485" height="525" />
							<img src="images/tipo7/08.jpg" width="485" height="525" />
							<img src="images/tipo7/09.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Vivienda dividida en tres estancias principales donde la decoración original de paredes  y techos con molduras combinan a la perfección con la carpintería renovada. <br><br>
								Tonos beige y blancos en todas las zonas  tanto públicas como privadas.
							</p>
						</div>
						<div class="titulo">Casa JJ. <br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Casa JJ. -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Fuente del Berro II.  -->
					<div id="tipoproyecto08" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo8/01.jpg" width="485" height="525" />
							<img src="images/tipo8/02.jpg" width="485" height="525" />
							<img src="images/tipo8/03.jpg" width="485" height="525" />
							<img src="images/tipo8/04.jpg" width="485" height="525" />
							<img src="images/tipo8/05.jpg" width="485" height="525" />
							<img src="images/tipo8/06.jpg" width="485" height="525" />
							<img src="images/tipo8/07.jpg" width="485" height="525" />
							<img src="images/tipo8/08.jpg" width="485" height="525" />
							<img src="images/tipo8/09.jpg" width="485" height="525" />
							<img src="images/tipo8/10.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Transformación integral de vivienda situada en la colonia Fuente del Berro de Madrid. <br>
								El gran aprovechamiento de luz natural a través de grandes ventanales hace de esta vivienda dúplex un lugar idóneo donde vivir y trabajar.<br><br>
								Combinación de materiales originales y renovados, con gran importancia al blanco en los acabados.
							</p>
						</div>
						<div class="titulo">Fuente del Berro II. <br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Fuente del Berro II. -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Barrio de Salamanca.  -->
					<div id="tipoproyecto09" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo9/01.jpg" width="485" height="525" />
							<img src="images/tipo9/02.jpg" width="485" height="525" />
							<img src="images/tipo9/03.jpg" width="485" height="525" />
							<img src="images/tipo9/04.jpg" width="485" height="525" />
							<img src="images/tipo9/05.jpg" width="485" height="525" />
							<img src="images/tipo9/06.jpg" width="485" height="525" />
							<img src="images/tipo9/07.jpg" width="485" height="525" />
							<img src="images/tipo9/08.jpg" width="485" height="525" />
							<img src="images/tipo9/09.jpg" width="485" height="525" />
							<img src="images/tipo9/10.jpg" width="485" height="525" />
							<img src="images/tipo9/11.jpg" width="485" height="525" />
							<img src="images/tipo9/12.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Reforma de vivienda situada en un edificio emblemático del barrio de Salamanca.<br><br>
								Aprovechamiento máximo en altura con doble planta y recuperación de materiales y elementos originales. Combinación de madera de roble con tonos pasteles en paramentos verticales y estructurales.
							</p>
						</div>
						<div class="titulo">Barrio de Salamanca. <br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Barrio de Salamanca. -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto Hermosilla I. Madrid.  -->
					<div id="tipoproyecto10" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo10/01.jpg" width="485" height="525" />
							<img src="images/tipo10/02.jpg" width="485" height="525" />
							<img src="images/tipo10/03.jpg" width="485" height="525" />
							<img src="images/tipo10/04.jpg" width="485" height="525" />
							<img src="images/tipo10/05.jpg" width="485" height="525" />
							<img src="images/tipo10/06.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>
								Reforma de vivienda adaptada a las necesidades del cliente conforme al aprovechamiento máximo de espacios de almacenamiento. <br><br>
Puertas, embocaduras y hornacinas realizadas en madera de cerezo realzan las estancias y objetos decorativos.
							</p>
						</div>
						<div class="titulo">Hermosilla I. <br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto Hermosilla I. Madrid. -->
				<!-- ############ -->
				<!-- ############ -->
				<!-- Proyecto DRC. Madrid.  -->
					<div id="tipoproyecto11" class="proyecto">
						<div class="controlesRep nav">
							<div class="contlIzq prev"></div>
							<div class="contlDrch next"></div>
						</div>
						<div class="imagenes">
							<img src="images/tipo11/01.jpg" width="485" height="525" />
							<img src="images/tipo11/02.jpg" width="485" height="525" />
							<img src="images/tipo11/03.jpg" width="485" height="525" />
							<img src="images/tipo11/04.jpg" width="485" height="525" />
							<img src="images/tipo11/05.jpg" width="485" height="525" />
							<img src="images/tipo11/06.jpg" width="485" height="525" />
						</div>
						
						<div class="texto">
							<p>Rehabilitación de vivienda situada en edificio histórico. Conservación de molduras en paredes y techos originales mimetizados en blanco.<br><br>
Suelos y mobiliario en roble dan máxima calidez a los espacios en sintonía con los paramentos horizontales y verticales. </p>
						</div>
						<div class="titulo">DRC. <br><strong>Madrid</strong></div>
					</div>
				<!-- FIN Proyecto DRC. Madrid. -->
				<!-- ############ -->
				
				
			</div>
	<!-- FIN PROYECTOS -->	
	<!-- ############ -->
	<!-- ############ -->
	<!-- ############ -->	
	</div> 
</div> 
</body>
</html>