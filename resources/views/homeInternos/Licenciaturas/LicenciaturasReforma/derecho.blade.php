@extends('layouts.ceprogTemplate.homeInterno')




@section('content_derechoReforma')


<div class="header-sitio interno">
				
            <div class="container">				
                <div class="sixteen columns">
                	<a href="{{ route('reformaHome') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                </div>
                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
                                <li><a class="outside" href="{{ route('palenqueHome') }}">Palenque</a></li>
                                <li><a class="outside" href="{{ route('sancristobalHome') }}">San Cristobal</a></li>
                                <li><a class="outside" href="{{ route('tuxtlaHome') }}">Tuxtla Gutiérrez</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Conócenos</a>
                        	<ul>
                                <!--<li><a class="outside" href="reforma_noticias.html">Noticias</a></li>-->
                                <li><a class="outside" href="{{ route('galeriaReforma') }}">Galería de Fotos</a></li>
                            </ul>
                        </li>
                        <li><a class="outside" href="{{ route('admision') }}">Admisiones</a></li>   
                        <li><a class="outside" href="{{ route('ofertaReforma') }}">Oferta Educativa</a></li>         
                        <li><a class="outside" href="{{ route('contactoReforma') }}">Contáctanos</a></li>          
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
   	<div class="subtitulo carrera">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('reformaHome') }}">Inicio</a> / <a href="{{ route('ofertaReforma') }}">Oferta Educativa</a> / <a href="{{ route('ofertaReforma') }}#tab1">Licenciaturas</a> / <span>Licenciatura en Derecho</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Licenciatura en Derecho</h1>
                    <img src="image/fotos/lic_derecho.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Licenciatura en Derecho, deberán haber concluido los estudios de bachillerato. Deberán tener el interés en apoyar su bienestar; capacidad para fomentar la participación de la sociedad civil, pensamiento crítico, actitud mental positiva.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la Licenciatura en Derecho, de la Universidad CEPROG estará capacitado para comprender y evaluar la problemática inherente al derecho, con una solida conciencia de su responsabilidad y compromiso social, para el logro de los fines o principios del derecho, entre ellos la justicia, la equidad, bien común y la paz social, con altos valores de ética y honorabilidad para desempeñar su profesión en cualquiera de las ramas jurídicas. Así también tendrá los conocimientos sobre los siguientes ámbitos:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Sobre problemáticas en el ámbito legal.</li>
                        <li>Sobre Epistemología jurídica.</li>
                        <li>Sobre conceptos y disposiciones generales en la disciplina del derecho.</li>
                        <li>Sobre integración de líneas de pensamiento jurídico.</li>
                        <li>Sobre los textos jurídicos en su forma y fondo.</li>
                        <li>Sobre campos de la realidad profesional.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Capacidad de análisis y síntesis.</li>
                        <li>Realizar abstracciones e inferencias lógicas.</li>
                        <li>Enfrentar situaciones conflictivas.</li>
                        <li>Reflexionar frente a dilemas ético-jurídicos.</li>
                        <li>Revisar problemas jurídicos con enfoque crítico.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Vocación de servicio a la sociedad y al ser humano en particular.</li>
                        <li>Vincular el sentido ético del derecho con las actividades específicas de la profesión.</li>
                        <li>Respeto y valoración de principios democráticos.</li>
                        <li>Suficiencia o idoneidad para obtener y ejercer un empleo o cargo.</li>
                        <li>Aplicar el criterio y la técnica con un sentido humanista y social.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Licenciatura en Derecho de La <span class="bold-style">Universidad CEPROG</span> tiene amplias oportunidades en el mercado laboral, ya que su preparación académica le permite trabajar en reconocidos sectores.</p>
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
                                    <li>Teoría Política</li>
                                    <li>Metodología de la Investigación</li>
                                    <li>Proceso Administrativo</li>
                                    <li>Lógica Jurídica</li>
                                    <li>Teoría General del Estado</li>
                                    <li>Introducción al Estudio del Derecho</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Sistema Político Mexicano</li>
                                    <li>Estadística</li>
                                    <li>Oratoria</li>
                                    <li>Derecho Civil I</li>
                                    <li>Derecho Romano I</li>
                                    <li>Derecho Constitucional I</li>
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
                                    <li>Teoría General del Proceso</li>
                                    <li>Historia del Derecho en México</li>
                                    <li>Derecho Civil II</li>
                                    <li>Derecho Penal I</li>
                                    <li>Derecho Romano II</li>
                                    <li>Derecho Constitucional II</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>México y La Socioeconomía</li>
                                    <li>Derecho Laboral I</li>
                                    <li>Derecho Mercantil I</li>
                                    <li>Derecho Civil III</li>
                                    <li>Derecho Penal II</li>
                                    <li>Sociología</li>
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
                                    <li>Derecho Laboral II</li>
                                    <li>Derecho Mercantil II</li>
                                    <li>Derecho Civil IV</li>
                                    <li>Derecho Administrativo I</li>
                                    <li>Derecho Fiscal I</li>
                                    <li>Derecho Procesal Penal</li>
                                    <li>Seminario de Vida Profesional</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Arbitraje y otros medios de solución a Controversias</li>
                                    <li>Amparo I</li>
                                    <li>Derecho Administrativo II</li>
                                    <li>Derecho Fiscal II</li>
                                    <li>Derecho Procesal Mercantil</li>
                                    <li>Derecho Procesal Civil</li>
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
                                    <li>Jurisprudencia</li>
                                    <li>Amparo II</li>
                                    <li>Derecho Procesal Administrativo</li>
                                    <li>Derecho Procesal Fiscal</li>
                                    <li>Derecho Procesal Laboral</li>
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
                            <a class="button1" href="{{ route('ofertaReforma') }}">Ver todas las carreras</a>
                        </div>                        
                   </div>           
				</div>

                <div class="six columns">
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/Derecho/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoReforma') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>   
                    <h3 class="small-size">Otras sedes donde se imparte</h3>    
                    
                    <a href="{{ route('tuxtlaHome') }}" class="big-link">» Campus Tuxtla Gutiérrez</a>             
                    <a href="{{ route('sancristobalHome') }}" class="big-link">» Campus San Cristóbal</a>  
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