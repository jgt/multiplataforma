@extends('layouts.ceprogTemplate.homeInterno')


@section('content_servicioReforma')
	
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
                                <!--<li><a class="outside" href="palenque_noticias.html">Noticias</a></li>-->
                                <li><a class="outside" href="{{ route('galeriaReforma') }}">Galería de Fotos</a></li>
                            </ul>
                        </li>
                        <li><a class="outside" href="{{ route('admision') }}">Admisiones</a></li>   
                        <li><a class="outside" href="Reforma_oferta_educativa.html">Oferta Educativa</a></li>         
                        <li><a class="outside" href="reforma_contactan.html">Contáctanos</a></li>          
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
   	<div class="subtitulo carrera">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('reformaHome') }}">Inicio</a> / <a href="{{ route('servicioReforma') }}">Servicios</a> / <span>Servicios Reforma</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Servicios Reforma</h1>
                </div> 
                <div class="clear m-b-20"></div>
                <div class="eight columns">
					<h3 class="icon conocimientos">Estudiantiles</h3>
                    <ul class="bullet-list">
                    	<li>Tutorías</li>
                        <li>Titulación</li>
                        <li>Control Escolar</li>
                    </ul>
                    
				</div>
                <div class="eight columns">
					<h3 class="icon habilidades">Pagos</h3>
                    <ul class="bullet-list">
                    	<li>Efectivo</li>
                        <li>Cheque</li>
                        <li>Tarjeta de Debito</li>
                    </ul>
				</div>

                <div class="clear m-b-60"></div>
                <div class="eight columns">
					<h3 class="icon actitudes">Tramites</h3>
                    <ul class="bullet-list">
                    	<li>Envio de documentos</li>
                        <li>Formatos</li>
                        <li>Servicio Social</li>
                        <li>Titulación</li>
                    </ul>
				</div>


				

@stop