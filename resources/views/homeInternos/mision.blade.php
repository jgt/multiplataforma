@extends('layouts.ceprogTemplate.homeInterno')

@section('content_mision')

 <div class="header-sitio interno">
				
            <div class="container">				
                  <div class="sixteen columns">
                	<a href="{{ route('ceprog') }}"><img src="{{ asset('/image/mensaje_rector/logos/ceprog_logo_header.png') }}" alt="CEPROG" /></a>
                  </div>                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Nosotros</a>  
                        	<ul>
                                <li><a href="#">Misión, Visión</a></li>
                                <li><a class="outside" href="{{ route('mensajeRector') }}">Mensaje del Rector</a></li>
                            </ul>                      	
                        </li> 
                        <!--                       
                        <li><a class="outside" href="index.html#noticias">Noticias</a>

                            <ul>
                                <li><a  class="outside" href="tuxtla_noticias.html">Campus Tuxtla</a></li>
                                <li><a class="outside" href="San_Cristobal_noticias.html">Campus San Cristobal</a></li>
                                <li><a class="outside" href="palenque_noticas.html">Campus Palenque</a></li>
                                <li><a class="outside" href="reforma_noticias.html">Campus Reforma</a></li>
                            </ul>  

                        </li>  
                         -->
                    </ul>
                </nav>

            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p>Misión, Visión, Valores</p>
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('ceprog') }}">Inicio</a> / <span>Misión, Visión</span></p>
            </div>
            </div>
        </div>
        
    </div>    

	<div class="container principal">				
			<div class="eight columns ">
            	<h2>Misión</h2>
                <p align="justify">Formar profesionistas íntegros con una visión humanística y competitiva, que desarrollen sus capacidades y habilidades de estudio en un marco ético y de autocrítica; con un espíritu de servicio, comprometidos con la verdad, la investigación y la continua actualización del conocimiento.</p>
                
                <h2>Visión</h2>
                <p align="justify">Ser reconocida por el liderazgo profesional y educación en valores de sus egresados, generadores de modelos y sistemas innovadores para el desarrollo económico, social y tecnológico; garantizando la protección  del medio ambiente.</p>
                
                <h2>Valores</h2>
                <p align="justify">Excelencia, Justicia, Servicio, Integridad, Respeto, Disciplina, Ética, Responsabilidad, Gratitud, Compromiso.</p>

                <h2>Filosofía</h2>
                <p align="justify">Una Educación Integral para el desarrollo de las facultades físicas, mentales, sociales y espirituales en armonía con la fe en Dios y en el hombre como principio y fin de nuestra misión histórica; implementando valores éticos en el desarrollo del educando como un ser racional, sociable, creativo y capaz de enfrentar su futuro con un desarrollo sustentable.</p>

                <h2>Historia</h2>
                <p align="justify">El Centro de Estudios Profesionales del Grijalva, es una institución educativa que fue fundada el 13 de septiembre del año de 1989. Hace 22 años el empresario Chiapaneco C.P. y M.A. Harvey Gutiérrez Álvarez, con una visión emprendedora trajo a Chiapas un nuevo concepto en educación, estableciendo así una nueva forma de transmitir conocimiento a través de la educación en FORMACION EN VALORES, y convertirse en pioneros en la modalidad SEMIESCOLARIZADA.
                <br>
                <br>
Por lo tanto la Universidad CEPROG plantea  que es necesario representar su filosofía y visión por medio de un programa de identidad visual que sea la base para una buena comunicación tanto dentro de la universidad como fuera de ella. Su propósito es distinguir a la universidad, diferenciarla, transmitir su misión e influenciar positivamente en las personas. 
</p>

            </div>
            <div class="eight columns ">
            	<img class="small-centered" src="{{ asset('/image/fotos/misionvision.jpg') }}" alt="Misión, Visión" />
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