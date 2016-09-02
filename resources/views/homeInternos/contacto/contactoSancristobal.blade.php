@extends('layouts.ceprogTemplate.homeInterno')



@section('content_contactoSancristobal')

	
	<div class="header-sitio interno">
				
            <div class="container">				
                <div class="sixteen columns">
                	<a href="{{ route('sancristobalHome') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                </div>
                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
                                <li><a class="outside" href="{{ route('palenqueHome') }}">Palenque</a></li>
                                <li><a class="outside" href="{{ route('reformaHome') }}">Reforma</a></li>
                                <li><a class="outside" href="{{ route('tuxtlaHome') }}">Tuxtla Gutiérrez</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Conócenos</a>
                        	<ul>
                                <!--<li><a class="outside" href="palenque_noticias.html">Noticias</a></li>-->
                                <li><a class="outside" href="{{ route('galeriaSancristobal') }}">Galería de Fotos</a></li>
                            </ul>
                        </li>
                        <li><a class="outside" href="{{ route('admision') }}">Admisiones</a></li>   
                        <li><a class="outside" href="San_Cristobal_oferta_educativa.html">Oferta Educativa</a></li>                  
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal contactanos">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p class="one-line">Contáctanos</p>
                
                
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <span><strong>Contáctanos</strong></span></p>
            </div>
            </div>
        </div>
        
    </div>    

	
    
    <div class="datos-contacto">
    	 <div class="container">
            <div class="sixteen columns">
		    	<h1>Universidad CEPROG - Campus San Cristobal</h1>
        	</div>
            <div class="four columns">
            	<p><span>Dirección:</span>
                Campus San Cristobal - Av. José Maria Morelos No. 33, Esq. Guillermo Prieto, San Cristóbal de Las Casas, Chiapas, C.P. 29250</p>
            </div>
            <div class="four columns">
            	<p><span>Horario:</span>
                Lunes a Viernes de 8:00 a 17:00hrs y Domingos de 8:00 a 14:00 hrs.</p>
            </div>
            <div class="four columns">
            	<p><span>Teléfonos:</span>
                01 (967) 678 7900 
                </p>
            </div>
            <div class="four columns">
            	<p><span>E-Mail:</span>
                <a href="mailto:admisiones.sancristobal@uceprog.edu.mx">admisiones.sancristobal@uceprog.edu.mx</a>
                <a href="mailto:contacto@uceprog.edu.mx">contacto@uceprog.edu.mx</a>
                </p>
            </div>
         </div>   
    </div>
    
    <div class="contacto-cont">
        <div class="container principal">
        	  
              				
             <div id="seccionForma" class="fourteen columns offset-by-one">
             
             		<div id="err-timedout" class="alert error full">¡Error! Tiempo de espera agotado. Intente más tarde</div>
					<div id="error"  class="alert error full">Lo sentimos, ocurrió un error. Por favor intente más tarde.</div>
					<div id="email-success" class="alert success full">Su comentario fue enviado correctamente. ¡Gracias!</div>
             
             		<p>Si deseas información acerca de nuestras carreras, proceso de inscripción o cualquier otro tipo de información, por favor escríbenos llenando el siguiente formulario.
                    <span class="campos-req">*Campos requeridos</span>
                    </p>
                    <form id="ajax-form" action="sancristobal.php" method="post">
                                    <div class="row">
                                        <div class="fourteen columns alpha">
                                            <input id="name" type="text" name="name" placeholder="Nombre completo*" />
                                            <div id="err-name" class="alert error">*Por favor, introduzca tu nombre completo</div>
                                            <label for="verificacion" class="verif">¡Si ves esto, no llenes el siguiente campo!</label>
                                                <input name="verificacion" class="verif" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="seven columns alpha">
                                            <input id="email" type="text" name="email" placeholder="E-mail*" />
                                            <div id="err-email" class="alert error">*Por favor, introduzca un correo electrónico</div>
                                            <div id="err-emailvld" class="alert error">¡Error! Por favor introduzca un correo electrónico válido</div>
                                        </div>
                                        <div class="seven columns omega">
                                            <input id="phone" type="text" name="phone" placeholder="Teléfono" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="fourteen columns alpha">
                                            <div class="styled-select">
                                             <select id="motivo" name="motivo">
                                                  <option value="0" selected>-- Motivo de contacto* --</option>
                                                  <option value="1">Informacion sobre licenciaturas</option>
                                             </select> 
                                             </div>
                                             <div id="err-motivo" class="alert error">*Por favor, seleccione un motivo de contacto</div>
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="fourteen columns alpha">
                                            <textarea id="message" name="message" placeholder="Escribe tu comentario...*" style="height: 98px;"></textarea>
                                             <div id="err-message" class="alert error">*Por favor, introduzca un comentario</div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="four columns offset-by-three alpha">                                            
                                            <a href="#" type="submit" id="send2" class="button"><span>Enviar</span></a>
                                        </div>
                                        <div class="four columns omega">
                                            <a href="#" id="cancelar" class="button secundario"><span>Cancelar</span></a>
                                        </div>
                                    </div>                                    
                    </form>
             </div>
             
             <div class="clear m-b-60"></div>
             
             <div class="sixteen columns nota-al-pie">
             	<h6>Buzón de sugerencias</h6>
             	<p>CEPROG pone a su disposición este espacio con el fin de impulsar la mejora continua de todos los procesos y servicios que ofrecen las distintas áreas de la universidad. En reciprocidad a su confianza, CEPROG se compromete a dar seguimiento a su inquietud de forma confidencial.</p>
                <p>Aviso: Los datos personales proporcionados serán utilizados por CEPROG para proveer un servicio personalizado. CEPROG no divulga, ni comparte con terceros los datos personales y los utiliza para dar cumplimiento a sus fines educativos, sociales, culturales, formativos y/o administrativos. Consulte nuestro aviso de privacidad.</p>
                <p>Proceso de emisión y seguimiento:<br>
