@extends('layouts.ceprogTemplate.homeInterno')


@section('content_ofertaSancristobal')

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
    
    <div id="separator6">
		<div class="titulo-principal oferta-educativa">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p class="one-line">Oferta educativa Campus San Cristobal</p>                                
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('sancristobalHome') }}">Inicio</a> / <span>Oferta educativa</span></p>
            </div>
            </div>
        </div>
        
    </div>    

	<div class="container principal m-b-40">				
			<div class="sixteen columns ">                                      
                <ul class="tabs bg_light threeT">             
                   <li><a class="active" href="#tab1">Licenciaturas</a></li>
                   <li><a href="#tab2">Posgrados</a></li>                                   
                </ul>
            </div>
            
            <ul class="tabs-content oferta">
                <li class="active" id="tab1">
                    <div id="tab1" class="sixteen columns ">   
                        <div class="header-oferta">
                            <h3>Licenciaturas</h3>
                            <div class="trans"></div>
                        </div>
                        <ul>
                            <li><a href="{{ route('adminEmpresasSancristobal') }}">Lic. en Administración de Empresas</a></li>
                            <li><a href="{{ route('adminEmpresasTuristicaSancristobal') }}">Lic. en Administración de Empresas Turísticas</a></li>
                            <li><a href="{{ route('arquitecturaSancristobal') }}">Lic. en Arquitectura</a></li>
                            <li><a href="{{ route('contaduriaPublicaSancristobal') }}">Lic. en Contaduría Pública</a></li>
                            <li><a href="{{ route('derechoSancristobal') }}">Lic. en Derecho</a></li>
                            <li><a href="{{ route('informaticaSancristobal') }}">Lic. en Informática</a></li>
                            <li><a href="{{ route('psicologiaGeneralSancristobal') }}">Lic. en Psicología General </a></li> 
                       
                       
                        </ul>
                    </div>
                </li>
	            <li id="tab2">
                    <div class="sixteen columns ">   
                        <div class="header-oferta postgrado">
                            <h3>Posgrados</h3>
                            <div class="trans"></div>
                        </div>
                        <ul>
                            <li><a href="{{ route('maestriaAdministracionSancristobal') }}">Maestría en Administración</a></li>
                            <li><a href="{{ route('maestriaComputacionSancristobal') }}">Maestría en Computación con Formación en Base de Datos</a></li>
                            <li><a href="{{ route('maestriaDerechoConstitucionalSancristobal') }}">Maestría en Derecho Constitucional y Amparo</a></li>
                            <li><a href="{{ route('maestriaFinanzasSancristobal') }}">Maestría en Finanzas Estratégicas</a></li>                           
                        </ul>
                    </div>
                </li>    
            
            	<li id="tab3">
                    <div class="sixteen columns ">   
                        <div class="header-oferta doctorado">
                            <h3>Doctorado</h3>
                            <div class="trans"></div>
                        </div>
                        <ul>
                            <li><a href="Doctorado_Educacion.html">Doctorado en Educación con formación en Investigación</a></li>
                                                 
                        </ul>
                    </div>
                </li> 
            </ul>       
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