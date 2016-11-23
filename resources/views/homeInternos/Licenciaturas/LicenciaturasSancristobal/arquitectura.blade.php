@extends('layouts.ceprogTemplate.homeInterno')





@section('content_arquitecturaSancristobal')


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
                                <!--<li><a class="outside" href="San_Cristobal_noticias.html">Noticias</a></li>-->
                                <li><a class="outside" href="{{ route('galeriaSancristobal') }}">Galería de Fotos</a></li>
                            </ul>
                        </li>
                        <li><a class="outside" href="{{ route('admision') }}">Admisiones</a></li>   
                        <li><a class="outside" href="{{ route('ofertaSancristobal') }}">Oferta Educativa</a></li>         
                        <li><a class="outside" href="{{ route('contactoSancristobal') }}">Contáctanos</a></li>          
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
   	<div class="subtitulo carrera">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <a href="{{ route('ofertaSancristobal') }}">Oferta Educativa</a> / <a href="{{ route('sancristobalHome') }}#tab1">Licenciaturas</a> / <span>Licenciatura de Arquitectura</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Licenciatura en Arquitectura</h1>
                    <img src="image/fotos/sancristobal/arquitectura.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Licenciatura en Arquitectura deberán haber concluido los estudios de bachillerato. Deberán tener la disposición para diseñar y construir; gusto por la observación, sensibilidad social, cultural e histórica, interés por mejorar el entorno; curiosidad por las raíces de las ciudades y culturas, y curiosidad por el uso de la tecnología.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la Licenciatura en Arquitectura, de la Universidad CEPROG estará capacitado para desempeñar actividades profesionales, tales como:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>De teorías , análisis y elementos de la Arquitectura</li>
                        <li>De los precedentes históricos y culturales del entorno construido.</li>
                        <li>De diseño de arquitectura sustentable.</li>
                        <li>De diseño computacional, urbano y paisaje sustentable.</li>
                        <li>De roles principales del arquitecto en contextos nacionales e internacionales.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>En la creatividad y composición de formas y figuras arquitectónicas</li>
                        <li>En expresión y comunicación visual y descriptiva de sus ideas y propuestas, en la arquitectura actual.</li>
                        <li>En la búsqueda de información e investigación.</li>
                        <li>En el análisis, síntesis e interpretación de información.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Ética en su desempeño profesional.</li>
                        <li>Servicio a la comunidad y responsabilidad social.</li>
                        <li>Pensamiento y juicio crítico.</li>
                        <li>Creatividad e independencia.</li>
                        <li>Superación y constante desarrollo.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la carrera de Arquitectura en la <span class="bold-style">Universidad CEPROG</span>  tiene amplias oportunidades en el mercado laboral, ya que su preparación académica le permite trabajar en reconocidas empresas del ramo de la Construcción, tanto en las empresas de gobierno como las del sector privado. Así mismo, podrá desempeñarse de manera independiente al establecer su propio gabinete, interviniendo en áreas de diseño arquitectónico y urbano sustentables, asesorías, supervisión de obras, administración de proyectos y ejecución de edificaciones de cualquier magnitud, tales como proyectos residenciales, comerciales, de recreación y culturales.</p>
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
                                    <li>Metodología de la Investigación</li>
                                    <li>Historia y Orígenes de la Arquitectura</li>
                                    <li>Teoría de la Arquitectura Estática</li>
                                    <li>Fundamentos de Diseño y Dibujo Arquitectónico</li>
                                    <li>Metodología del Proyecto Arquitectónico</li>
                                    <li>Seminario de Superación Personal</li>
                                    <li>Taller de geometría Descriptiva I</li>
                                    <li>El medio ambiente y la ciudad</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Estadística I</li>
                                    <li>Arquitectura Clásica y Medieval</li>
                                    <li>Materiales de Construcción</li>
                                    <li>Elementos Geométricos y Perspectiva</li>
                                    <li>Taller de Diseño Integral I</li>
                                    <li>Taller de Proyecto Arquitectónico I</li>
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
                                    <li>Estadística II</li>
                                    <li>Teoría de la arquitectura II</li>
                                    <li>Arquitectura Moderna y Contemporánea</li>
                                    <li>Procedimientos Constructivos Básicos</li>
                                    <li>Geometría Descriptiva</li>
                                    <li>Taller de Diseño Integral II</li>
                                    <li>Taller de Proyecto Arquitectónico II</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Historia de la Arquitectura en México</li>
                                    <li>Análisis Estructural</li>
                                    <li>Resistencia de Materiales</li>
                                    <li>Geometría Estructural</li>
                                    <li>Instalaciones Básicas en la Construcción</li>
                                    <li>Taller de Proyecto Arquitectónico III</li>
                                    <li>Seminario de Noviazgo y Matrimonio</li>
                                    <li>Taller de construcción I</li>
                                    <li>Seminario de noviazgo y matrimonio</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                   </div>  
                    <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Quinto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Planificación Urbana</li>
                                    <li>Estructuras de Acero</li>
                                    <li>Estructuras de Concreto</li>
                                    <li>Aplicaciones de Autodesk en Arquitectura I</li>
                                    <li>Presentación Arquitectónica y Maquetas</li>
                                    <li>Taller de Proyecto Arquitectónico IV</li>
                                    <li>Seminario de Vida Profesional</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Planificación Regional</li>
                                    <li>Procedimientos Constructivos de Acero</li>
                                    <li>Procedimientos Constructivos de Concreto</li>
                                    <li>Aplicaciones de Autodesk en Arquitectura II</li>
                                    <li>Remodelación de Edificios</li>
                                    <li>Taller de Proyecto Arquitectónico V</li>
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
                                    <li>Seminario de Tesis</li>
                                    <li>Organización, Supervisión y Control de Obras</li>
                                    <li>Energías Alternas</li>
                                    <li>Arquitectura Bioclimática</li>
                                    <li>Sistemas Prefabricados en la Construcción</li>
                                    <li>Calidad total en el Producto Arquitectónico</li>
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
                            <a class="button1" href="{{ route('ofertaSancristobal') }}">Ver todas las carreras</a>
                        </div>                        
                   </div>           
				</div>

                <div class="six columns">
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/Arquitectura/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoSancristobal') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>   
                    <h3 class="small-size">Otras sedes donde se imparte</h3>                
                    <a href="{{ route('palenqueHome') }}" class="big-link">» Campus Palenque</a>                                           
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