@extends('layouts.ceprogTemplate.homeInterno')


@section('content_servicioTuxtla')
	
	<div class="header-sitio interno">
				
            <div class="container">				
                <div class="sixteen columns">
                	<a href="{{ route('tuxtlaHome') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                </div>
                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
                                <li><a class="outside" href="{{ route('palenqueHome') }}">Palenque</a></li>
                                <li><a class="outside" href="{{ route('reformaHome') }}">Reforma</a></li>
                                <li><a class="outside" href="{{ route('sancristobalHome') }}">San Cristobal</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Conócenos</a>
                        	<ul>
                                <!--<li><a class="outside" href="palenque_noticias.html">Noticias</a></li>-->
                                <li><a class="outside" href="{{ route('galeriaSancristobal') }}">Galería de Fotos</a></li>
                            </ul>
                        </li>
                        <li><a class="outside" href="{{ route('admision') }}">Admisiones</a></li>   
                        <li><a class="outside" href="Tuxtla_oferta_educativa.html">Oferta Educativa</a></li>         
                        <li><a class="outside" href="tuxla_contactanos.html">Contáctanos</a></li>          
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
   	<div class="subtitulo carrera">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('tuxtlaHome') }}">Inicio</a> / <a href="{{ route('servicioTuxtla') }}">Servicios</a> / <span>Servicios Tuxtla</span></p>
            </div>
            </div>
        
    </div>    
	
    <div class="carrera-cont">
        <div class="container principal">				
                <div class="sixteen columns ">
                    <h1>Servicios Tuxtla</h1>
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

                 <div class="eight columns">
                    <h3 class="icon campo">Pagos en linea</h3>
                    <ul class="bullet-list">
                        <li>Depósito Bancario</li>
                        <li>Transferencia Electrónica</li>
                        <li>Cargo automático del alumno deberá solicitar el formato correspondiente en las oficinas o descargar desde el sito web <a href="PDF/cargoencta.pdf">DESCARGAR FORMULARIO</a> el cual deberá ser debidamente llenado y entregado en las oficinas correspondientes.</li>
                        <li>En Línea desde el sitio web <a href="https://www.pagalaescuela.santander.com.mx/pagalaescuela/jsp/inicio.jsp">Santander</a></li>
                        <li>Pago por vía Telefónica al (01) 800 062 0699 elegir la opcion 1, luego deberá proporcionar los siguientes datos:
                        <br>
                        1. Nombre del alumno <br>
                        2. Nombre de la universidad <br>
                        3. Referencia (la referencia se solicita en el área de cajas de cada campus)
                        </li>
                    </ul>
                </div>

@stop