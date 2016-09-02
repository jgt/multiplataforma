@extends('layouts.ceprogTemplate.homeInterno')




@section('content_enfermeria')

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
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <a href="{{ route('ofertaPalenque') }}">Oferta Educativa</a> / <a href="{{ route('ofertaPalenque') }}#tab1">Licenciaturas</a> / <span>Licenciatura en Enfermería</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Licenciatura en Enfermería</h1>
                    <img src="image/fotos/enfermeria.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>El alumno, egresado de preparatoria, debe contar con conocimientos básicos de enfermería, los cuales le ayudarán en su proceso de formación.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El Licenciado en Enfermería, de la Universidad CEPROG, tendrá los siguientes conocimientos, habilidades y actitudes como profesionista en los siguientes ámbitos:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>La Salud, atendiendo de forma científica y humanista.</li>
                        <li>El bienestar físico, mental y social del individuo.</li>
                        <li>La familia y la sociedad.</li>
                        <li>Fomentando los valores, como principios de formación.</li>
                        <li>Conocimientos en las Ciencias de la Enfermería, Biomédicas y Sociales.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Capacidad de análisis y síntesis.</li>
                        <li>Realizar abstracciones e inferencias lógicas.</li>
                        <li>Enfrentar situaciones conflictivas.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Comportarse con una actitud continua de servicio en su entorno.</li>
                        <li>Alto sentido de responsabilidad ética y social mediante una aactitud mental positiva.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Licenciatura en Enfermería de La <span class="bold-style">Universidad CEPROG</span> tiene amplias oportunidades de laborar en un entorno lleno de amplias oportunidades en el servicio a la salud, el continuo humanismo y compromiso con la sociedad , los llevará a crear posibles soluciones a proyectos sociales respectos a la salud; ya que su preparación académica le permite trabajar en diferentes y reconocidos sectores públicos o privados, como Hospitales generales o particulares, consultorios, etc. dedicados a servicios con trato a personas, como en Salud, Educación, Social Comunitaria, Organizaciones, etc.</p>
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
                                    <li>Introducción a Enfermería</li>
                                    <li>Anatomía y Fisiología Humana I</li>
                                    <li>Bioquímica Básica</li>
                                    <li>Nutrición Básica</li>
                                    <li>Cultura y Salud</li>
                                    <li>Computación</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Bases de Enfermaría Clínica</li>
                                    <li>Anatomía y Fisiología Humana II</li>
                                    <li>Bases de Microbilogía y Parasitología</li>
                                    <li>Farmacología</li>
                                    <li>Enseñanza Clínica de Bases de Enfermería</li>
                                    <li>Procesos de Enfermería</li>
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
                                    <li>Enfermería Comunitaría</li>
                                    <li>Bases de Salud Pública</li>
                                    <li>Educación para la Salud</li>
                                    <li>Práctica de Enfermería Comunitaría</li>
                                    <li>Psicología General</li>
                                    <li>Metodología de la Investigación</li>
                                    <li>Bioestadística</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Enfermería Materno-Infantil</li>
                                    <li>Obstetricia</li>
                                    <li>Epidemiología</li>
                                    <li>Enseñanza Clínica de Enfermería Materno-Infantil</li>
                                    <li>Ética y Legislación</li>
                                    <li>Sexualidad Humana</li>
                                    <li>Teorías y Modelos de Enfermería</li>
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
                                    <li>Enfermería del Niño y del Adolescente</li>
                                    <li>Patología Pediátrica</li>
                                    <li>Enfermería Pediátrica</li>
                                    <li>Farmacoterapia</li>
                                    <li>Enseñanza Clínica de Enfermería del Niño y del Adolescente</li>
                                    <li>Psicología Evolutiva</li>
                                    <li>Didáctica y Docencia en Enfermería</li>
                                    <li>Seminario de Vida Profesional</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Enfermería del Adulto</li>
                                    <li>Enfermería Quirúrgica</li>
                                    <li>Patología del Adulto</li>
                                    <li>Enfermería en Cuidados Paleativos</li>
                                    <li>Enseñanza Clínica de Enfermería del Adulto y Quirúrgica</li>
                                    <li>Tanatología</li>
                                    <li>Investigación en Enfermería</li>
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
                                    <li>Enfermería en Salud Mental y Psiquiatría</li>
                                    <li>Patología Psiquiátrica</li>
                                    <li>Enfermería Familiar</li>
                                    <li>Práctica Comunitaria de Enfermería en Salud Mental y Psiquiatría</li>
                                    <li>Bioética</li>
                                    <li>Seminario de Tesis I</li>
                                    <li>Seminario de Liderazgo</li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Octavo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Administración de los Recursos para el Cuidado de Enfermería</li>
                                    <li>Optativa I</li>
                                    <li>Optativa II</li>
                                    <li>Enseñanza Clínica de Administración de los Recursos para el Cuidado de Enfermería</li>
                                    <li>Seminario de Realización</li>
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
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/Enfermeria/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoPalenque') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>   
                    <h3 class="small-size">Otras sedes donde se imparte</h3>    
                    
                    <a href="{{ route('tuxtlaHome') }}" class="big-link">» Campus Tuxtla Gutiérrez</a>                                                        
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