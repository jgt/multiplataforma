@extends('layouts.ceprogTemplate.homeInterno')




@section('content_ingenieriaTelematica')

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
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <a href="{{ route('ofertaPalenque') }}">Oferta Educativa</a> / <a href="{{ route('ofertaPalenque') }}#tab1">Licenciaturas</a> / <span>Ingeniería en Telemática</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Ingeniería en Telemática</h1>
                    <img src="image/fotos/ing_telematica.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Ingeniería en Telemática, deberán haber concluido los estudios de bachillerato. Deberán tener conocimientos y bases matematicas para saber manejar los procesos matematicos implementados en el estudio de las estructuras de las computadoras, redes y sistemas informáticos.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la Ingeniería en Telemática tendrá conocimientos, habilidades y aptitudes en:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Manejar y controlar tecnologías de redes.</li>
                        <li>En programación estructurada.</li>
                        <li>Enfoque a los sistemas de información.</li>  
                        <li>Manejo de Sistemas Operativos.</li>  
                        <li>Administración de Bases de Datos.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Analizar problemas y proponer soluciones integrales, haciendo uso de recursos tecnológicos.</li>
                        <li>Proponer nuevas alternativas en la transmisión y proceso de señales digitales, de acuerdo a las necesidades de los sistemas de información y su entorno.</li>
                        <li>Desarrollar proyectos de diseño y gestión de redes.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Capacidad para trabajar en equipo con responsabilidad y valores éticos.</li>
                        <li>Comportarse con una actitud continua de servicio en su entorno.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Licenciatura en Telemática de La <span class="bold-style">Universidad CEPROG</span> tendrá un gran campo de trabajo, tanto en el sector público como en el privado; ya que en la actualidad, el desarrollo de las empresas, tiene como base las tecnologías informáticas, partiendo de lo importante que es hoy en día contar con sistemas de informaticos que administren sus grandes cantidades de datos, asi como la comunicación entre las mismas a traves de las redes.</p>
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
                                    <li>Expresión Oral y Escrita</li>
                                    <li>Técnicas de Investigación</li>
                                    <li>Desarrollo de La Creatividad</li>
                                    <li>Nivelación Matemática</li>
                                    <li>Introducción a la Telemática</li>
                                    <li>Análisis y Diseño de Algoritmos</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Química</li>
                                    <li>Contabilidad</li>
                                    <li>Calculo Diferencial</li>
                                    <li>Probabilidad y Estadística</li>
                                    <li>Física</li>
                                    <li>Programación Básica</li>
                                    <li>Seminario de Vida Sana</li>
                                </ul>
                            </div>
                        </div>
                        
                   </div> 
                   
                   <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Tercer semestre</h4>
                                <ul class="bullet-list">
                                    <li>Calculo Integral</li>
                                    <li>Métodos Númericos</li>
                                    <li>Teoría Electromagnética</li>
                                    <li>Principios de Electrónica</li>
                                    <li>Teoría de la Información</li>
                                    <li>Estructura de Datos</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Derecho Informático</li>
                                    <li>Ecuaciones Diferenciales</li>
                                    <li>Sistemas Digitales</li>
                                    <li>Transmisión de Datos</li>
                                    <li>Ondas Guiadas</li>
                                    <li>Programación Avanzada</li>
                                    <li>Seminario de Noviazgo y Matrimonio</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                   </div>  
                    <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Quinto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Desarrollo de Emprendedores</li>
                                    <li>Economía y Finanzas</li>
                                    <li>Investigación de Operaciones</li>
                                    <li>Arquitectura de Computadoras I</li>
                                    <li>Telemática I</li>
                                    <li>Base de Datos</li>
                                    <li>Seminario de Vida Profesional</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Optativa I</li>
                                    <li>Optativa II</li>
                                    <li>Telemática II</li>
                                    <li>Microondas, Satélites y Antenas</li>
                                    <li>Telefonía y Conmutación</li>
                                    <li>Análisis de Sistemas de Información</li>
                                    <li>Seminario de Relaciones Humanas</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                   </div>
                   
                    <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Séptimo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Tesis I</li>
                                    <li>Administración</li>
                                    <li>Telemática III</li>
                                    <li>Sistemas Operativos I</li>
                                    <li>Diseño de Sistemas de Información</li>
                                    <li>Optativa III</li>
                                    <li>Seminario de Liderazgo</li>
                                    
                                </ul>
                            </div>
                        </div>

                       <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Octavo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Tesis II</li>
                                    <li>Administración de La Función Informática</li>
                                    <li>Redes Inalámbricas</li>
                                    <li>Seguridad en Redes</li>
                                    <li>Optativa IV</li>
                                    <li>Optativa V</li>
                                    <li>Seminario de Realización</li>
                                    
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
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/IngenieriaTelematica/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoPalenque') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>                                        
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