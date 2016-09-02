@extends('layouts.ceprogTemplate.homeInterno')


@section('content_galeriaSancristobal')

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
                        <li><a class="outside" href="San_Cristobal_contactanos.html">Contáctanos</a></li>        
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
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <a href="{{ route('sancristobalHome') }}#separator1">Conócenos</a> / <span>Galería de Fotos</span></p>
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
                      <img src="image/fotos/sancristobal/galeria/foto1.jpg" />                      
                      <div class="foto-text">Personal educativo y docente del campus San cristobal. </div>
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto2.jpg" />
                      <div class="foto-text">Maqueta del campus San cristobal </div>
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto3.jpg" />
                      <div class="foto-text">Maqueta de las instalaciones del campus. </div>
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto4.jpg" />
                      <div class="foto-text">Espacio recreativo para los estudiantes. </div>
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto5.jpg" />
                      <div class="foto-text">Contamos con areas tecnologicas para mejorar el servicio a los estudiantes y mejorar su aprendizaje. </div>
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto6.jpg" />
                      <div class="foto-text">Hermosos paisajes recreativos para los estudiantes. </div>
                    </li>
                    
                    
                    
                    
                                        <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
                <div id="carousel-galeria" class="flexslider not-small">
                  <ul class="slides">
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto1_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto2_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto3_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto4_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto5_ch.jpg" />
                    </li>
                    <li>
                      <img src="image/fotos/sancristobal/galeria/foto6.JPG" />
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


@stop