@extends('layouts.ceprogTemplate.homeInterno')



@section('content_galeriaPalenque')
	
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
                        <li><a class="outside" href="palenque_contactanos.html">Contáctanos</a></li>        
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal galeria">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p class="one-line">Galería de Fotos</p>
                
                
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <a href="{{ route('palenqueHome') }}#separator1">Conócenos</a> / <span>Galería de Fotos</span></p>
            </div>
            </div>
        </div>
        
    </div>    

	<div class="container principal">				
			<div class="sixteen columns ">
                <p class="text-titulo">Conoce nuestro campus por medio de nuestra galería de fotos: </p>                               
                
                
                
                <div id="flexslider-galeria" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="image/fotos/palenque/galeria/foto1.jpg" />                      
                      <div class="foto-text">Bibliografía disponible para todo usuario perteneciente a la institución. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto2.jpg" />
                      <div class="foto-text">Atención inmediata al solicitar los servicios de esta área, que distinguen a la institución. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto3.jpg" />
                      <div class="foto-text">Acceso a bibliografía actualizada en las diferentes áreas de formación estudiantil. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto4.jpg" />
                      <div class="foto-text">Espacio para trabajar en equipo. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto5.jpg" />
                      <div class="foto-text">Espacio para tomar convivir y compartir la hora del desayuno o la comida. Espacio rodeado de naturaleza y fresco para compartir con los amigos a la hora de la comida. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto6.jpg" />
                      <div class="foto-text">Disponibilidad de equipos actualizados para trabajar en tareas, clases o investigaciones de clase. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto7.jpg" />
                      <div class="foto-text">Equipos de computo disponibles para trabajar en investigaciones o asistir a clases coordinadas por docentes.</div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto8.jpg" />
                      <div class="foto-text">Equipos de computo a disposición de todos los alumnos y docentes. </div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto9.jpg" />
                      <div class="foto-text">Material básico clínico de enfermería para trabajar en prácticas de clase.</div>
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto10.jpg" />
                      <div class="foto-text">Espacio disponible para trabajar en prácticas de clase.</div>
                    </li>
                                        <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
                <div id="carousel-galeria" class="flexslider not-small">
                  <ul class="slides">
                    <li>
                      <img src="image/fotos/palenque/galeria/foto1_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto2_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto3_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto4_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto5_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto6_ch.jpg" />
                    </li>
                   <li>
                      <img src="image/fotos/palenque/galeria/foto7_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto8_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto9_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/palenque/galeria/foto10_ch.jpg" />
                    </li>
                    <li>
                    </li>

                    <!-- items mirrored twice, total of 12 -->
                  </ul>
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