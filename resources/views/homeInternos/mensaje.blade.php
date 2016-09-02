@extends('layouts.ceprogTemplate.homeInterno')


@section('content_mensaje')

<div class="header-sitio interno">
				
            <div class="container">				
                  <div class="sixteen columns">
                	<a href="{{ route('ceprog') }}"><img src="{{ asset('/image/mensaje_rector/logos/ceprog_logo_header.png') }}" alt="CEPROG" /></a>
                  </div>                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Nosotros</a>  
                        	<ul>
                                <li><a class="outside" href="{{ route('mision') }}">Misión, Visión</a></li>
                                <li><a href="#">Mensaje del Rector</a></li>
                            </ul>                      	
                        </li> 
                        <!--                       
                        <li><a class="outside" href="index.html#noticias">Noticias</a></li>   -->
                    </ul>
                </nav>

            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p>Mensaje del rector</p>
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('ceprog') }}">Inicio</a> / <span>Mensaje del rector</span></p>
            </div>
            </div>
        </div>
        
    </div> 

<div class="container principal">              
            <div class="eight columns ">
             <img class="small-centered" src="{{ asset('/image/mensaje_rector/Rector_CPMARIO.jpg') }}" alt="Mensaje del rector" />
            </div>
            <div class="eight columns ">
            <h2>Mensaje del Rector</h2>
                <p align="justify">Estamos por cumplir nuestros primeros 10 años de fundación, misma que vivimos este gran acontecimiento con mucho entusiasmo, recordando con gratitud a Dios los grandes momentos que nos ha tocado vivir, aprovechando el presente con gran pasión y generosidad, y con la mirada puesta en los grandes retos que nos presentará el futuro.
<br>
<br>
 Son casi 10 años que el Centro de Estudios Profesionales del Grijalva (Universidad CEPROG) ha dedicado de manera entusiasta en el cumplimiento de su misión institucional, de formar personas íntegras, que sean líderes de acción positiva, con formación en valores; comprometidos con los demás, que trascienden y que son emprendedores, íntegros e innovadores; capaces de transformar la sociedad.
<br>
<br>
Este sitio web tiene como propósito familiarizar al lector con nuestra alma mater, su historia, sus planes de desarrollo y su visión de futuro; su estructura y forma de organización, así como los principales logros de sus diferentes Campus  universitarios,  con ello; consideramos  satisfacer las necesidades de información de todos aquellos que nos visiten, sin importar si ya forman parte o no de nuestra comunidad: alumnos de Bachillerato, Licenciatura, Posgrado y  Egresados, así como el personal académico, administrativos, medios de comunicación y visitantes en general.
<br>
<br>
Así mismo, tendrán  la oportunidad de descubrir todo lo que la UNIVERSIDAD CEPROG  ofrece durante esta trayectoria de vida que hemos  tenido y que  actualmente te ofrece los siguientes niveles de estudio: Bachillerato, 12 Licenciaturas, 1 Doctorado, y 6  Maestrías, todos ellos distribuidos en las diversas disciplinas que exige el mundo de hoy, impartidas por nuestros 4 Campus; además de diversos programas como cursos y talleres, que responden a la necesidad actual de formación continúa.
<br>
<br>
Dentro de las áreas de Vida Universitaria, que son pieza clave en la formación integral de nuestros alumnos, se encuentran las actividades que  fortalecen su formación profesional estas son: expo-universitarias, clases de valores, actividades deportivas, visitas a empresas, conferencias, simposium, concursos de creatividad, campamentos, Retiros Espirituales y muchas actividades más.
<br>
<br>
El modelo universitario de la UCEPROG estimula a los estudiantes a descubrir su potencial, a capitalizar sus fortalezas personales mediante el desarrollo de competencias y la superación personal, para que puedan desempeñarse con plenitud en los diferentes ámbitos de su vida y encuentren su trascendencia en el servicio a los demás. 
Te invitamos a que formes parte de esta gran comunidad Universitaria, y tengas la oportunidad de vivir una educación con formación en valores.</p>
<p>C.P. MARIO CESAR RAMIREZ MORENO.
    <span>Rector Institucional.</span>
</p>

               
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
					<p><span></span>Sitio desarrollado por Universidad Ceprog/Ing.Galvis Tellez</p>
				</div>
			</div>
			
		</div> <!-- end container -->
	</div> <!-- end contact -->  


  @stop