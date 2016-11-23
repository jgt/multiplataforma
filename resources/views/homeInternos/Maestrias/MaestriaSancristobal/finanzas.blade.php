@extends('layouts.ceprogTemplate.homeInterno')



@section('content_maestriaFinanzasSancristobal')

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
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <a href="{{ route('ofertaSancristobal') }}">Oferta Educativa</a> / <a href="{{ route('ofertaSancristobal') }}#tab1">Posgrados</a> / <span>Maestría en Finanzas Estratégicas</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Maestría en Finanzas Estratégicas</h1>
                    <img src="image/fotos/mtria_finanzas.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Maestría en Finanzas Estratégicas, deberán haber concluido los estudios de bachillerato y de licenciatura.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>El egresado de la maestría en Finanzas Estratégicas obtendrá conocimientos, habilidades y aptitudes siguientes:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Teóricos sobre las finanzas y el desarrollo de modelos análiticos.</li>
                        <li>Relación con las diversas políticas internacionales.</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Capacidad de correlación, humana, empresarial y social.</li>
                        <li>Habilidades para la indagación y emprendimiento en la generación de recursos.</li>
                    </ul>
				</div>
                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Actitudes</h3>
                    <ul class="bullet-list">
                    	<li>Disposición a la educación continúa en su campo de acción.</li>
                        <li>Responsabilidad y sentido social en el ejercimiento de su profesión.</li>
                        <li>Ejercer profesionalmente con sentido ético y crítico.</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                   <p>El egresado de la Maestría en Finanzas Estratégicas de La <span class="bold-style">Universidad CEPROG</span> tiene amplias oportunidades de desempeñarse en el área de Finanzas de cualquier institución o empresa.</p>
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
                                   <li>Teoría Organizacional</li>
                                    <li>Marco Jurídico Organizacional</li>
                                    <li>Investigación de Operaciones</li>
                                    <li>Administración Financiera I</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Administración Financiera II</li>
                                    <li>Calidad Total</li>
                                    <li>Economía Internacional</li>
                                    <li>Sistema Financiero Mexicano</li>
                                    <li>Administración Estratégica</li>
                                </ul>
                            </div>
                        </div>
                        
                   </div> 
                   
                   <div class="row no-margin-small">
                   		<div class="five columns alpha">
                            <div class="plan-estudios">
                                <h4>Tercer semestre</h4>
                                <ul class="bullet-list">
                                    <li>Formulación y Evaluación de Proyectos de Inversión</li>
                                    <li>Administración de la Tecnología</li>
                                    <li>Política Monetaria Internacional Financiera de Mercados</li>
                                    <li>Seminario de Tesis I</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Modelos de Proyección Financiera</li>
                                    <li>Finanzas Internacionales</li>
                                    <li>Esquemas de Decisiones y Negociación Internacional</li>
                                    <li>Mercadotecnia Estratégica</li>
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
                            <a class="button1" href="{{ route('ofertaSancristobal') }}">Ver todas las carreras</a>
                        </div>                        
                   </div>           
				</div>

                <div class="six columns">
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/Maestria_finanzas/triptico.html">Ver tríptico de la carrera</a>                    
                    <a href="{{ route('contactoSancristobal') }}" class="mandar-comentarios">¿Comentarios o sugerencias? <span>¡Escríbenos!</span></a>   
                    <h3 class="small-size">Otras sedes donde se imparte</h3>    
                    
                    <a href="{{ route('tuxtlaHome') }}" class="big-link">» Campus Tuxtla Gutiérrez</a>             
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