1. Emisión: Para exponer una sugerencia y/o queja las formas para poder enviar sus comentarios son las siguientes: <br>
- A través del correo electrónico <a href="mailto:sugerencias@uceprog.edu.mx">sugerencias@uceprog.edu.mx</a><br>
- Con nuestro Formulario Electrónico</p>

				<p>2. Notificación de recepción: En caso de que nos proporcione algún dato de contacto, ya sea correo electrónico o teléfono, se le enviará un mensaje confirmándole la recepción de su sugerencia/queja y se procederá a enviar el mensaje al área responsable.</p>
                
                <p>3. Respuesta: Si la sugerencia/queja requiere de respuesta, esta será enviada por el mismo medio por el cual se tuvo el contacto inicial.</p>
             </div>
        </div>
   </div>         
   
   
	<div id="footer-ceprog">
		<div class="container">				
			<div class="eight columns ">
				<p><a class="textlink" target="_blank" href="https://www.pagalaescuela.santander.com.mx/pagalaescuela/jsp/inicio.jsp"><span class="pago-online">¡Haz tu pago en línea!</span></a></p>
       <p><a class="textlink" target="_blank" href="http://portaluc.com/"><span class="portal-UC">Portal UC</span></a></p>
			</div>
			<div class="eight columns right-align">
				<p>Universidad CEPROG.<br>
Todos los Derechos Reservados. 2014.</p>
				<p class="redes-sociales">
                	<a href="http://www.facebook.com/uceprog.edu.mx" target="_blank"><span class="facebook"></span></a>
                    <a href="https://twitter.com/CeprogUc" target="_blank"><span class="twitter"></span></a>
                    <a href="http://www.youtube.com/user/UCEPROG" target="_blank"><span class="youtube"></span></a>
                     <a href="https://webmailcluster.perfora.net/Webmail_Login;jsessionid=E06FCA55E8C1BC3D919F785835D3C332.TCpfix333a" target="_blank"><span class="admin"></span></a>
                </p>
                <p><a class="textlink" href="politicas-privacidad.pdf" target="_blank">Política de privacidad</a></p>
			</div>
		</div> <!-- end container -->
	</div>
	
	<div id="footer-bb">
		<div class="container">				
			<div class="sixteen columns">
				<div class="copyright">
					<p><span></span>Sitio desarrollado por UniversidadCeprog/Ing.Galvis Tellez</p>
				</div>
			</div>
			
		</div> <!-- end container -->
	</div> <!-- end contact -->

@stop