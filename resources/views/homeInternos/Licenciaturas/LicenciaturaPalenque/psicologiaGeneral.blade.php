@extends('layouts.ceprogTemplate.homeInterno')


@section('content_psicologiaGeneral')
	

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
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <a href="{{ route('ofertaPalenque') }}">Oferta Educativa</a> / <a href="{{ route('ofertaPalenque') }}#tab1">Licenciaturas</a> / <span>Licenciatura en Psicología General</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Licenciatura en Psicología General</h1>
                    <img src="image/fotos/psicologia.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                   <p>Los aspirantes a la Licenciatura en Psicología General deberá tener la disposición de aprender a atender y evaluar los problemas en el ser humano de caracter social, educativo y clínico </p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la licenciatura  en Psicología General del centro de estudios profesionales del grijalva, estara capacitado para desempeñarse como profesionista en los siguientes ámbito:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Conocimientos teóricos en todos los ámbitos de la Psicología partiendo de la infantil hasta el adulto mayor.</li>
                        <li>Conocer las diferencias teóricas que marcan el desarrollo humano del individuo, asi como la estructura biología que lo constituye.</li>
                        <li>Conocimientos psicosociales que acontesen en la república mexicana.</li>
                        <li>Conocimientos de los diferentes métodos  de investigación y la aplicación en estos en sus diferentes campos de acción.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Diseñar proyectos  de investigación educativa, social, organizacional.</li>
                        <li>Realizar propuestas para la intervención en procesos familiares.</li>
                        <li>Aplicación e interpretación de técnica de intervención pedagógica.</li>
                        <li>Atención  Especializada a personas con capacidades diferentes.</li>
                        <li>Hablar en publico sobre temas de su área formativa.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Respeto y compromiso en el aspecto social, profesional y personal, de servicio</li>
                        <li>Aprendizaje permanente</li>
                        <li>Responsabilidad</li>
                        <li>Análisis y reflexión y propositiva en su desempeño</li>
                        <li>Propositiva en su desempeño.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                   <p>El egresado de la Licenciatura en Psicología General de La <span class="bold-style">Universidad CEPROG</span> podrá desempeñarse profesionalmente, en varios campos de trabajo partiendo de la Psicología infantil hasta llegar a la de adulto mayor, tratando de conocer y abarcar las teorías que marcan el desarrollo humano del individuo.</p>
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
                                    <li>Seminario de Superación Personal</li>
                                    <li>Comunicación Oral  y Escrita I</li>
                                    <li>Tecnologías de Información y la Comunicación I</li>
                                    <li>Bases Neuroendocrinas de la Conducta</li>
                                    <li>Epistemología</li>
                                    <li>Desarrollo Psicológico Infantil</li>
                                    <li>Procesos Psicológicos Básicos I</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Vida Sana</li>
                                    <li>Tecnologías de la Información y la Comunicación II</li>
                                    <li>Psico-fisiología</li>
                                    <li>Introducción a la Psicología Científica</li>
                                    <li>Desarrollo Psicológico de la Adolescencia</li>
                                    <li>Procesos Básicos Psicológicos II</li>

                                </ul>
                            </div>
                        </div>
                        
                   </div> 
                   
                   <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Tercer semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Des. Personal</li>
                                    <li>Problemas Socioeconómicos</li>
                                    <li>Estadística Descriptiva</li>
                                    <li>Sexualidad Humana</li>
                                    <li>Teorías de La Personalidad</li>
                                    <li>Técnicas de La Entrevista</li>
                                    <li>Psicología Educativa</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Noviazgo y Matrimonio</li>
                                    <li>Psicología Ambiental</li>
                                    <li>Estadística Inferencial</li>
                                    <li>Diseño de Programas Preventivos</li>
                                    <li>Psicología Dinámica</li>
                                    <li>Psicometría</li>
                                    <li>Orientación Educativa</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                   </div>  
                    <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Quinto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Vida Profesional</li>
                                    <li>Metodología de la Inv.</li>
                                    <li>Psicopatología Infantil</li>
                                    <li>Modificación de la Conducta</li>
                                    <li>Pruebas psicológicas</li>
                                    <li>Electiva</li>
                                    <li>Capacidades Diferentes</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Relaciones Humanas</li>
                                    <li>Elaboración de Proyectos de Investigación</li>
                                    <li>Psicopatología y Diagnostico de la Personalidad</li>
                                    <li>Terapia de La Conducta</li>
                                    <li>Pruebas Proyectivas</li>
                                    <li>Electiva</li>
                                    <li>Problemas de Aprendizaje</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                   </div>
                   
                    <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Séptimo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Seminario de Liderazgo</li>
                                    <li>Taller de Investigación</li>
                                    <li>Clasificación y Diagnóstico de la Psicosis</li>
                                    <li>Integración de Pruebas Psicológicas</li>
                                    <li>Evaluación Psicopedagógica</li>
                                    <li>Técnicas y Supervisión de Intervención Individual y Familiar</li>
                                    <li>Técnicas y Supervisión de Intervención en el Adulto Mayor</li>
                                    
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
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/PsicologiaGeneral/triptico.html">Ver tríptico de la carrera</a>                    
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