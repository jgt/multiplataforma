@extends('layouts.ceprogTemplate.homeInterno')


@section('content_ofertaReforma')
	
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
                                <li><a class="outside" href="reforma_noticias.html">Noticias</a></li>
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
    
    <div id="separator6">
		<div class="titulo-principal oferta-educativa">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p class="one-line">Oferta educativa Campus Reforma</p>                                
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('reformaHome') }}">Inicio</a> / <span>Oferta educativa</span></p>
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
                            <li><a href="{{ route('adminEmpresasReforma') }}">Lic. en Administración de Empresas</a></li>
                            <li><a href="{{ route('contaduriaPublicaReforma') }}">Lic. en Contaduría Pública</a></li>
                            <li><a href="{{ route('informaticaReforma') }}">Lic. en Informática</a></li> 
                            <li><a href="{{ route('psicologiaGeneralReforma') }}">Lic. en Psicología General </a></li>
                         	<li><a href="{{ route('derechoReforma') }}">Lic. en Derecho</a></li>                     
                     
                       
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
                            <li><a href="{{ route('maestriaCienciaEducacionReforma') }}">Maestría en Ciencias de la Educación</a></li>
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
                            <li><a href="Posgrado_Ciencia_Educacion.html">Doctorado en Educación con formación en Investigación</a></li>
                                                 
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