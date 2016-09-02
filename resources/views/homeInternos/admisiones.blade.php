@extends('layouts.ceprogTemplate.homeInterno')


@section('content_admisiones')

<div class="header-sitio interno">
				
            <div class="container">				
                <div class="sixteen columns">
                	<a href="{{ route('palenqueHome') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                </div>
                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
                                <li><a class="outside" href="{{ route('palenqueHome') }}">Palenque</a></li>
                                <li><a class="outside" href="{{ route('reformaHome') }}">Reforma</a></li>
                                <li><a class="outside" href="{{ route('sancristobalHome') }}">San Cristobal</a></li>
                                <li><a class="outside" href="{{ route('tuxtlaHome') }}">Tuxtla Gutiérrez</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Conócenos</a>
                        	<ul>
                                <!--<li><a class="outside" href="palenque_noticias.html">Noticias</a></li>-->
                                <li><a class="outside" href="{{ route('galeriaPalenque') }}">Galería de Fotos</a></li>
                            </ul>
                        </li>
                        <li><a class="outside" href="{{ route('admision') }}">Admisiones</a></li>   
                        <li><a class="outside" href="palenque_oferta_educativa.html">Oferta Educativa</a></li>         
                        <li><a class="outside" href="{{ route('contactoPalenque') }}">Contáctanos</a></li> 
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal admisiones">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p class="one-line">Admisiones</p>
                
                
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <span>Admisiones</span></p>
            </div>
            </div>
        </div>
        
    </div>    

	<div class="container principal">				
			<div class="sixteen columns ">
                <h3>¡Bienvenido!</h3>            
                <p class="text-titulo m-b-15">A continuación te presentamos los pasos, requisitos y papelería que necesitas para tu proceso de admisión en la Universidad CEPROG en cualquiera de nuestros <a href="servicio_tuxtla.html">programas académicos</a>. También, te invitamos a realizar el siguiente Test de Inteligencias múltiples a través del cual podremos ayudarte a descubrir tu área de formación profesional.<br> 
                Si tienes alguna duda escríbenos a <a href="mailto:contacto@uceprog.edu.mx">contacto@uceprog.edu.mx</a>.
                </p>     
        		<a class="youtube video-admin not-small" href="http://www.youtube.com/watch?v=QNBnhXXM9fs">Mira nuestro video de bienvenida</a>
                 <a class="test-admin" href="{{ route('testInteligencia') }}">Test de Inteligencias Multiples</a>                            
                            
                
            </div>
    </div>        
    
    <div id="separator7">
		<div class="bg1"></div>
		
        
        <div class="container">
            <div class="sixteen columns">
                <p class="separator">Proceso de Admisión</p>
                
                <div class="twelve columns offset-by-two">
					<ul class="tabs twoT">             
                      <li><a class="active" href="#tab1">Nuevo ingreso</a></li>
                      <li><a href="#tab2">Reinscripción</a></li>                  
                    </ul>
                </div>
                
                
                
			</div>
                        
            
            
            	<ul class="tabs-content">
                  <li class="active" id="tab1">
                  	<div class="sixteen columns">
                    	<p class="m-b-50"> Te enlistamos los pasos a seguir del Proceso de Admisión para alumnos de nuevo ingreso que deseen inscribirse en alguno de nuestros planes de estudios en la Universidad CEPROG.</p>
                    </div>
                    <div class="eight columns">
                    	<h3>Requisitos</h3>
                        <p>
                        1. Llenar solicitud en el departamento de admisiones<br>
                        2. Entrega documentos oficiales originales<br>
                        3. Obtén tu referencia de alumno<br>
                        4. Pago de inscripción y seguro estudiantil<br>
                        5. Toma de fotografía para credencial<br>
                        6. Asiste al curso de inducción
                        </p>
                    </div>
                    <div class="eight columns m-b-30 not-small">
                    	<img src="image/fotos/proceso_admin.jpg" alt="" />
                    </div>
                    <div class="sixteen columns">
                    	<h3>Documentos de admisión</h3>
                        <p>Estos son los documentos que deberás presentar para iniciar tu proceso de admisión dentro de la Universidad CEPROG en cualquiera de nuestras ofertas educativas.</p>
                        <div class="one-third column">                        	
                           <h4>Preparatoria</h4>
                           <div class="card-desc">
                           <p>
                            - Acta de Nacimiento Actualizada <br>
							- Certificado de Primaria<br>
                            - Certificado de Secundaria o constancia de Estudios<br>
                            - Carta de Buena Conducta<br>
                            - Certificado Médico<br>
                            - CURP<br>
                            - 2 Fotografías
                           </p> 
                           </div>
                        </div>                                  
                        
                        <div class="one-third column">                        	
                           <h4>Licenciaturas</h4>
                           <div class="card-desc">
                           <p>
                            - Acta de Nacimiento Actualizada<br>
                            - Certificado de Primaria<br>
                            - Certificado de Secundaria, o constancia de Estudios<br>
                            - Certificado de Bachillerato<br>
                            - Carta de Buena Conducta<br>
                            - Certificado Médico<br>
                            - CURP<br>
                            - 2 Fotografías
                           </p> 
                           </div>
                        </div>
                        
                        <div class="one-third column">                        	
                           <h4>Postgrados</h4>
                           <div class="card-desc">
                           <p>
                            - Carta de Manifiesto<br>
                            - Acta de Nacimiento<br>
                            - Certificado de Bachillerato<br>
                            - Certificado de Licenciatura<br>
                            - Constacia de Servicio Social<br>
                            - Acta de Examen Profesional<br>
                            - Título Profesional<br>
                            - Cédula Profesional<br>
                            - CURP
                           </p> 
                           </div>
                        </div>
                    </div>    
                  </li>
                  <li id="tab2">
                  	 <div class="sixteen columns">
                     	<p>
		                  Te enlistamos los pasos a seguir del Proceso de Admisión para alumnos que deseen reinscribirse en alguno de nuestros planes de estudios en la Universidad CEPROG.
                        </p>  
                     </div>
                     <div class="eight columns">
                    	<h3>Requisitos</h3>
                        <p>
                        1. Tutoría revisa tu estatus<br>
                        2. Presentar Boleta de Calificaciones<br>
                        3. Llenar La hoja de Reinscripción en tutoría <br>
                        4. Realizar pago de Reinscripción<br>
                        5. Refrendar tu credencial en finanzas (con el comprobante de reinscripción)<br>
                        6. Si tienes algún pendiente, Tutorías te indicará qué proceso seguir para Reinscribirte
                        </p>
                    </div>
                    <div class="eight columns m-b-30">
                    	<img src="image/fotos/proceso_reinscripcion.jpg" alt="" />
                    </div>
                  </li>                  
                </ul>                        	
            
                    
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