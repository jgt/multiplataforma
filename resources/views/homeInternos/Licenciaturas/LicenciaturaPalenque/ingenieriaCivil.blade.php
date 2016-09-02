@extends('layouts.ceprogTemplate.homeInterno')



@section('content_ingenieriaCivil')
	
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
                                <li><a class="outside" href="{{ route('ofertaPalenque') }}">Galería de Fotos</a></li>
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
	        	<p><a href="{{ route('ofertaPalenque') }}">Inicio</a> / <a href="{{ route('ofertaPalenque') }}">Oferta Educativa</a> / <a href="{{ route('ofertaPalenque') }}#tab1">Licenciaturas</a> / <span>Licenciatura en Ingeniería Civil</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Licenciatura en Ingeniería Civil</h1>
                    <img src="image/fotos/lic_adminempresas.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar Ingeniería Civil, deberán de haber concluido los estudios de bachillerato.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la Ingeniería Civil tendrá conocimiento, habilidades y aptitudes en: </p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Organismo de Gobierno Federal, Estatal y municipal.</li>
                        <li>Empresas y Organizaciones Privadas</li>
                        <li>Instituciones Educativas.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Desarrollar proyectos estructurales, carreteras, e hidráulicos, que resulten funcionales y económicos.</li>
                        <li>Realizar Construciones de edificios, carreteras, puentes, sistemas hidráulicos y de equipamiento.</li>
                        <li>Realizar investigaciones sobre temas específicos que aporten nuevos conocimientos a los ya existentes en cualquiera de sus áreas.</li>
                        <li>Diseñar nuevas tecnología de diseño y construcción.</li>
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
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Licenciatura en Ingeniería Civil de La <span class="bold-style">Universidad CEPROG</span> tiene amplias oportunidades de desempeñarse en el área de construcción de sistemas, carreteras y otras cosas necesarias para la tecnología moderna.</p>
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
                                    <li>Química</li>
                                    <li>Geometría Analítica</li>
                                    <li>Matemáticas I</li>
                                    <li>Física I</li>
                                    <li>Computación I</li>
                                    <li>Dibujo I</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Matemáticas II</li>
                                    <li>Física II</li>
                                    <li>Computación II</li>
                                    <li>Dibujo II</li>
                                    <li>Economía</li>
                                    <li>Topografía I</li>
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
                                    <li>Algebra Lineal</li>
                                    <li>Matemáticas III</li>
                                    <li>Computación III</li>
                                    <li>Dibujo III</li>
                                    <li>Mecánica del Medio Continuo</li>
                                    <li>Topografía II</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Probabilidad y Estadística</li>
                                    <li>Matemáticas IV</li>
                                    <li>Contabilidad General</li>
                                    <li>Geología</li>
                                    <li>Construcción I</li>
                                    <li>Resistencia de Materiales</li>
                                    <li>Estructuras Isostáticas</li>
                                    <li>Seminario de Vida Prof.</li>
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
                                    <li>Métodos Numéricos</li>
                                    <li>Mecánicas de Suelos I</li>
                                    <li>Ingeniería en Sistemas I</li>
                                    <li>Construcción II</li>
                                    <li>Mecánica de Mat. I</li>
                                    <li>Hidráulica I</li>
                                    <li>Instalaciones</li>
                                    <li>Seminario de Vida Prof.</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Planeación</li>
                                    <li>Mecánico de Suelos II</li>
                                    <li>Ingeniería en Sistemas II</li>
                                    <li>Construcción III</li>
                                    <li>Mecánica de Materiales II</li>
                                    <li>Abastecimiento de Agua Potable</li>
                                    <li>Hidráulica II</li>
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
                                    <li>Sociología de México</li>
                                    <li>Cimentaciones</li>
                                    <li>Construcción IV</li>
                                    <li>Análisis Estructural</li>
                                    <li>Obras Hidráulicas</li>
                                    <li>Hidrología</li>
                                    <li>Sistema de Alcantarillado</li>
                                    <li>Seminario de Liderazgo</li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Octavo Semestre</h4>
                                <ul class="bullet-list">
                                    <li>Diseño Asistido por Computadora</li>
                                    <li>Seminario de Tesis I</li>
                                    <li>Pavimentos Diseño Estructural</li>
                                    <li>Estructuras de Concreto</li>
                                    <li>Presas de Almacenamiento y Derivación</li>
                                    <li>Ingeniería Ecológica</li>
                                    <li>Carreteras</li>
                                    <li>Seminario de Liderazgo</li>
                                    
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
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/IngenieriaCivil/triptico.html">Ver tríptico de la carrera</a>                    
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