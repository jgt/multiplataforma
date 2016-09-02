@extends('layouts.ceprogTemplate.homeInterno')


@section('content_maestriaCienciaEducacion')

	<div class="header-sitio interno">
				
            <div class="container">				
                <div class="sixteen columns">
                	<a href="{{ route('palenqueHome') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                </div>
                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
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
                        <li><a class="outside" href="{{ route('ofertaPalenque') }}">Oferta Educativa</a></li>         
                        <li><a class="outside" href="{{ route('contactoPalenque') }}">Contáctanos</a></li>          
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
   	<div class="subtitulo carrera">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <a href="{{ route('ofertaPalenque') }}">Oferta Educativa</a> / <a href="{{ route('ofertaPalenque') }}#tab1">Posgrados</a> / <span>Maestría en Ciencias de la Educación</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Maestría en Ciencias de la Educación</h1>
                    <img src="image/fotos/mtria_educacion.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Maestría en Ciencias de la Educación, deberán haber concluido los estudios de bachillerato y de licenciatura.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la maestría en Ciencias de la Educación, de la Universidad CEPROG, será capaz de ejercer la docencia y la investigación como un proceso de desarrollo humano integral vinculando la investigación y la práctica educativa para el perfeccionamiento científico de su labor docente y podrá desarrollar investigaciones aplicadas en el campo de las ciencias de la educación proponiendo alternativas de solución a los problemas del contexto socioeducativo.</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>De los fundamentos teórico-metodológicos de la investigación para explicar la realidad educativa y social.</li>
                        <li>De las corrientes pedagógicas y filosóficas de la educación</li>
                        <li>De docencia, planeación, evaluación y desarrollo curricular.</li>
                        <li>De la elaboración de proyectos de investigación en base al contexto socio-cultural educativo.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Para la docencia, entendida como un proceso de desarrollo humano integral</li>
                        <li>Para la planeación y evaluación de los aprendizajes.</li>
                        <li>Para detectar hechos y fenómenos sociales en el contexto educativo.</li>
                        <li>Para la elaboración y desarrollo de proyectos de investigación.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Respeto y compromiso en el aspecto social y profesional.</li>
                        <li>De servicio, de aprendizaje permanente, de análisis y reflexión.</li>
                        <li>Propositiva en su desempeño.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Maestría en Ciencias de la Educación de La <span class="bold-style">Universidad CEPROG</span> tiene amplias oportunidades de desempeñarse en el área laboral del sector de la ciencia y educación; formar a los alumnos con base a los principios aprendidos.</p>
				</div>
                
                <div class="clear m-b-80"></div>
                
                 <div class="sixteen columns m-b-20">
					<h3>Plan de estudios</h3>
				</div>
                
                <div class="ten columns">
				  <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Primer semestre</h4>
                                <ul class="bullet-list">
                                     <li>Corrientes Filosóficas Educativas Contemporáneas</li>
                                    <li>Concepción de Formación Docente</li>
                                    <li>Investigación de la Práctica Docente</li>
                                    <li>Investigación Educativa I</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Teorías del Aprendizaje</li>
                                    <li>Corrientes Pedagógicas Contemporáneas</li>
                                    <li>Diseño de Proyectos de Investigación</li>
                                    <li>Investigación Educativa II</li>
                                </ul>
                            </div>
                        </div>
                        
                   </div> 
                   
                   <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Tercer semestre</h4>
                                <ul class="bullet-list">
                                    <li>Escuela, Sociedad y Cultura</li>
                                    <li>Planeación de la Enseñanza</li>
                                    <li>Psicología y Educación</li>
                                    <li>Seminario de Tesis I</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Desarrollo Curricular</li>
                                    <li>Evaluación del Aprendizaje</li>
                                    <li>Seminario de Tesis II</li>
                                </ul>
                            </div>
                        </div>
                        
                   </div>  

                   
                   <div class="row">
                   		<div class="five columns alpha">
                            <a class="button1" href="{{ route('admision') }}">Ver proceso de admisión</a>
                        </div>
                        <div class="five columns omega">
                            <a class="button1" href="{{ route('ofertaPalenque') }}">Ver todas las carreras</a>
                        </div>                        
                   </div>           
				</div>

                <div class="six columns">
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/Maestria_Educacion/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoPalenque') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>   
                    <h3 class="small-size">Otras sedes donde se imparte</h3>    
                    
                    <a href="{{ route('tuxtlaHome') }}" class="big-link">» Campus Tuxtla Gutiérrez</a>             
                    <a href="{{ route('sancristobalHome') }}" class="big-link">» Campus San Cristóbal</a>
                    <a href="{{ route('reformaHome') }}" class="big-link">» Campus Reforma</a>                                     
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