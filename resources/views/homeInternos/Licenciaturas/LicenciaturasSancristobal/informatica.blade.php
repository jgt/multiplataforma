@extends('layouts.ceprogTemplate.homeInterno')



@section('content_informaticaSancristobal')

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
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <a href="{{ route('ofertaSancristobal') }}">Oferta Educativa</a> / <a href="{{ route('ofertaSancristobal') }}#tab1">Licenciaturas</a> / <span>Licenciatura en Informática</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Licenciatura en Informática</h1>
                    <img src="image/fotos/sancristobal/lic_informatica.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Licenciatura en Informática, deberán haber concluido los estudios de bachillerato. Deberán poseer gusto por la tecnología, destrezas en las herramientas informáticas, la lectura, y apertura al cambio y a las nuevas ideas; disposición permanente al auto aprendizaje.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la Licenciatura en Informática, de la Universidad CEPROG estará capacitado para desarrollar actividades en los siguientes ámbitos.</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Sobre matemáticas.</li>
                        <li>Sobre arquitectura de computadoras.</li>
                        <li>Sobre administración en sistemas de información.</li>
                        <li>Sobre administración e implementación de redes.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Administración de recursos informáticos.</li>
                        <li>Análisis y solución de problemas.</li>
                        <li>Razonamiento lógico.</li>
                        <li>Desarrollo de metodología de investigación.</li>
                        <li>Expresión oral y escrita.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Ética y profesionalismo en actividades.</li>
                        <li>Actualización continúa.</li>
                        <li>Sentido autodidacta en el estudio.</li>
                        <li>Disciplina y correcto apego a las normas y disposiciones institucionales</li>
                        <li>Reconocimiento de área de oportunidad en los organismos.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Licenciatura en Informática de La <span class="bold-style">Universidad CEPROG</span> podrá desarrollarse en empresas o instituciones públicas o privadas, tanto a nivel nacional como internacional, en donde el desarrollo y la innovación tecnológica sean estratégicos. El campo de trabajo donde puede desarrollar profesionalmente es en empresas cuyo negocio está dirigido al desarrollo de software y/o las Tecnologías de Información, Hardware, Manufactura, Servicios, Banca y Finanzas, Comercio, Publicidad, Salud, Gobierno. También puede trabajar como consultor independiente y crear su propio negocio. Así como en cualquier otro tipo de organización en donde se cuente con un área de apoyo en Tecnologías de Información, o área de Informática.</p>
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
                                    <li>Fundamentos Contables</li>
                                    <li>Metodología de la Inv.</li>
                                    <li>Proceso Administrativo</li>
                                    <li>Calculo Diferencial</li>
                                    <li>Introducción a la Informática</li>
                                    <li>Análisis y Diseño de Algoritmos</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Administración de Recursos Humanos</li>
                                    <li>Estadística</li>
                                    <li>Calculo Integral</li>
                                    <li>Física</li>
                                    <li>Teoría matemática</li>
                                    <li>Programación básica</li>
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
                                    <li>Principios de Electrónica</li>
                                    <li>Ecuaciones Diferenciales</li>
                                    <li>Algebra Lineal</li>
                                    <li>Admón. de Archivos</li>
                                    <li>Estructura de Datos</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Sistemas Digitales</li>
                                    <li>Métodos Numéricos</li>
                                    <li>Investigación de Operaciones</li>
                                    <li>Sistemas Operativos I</li>
                                    <li>Análisis de Sistemas de Información</li>
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
                                    <li>Administración Estratégica</li>
                                    <li>Base de Datos</li>
                                    <li>Arquitectura de Computadoras I</li>
                                    <li>Sistemas operativos II</li>
                                    <li>Diseño de Sistemas de Información</li>
                                    <li>Redes I</li>
                                    <li>Seminario de Vida Profesional</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Inteligencia Artificial</li>
                                    <li>Base de Datos II</li>
                                    <li>Arquitectura de Computadoras II</li>
                                    <li>Interfaces Gráficas de Usuarios</li>
                                    <li>Ingeniería de Software I</li>
                                    <li>Redes II</li>
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
                                    <li>Planeación, Diseño y Desarrollo de Centros de Investigación</li>
                                    <li>Seminario de Tesis</li>
                                    <li>Política y Legislación Informática</li>
                                    <li>Sistemas de Computación en Internet</li>
                                    <li>Ingeniería de Software II</li>
                                    <li>Redes III</li>
                                    <li>Seminario de Liderazgo</li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                   </div> 

                    
                   
                   <div class="row">
                   		<div class="five columns alpha">
                            <a class="button1" href="admisiones.html">Ver proceso de admisión</a>
                        </div>
                        <div class="five columns omega">
                            <a class="button1" href="{{ route('ofertaSancristobal') }}">Ver todas las carreras</a>
                        </div>                        
                   </div>           
				</div>

                <div class="six columns">
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/Informatica/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoSancristobal') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>   
                    <h3 class="small-size">Otras sedes donde se imparte</h3>    
                    
                    <a href="{{ route('tuxtlaHome') }}" class="big-link">» Campus Tuxtla Gutiérrez</a>             
                    <a href="{{ route('palenqueHome') }}" class="big-link">» Campus Palenque</a>  
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