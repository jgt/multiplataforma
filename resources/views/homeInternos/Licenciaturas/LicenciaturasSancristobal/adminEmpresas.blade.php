@extends('layouts.ceprogTemplate.homeInterno')






@section('content_adminEmpresasSancristobal')


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
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <a href="{{ route('ofertaSancristobal') }}">Oferta Educativa</a> / <a href="{{ route('ofertaSancristobal') }}#tab1">Licenciaturas</a> / <span>Administración de Empresas</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Administración de Empresas</h1>
                    <img src="image/fotos/lic_adminempresas.jpg" alt="Administración de Empresas" />
                </div> 
                <div class="eight columns">
					<h3>Perfil de ingreso</h3>
                    <p>Los aspirantes a estudiar la Licenciatura en Administración de Empresas, deberán haber concluido los estudios de bachillerato. contar con capacidad de analisis, crítica e innovación , alta responsabilidad social y actitud positiva hacia el cambio.</p>
				</div>
                <div class="eight columns">
					<h3>Perfil de egreso</h3>
                    <p>A efecto de satisfacer las necesidades que demanda el mercado de trabajo al profesional de la Administración de Empresas, este será capaz de desarrollar diversos conocimientos, capacidades y actitudes mostradas a continuación:</p>
				</div>
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Conocimientos</h3>
                    <ul class="bullet-list">
                    	<li>Analizar las diferentes tendencias administrativas mercadológicas, de personal y financieras que se han desarrollado hasta la fecha</li>
                        <li>Aplicar las diferentes técnicas de administración, mercadotecnia, operaciones, personal y finanzas a los diferentes problemas de esta área</li>
                        <li>Proponer alternativas de solución para la toma de decisiones</li>
                        <li>Combinar el conocimiento de diversas disciplinas: administración, mercadotecnia, operaciones, personal, psicología y sociología, economía, contabilidad, informática, matemáticas, derecho e investigación, para solucionar problemas administrativos</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Habilidades</h3>
                    <ul class="bullet-list">
                    	<li>Para desarrollar una visión integral sobre los objetivos de las organizaciones y sus estrategias</li>
                        <li>Aplicar los conocimientos adquiridos en forma crítica, en su ejercicio profesional</li>
                        <li>Conducir grupos y participar en equipos multidisciplinarios para lograr objetivos organizacionales</li>
                        <li>Asesorar en el diseño e implantación de sistemas y modelos administrativos para la toma de decisiones</li>
                        <li>Establecer estrategias para generar fuentes de trabajo mediante la creación de nuevas empresas</li>
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
                        <li>Contabilidad, administración, dirección, organización, control, finanzas, contribuciones y auditoría</li>
                    </ul>
				</div>
                <div class="eight columns">
					<h3 class="icon campo">Campo de trabajo</h3>
                    <p>El egresado de la Licenciatura en Administración de Empresas de La <span class="bold-style">Universidad CEPROG</span> tiene amplias oportunidades de desempeñarse en el área laboral del sector público y privado; formar su propia empresa y ser jefe responsable y directo de una organización.</p>
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
                                    <li>Microeconomía</li>
                                    <li>Metodología de la Investigación</li>
                                    <li>Proceso Administrativo</li>
                                    <li>Fundamentos Contables</li>
                                    <li>Fundamentos de Mercadotecnia</li>
                                    <li>Corrientes de la Administración</li>
                                    <li>Seminario de Superación Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Segundo semestre</h4>
                                <ul class="bullet-list">
                                    <li>Macroeconomía</li>
                                    <li>Estadística</li>
                                    <li>Derecho Constitucional y Administrativo</li>
                                    <li>Proceso Contable</li>
                                    <li>Diseño Organizacional</li>
                                    <li>Administración Mercadológica</li>
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
                                    <li>Matemáticas Financieras I</li>
                                    <li>Derecho Mercantil</li>
                                    <li>Administración de Personal</li>
                                    <li>Desarrollo Organizacional</li>
                                    <li>Dirección</li>
                                    <li>Aplicaciones Administrativas Informáticas I</li>
                                    <li>Seminario de Desarrollo Personal</li>
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Cuarto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Matemáticas Financieras II</li>
                                    <li>Derecho Fiscal</li>
                                    <li>Investigación de Operaciones</li>
                                    <li>Administración de Ventas</li>
                                    <li>Dirección</li>
                                    <li>Aplicaciones Administrativas Informáticas II</li>
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
                                    <li>Fundamentos de Administración Financiera</li>
                                    <li>Derecho Laboral</li>
                                    <li>Introducción a la Auditoria</li>
                                    <li>Costos para la Toma de Decisiones</li>
                                    <li>Compras y Abastecimiento</li>
                                    <li>Comportamiento Humano en las Organizaciones</li>
                                    <li>Seminario de Vida Profesional</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="five columns omega">
                            <div class="plan-estudios">
                                <h4>Sexto semestre</h4>
                                <ul class="bullet-list">
                                    <li>Administración Estratégica</li>
                                    <li>Elementos de Administración Publica</li>
                                    <li>Investigación de Mercados</li>
                                    <li>Presupuestos</li>
                                    <li>Administración de la Producción</li>
                                    <li>Auditoría Administrativa</li>
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
                                    <li>Reingeniería</li>
                                    <li>Seminario de Tesis</li>
                                    <li>Simulador de Negocios</li>
                                    <li>Auditoría Administrativa II</li>
                                    <li>Administración de la Producción II</li>
                                    <li>Desarrollo de Capital Humano en las Organizaciones</li>
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
                
                
                
					<a class="triptico ventana-emergente" data-fancybox-type="iframe" href="tripticos/AdministracionEmpresas/triptico.html">Ver tríptico de la carrera</a>                    
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