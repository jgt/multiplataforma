@extends('layouts.ceprogTemplate.homeInterno')



@section('content_sancristobalHome')

<div id="flexslider-principal" class="flexslider">
				
                <div class="principal-background"></div>
    
                 <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
                                <li><a class="outside"  href="{{ route('reformaHome') }}">Reforma</a></li>
                                <li><a class="outside"  href="{{ route('palenqueHome') }}">Palenque</a></li>
                                <li><a class="outside"  href="{{ route('tuxtlaHome') }}">Tuxtla Gutiérrez</a></li>
                            </ul>
                        </li>
                        <li><a href="#separator1">Conócenos</a></li>
                         <li><a href="#proc-admision">Admisiones</a></li>   
                        <li><a href="#oferta">Oferta Educativa</a></li>         
                        <li><a href="#galeria-de-fotos">Galería de Fotos</a></li>   
                        <li><a class="outside" href="{{ route('contactoSancristobal') }}">Contáctanos</a></li>          
                    </ul>
                </nav>


    
    
    				<ul class="slides">
						<li><img src="image/banner_sancristobal/banner_sancristobal1.JPG" alt="" /></li>
                        <li><img src="image/banner_sancristobal/banner_sancristobal2.JPG" alt="" /></li>
						<li><img src="image/banner_sancristobal/banner_sancristobal3.JPG" alt="" /></li>
                        <li><img src="image/banner_sancristobal/banner_sancristobal4.jpg" alt="" /></li>					
					</ul>
                    <div class="slider-content"><img src="image/mensaje_rector/logos/ceprog_logo_home_sc.png" alt="" />
                    </div>
                    <div class="inner-button not-for-tablet"><a href="{{ route('ceprog') }}" class="button2">Home</a></div>
                    <div class="bg-darkerhome"></div>
                   <!-- <div class="news-barhome not-small">
                    	<div class="container">            
							<div class="three columns">                    
                                <p>Últimas Noticias</p>
                            </div>
                            <div class="thirteen columns">                    
                                <ul id="webticker">
                                   <li>Curso de Plan de Contingencia por Protección <Civil class=""></Civil><a href="palenque_noticias.html#noticia1">Ver más.</a> |</li> 
                                    <li>Conferencia sobre “Intervención del psicólogo en los tiempos modernos.<a href="palenque_noticias.html#noticia2">Ver más.</a> |</li>
                                    <li>Ceremonia de Graduación.<a href="palenque_noticias.html#noticia3">Ver más.</a> |</li>
                                     <li>Décima ceremonia de Graduación Campus Tuxtla.<a href="palenque_noticias.html#noticia4">Ver más.</a> |</li>
                                     <li>6ª. Ceremonia de Graduación Campus San Cristóbal.<a href="palenque_noticias.html#noticia5">Ver más.</a> |</li>
                                      <li>Gran Sorteo por Reinscripción.<a href="palenque_noticias.html#noticia6">Ver más.</a> |</li>
                                     
                                </ul>                    
                            </div>
                        </div>        
                    </div>-->
    </div><!-- end flexslider -->



	
	<div id="work" class="m-b-40">
		<div class="container">
            
			<div id="campus-San_Cristobal" class="sixteen columns">
				<h2>Campus San Cristóbal</h2>
			</div> <!-- end sixteen columns -->
			
			<div class="sixteen columns">
				<p class="centered">Somos una institución que no olvidando la propia filosofía institucional, brinda a la sociedad que nos visita atención de calidad, y a nuestra comunidad estudiantil alta calidad en el servicio educativo a nivel superior con un enfoque de enseñanza basado en valores, y comprometidos a formar profesionistas con calidad ética y moral. </p>
			</div>
			
			<div class="clear m-b-30"></div>
			
            <div id="galeria-de-fotos" class="sixteen columns">
				<h3>Galería de fotos</h3>
			</div>
            
			<div class="sixteen columns">
				<div id="flexslider-fotos" class="flexslider">
					<ul class="slides">
						<li><img src="image/fotos/sancristobal/foto1.jpg" alt="" /></li>
						<li><img src="image/fotos/sancristobal/foto2.jpg" alt="" /></li>
						<li><img src="image/fotos/sancristobal/foto3.jpg" alt="" /></li>
						<li><img src="image/fotos/sancristobal/foto4.jpg" alt="" /></li>
						<li><img src="image/fotos/sancristobal/foto5.jpg" alt="" /></li>
						<li><img src="image/fotos/sancristobal/foto6.jpg" alt="" /></li>
					</ul>
				</div><!-- end flexslider -->
                <a href="{{ route('galeriaSancristobal') }}" class="textlink m-l-20">» Ver más fotos</a>
			</div> <!-- end sixteen columns -->
			
           <div class="clear m-b-50"></div>
			
            <div id="proc-admision" class="sixteen columns">
				<h3>Proceso de Admisión</h3>
			</div>
            
            <div class="sixteen columns">
				<p>Elige la opción educativa que deseas e inicia tu formación profesional de acuerdo al objetivo de tus metas, y decide en qué periodo escolar quieres inscribirte. La decisión la tomas tú, nosotros te ayudamos a realizar tu proceso de formación profesional. </p>
                
               
			</div>
            
            <div class="sixteen columns centered">
				
                <a href="{{ route('admision') }}" class="button1">Ver proceso de admisión</a>
			</div>
			
		</div> <!-- end container -->
	</div> <!-- work -->
	
	
	<div id="separator1">
		<div class="bg2"></div>
        <div class="container">
            <div class="sixteen columns">
                <p class="separator">Conócenos</p>
                <p class="separator-text">Visítanos, y conoce nuestro campus, nuestro ambiente institucional y quédate a formar parte de las generaciones de profesionistas con valores y espíritu humanista.</p>
                <a href="{{ route('mision') }}" class="button2 darkback">Ver más</a>
            </div>           
        </div>
	</div>
    
    <div class="clear"></div>
	
    <div id="oferta" class="container m-b-50">
	
  
    
    
    	    <div class="sixteen columns">
				<h2>Oferta Educativa</h2>
			</div> <!-- end sixteen columns -->
			
			<div class="sixteen columns">
				<p class="centered">Elije una de nuestras Licenciaturas o Posgrados y forma parte de nuestra comunidad. Todos nuestros planes de estudio están creados para formar de ti un excelente profesionista con conocimientos y habilidades de calidad en tu campo laboral, y en tu crecimiento personal.
                </p>
			</div>
			
     <div class="clear"></div>
     
     <div class="clear"></div>
            
            <div class="portfolioContainer m-b-100">
 				<!--
                <div class="web">
                    <div class="one-third column">
                        <div class="image">
                        <a href="#">
                            <img src="images/fotos/oferta_preparatoria.jpg" class="scale-with-grid" alt="Preparatoria" />
                            <div class="nohovertext light"><p>Preparatoria</p></div>
                            <div class="hoverimage">
                                <div class="overlay-img"></div>
                                <h4>Preparatoria</h4>
                                <p>Preparatoria CEPROG es un buen comienzo para tu preparación profesional.</p>
                            </div> 
                        </a>    
                        </div>                     
                       
                    </div> 
                </div>
                -->
                <div class="web">
                    <div class="one-third column">
                        <div class="image">
                        <a href="{{ route('ofertaSancristobal') }}">
                            <img src="image/fotos/oferta_licenciatura.jpg" class="scale-with-grid" alt="Licenciatura" />
                            <div class="nohovertext medium"><p>Licenciaturas</p></div>
                            <div class="hoverimage">
                                <div class="overlay-img"></div>
                                <h4>Licenciaturas</h4>
                                <p>Una de nuestras opciones puede ser el perfil profesional que estás buscando.</p>
                            </div> <!-- end hoverimage -->
                        </a>  
                        </div> <!-- end image -->
                        
                        
                    </div> <!-- end one-third column -->
                </div>
             
                <div class="web">
                    <div class="one-third column">
                        <div class="image">
                        	<a href="{{ route('ofertaSancristobal') }}#tab2">
                            <img src="image/fotos/oferta_postgrado.jpg" class="scale-with-grid" alt="Postgrado" />
                            <div class="nohovertext"><p>Posgrados</p></div>
                            <div class="hoverimage">
                                <div class="overlay-img"></div>
                                <h4>Posgrados</h4>
                                <p>Continúa desarrollando tus habilidades con alguna de nuestras opciones de posgrado.</p>
                            </div> <!-- end hoverimage -->
                      	  </a>  
                        </div> <!-- end image -->
                      
                    </div> <!-- end one-third column -->
                </div>
             
                
              
             
            </div> <!-- end portfolioContainer -->
     
	</div>    
	
	
	
	<div id="separator2" class="smallS">
		<div class="bg3"></div>
		
        
        <div class="container">
            <div class="sixteen columns">
                <p class="separator">Servicios</p>
			</div>
            <div class="eight columns">
            	<img src="image/fotos/servicios_campus/servicios_sancristobal.jpg"  alt="Servicios"/>
            </div>
            <div class="eight columns">
                <p class="separator-text small">Brindar un buen trato, con calidad y cortesía es nuestra prioridad en Campus San Cristóbal, para ello actualmente contamos con instalaciones propias, modernas y vanguardistas que brindan mejor aprovechamiento de clases y facilitan la adquisición de conocimientos.<br>
El Campus, brinda a alumnos y visitantes, los servicios de: <br>
» Cafetería <br>
» Cancha Deportiva <br>
» Biblioteca Escolar <br>
» Laboratorio de Computo <br>
» Áreas verdes
				</p>
                <a href="{{ route('servicioSancristobal') }}" class="button2 darkback">Ver más</a>
            </div>           
        </div>
        
	</div>
	
	
	<div id="footer-ceprog">
		<div class="container">				
			<div class="eight columns ">
				<p><a class="textlink" target="_blank" href="https://www.pagalaescuela.santander.com.mx/pagalaescuela/jsp/inicio.jsp"><span class="pago-online">¡Haz tu pago en línea!</span></a></p>
               <p><a class="textlink" target="_blank" href="http://portaluc.com/"><span class="portal-UC">Portal UC</span></a></p></p>
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