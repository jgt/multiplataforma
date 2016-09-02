@extends('layouts.ceprogTemplate.homeInterno')


@section('content_servicioGeneral')

<div class="header-sitio interno">
				
            <div class="container">				
                <div class="sixteen columns">
                	<a href="{{ route('palenqueHome') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                </div>
                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Campus</a>
                        	<ul>
                                <li><a class="outside" href="{{ route('palenqueHome') }}">Palenque</a></li>
                                <li><a class="outside" href="{{ route('reformaHome') }}">Reforma</a></li>
                                <li><a class="outside" href="{{ route('sancristobalHome') }}">San Cristobal</a></li>
                                <li><a class="outside" href="{{ route('tuxtlaHome') }}">Tuxtla</a></li>
                            </ul>
                        </li>       
                    </ul>
                </nav>
  
            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal oferta-educativa">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p class="one-line">Servicios Escolares</p>                                
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('palenqueHome') }}">Inicio</a> / <span>Servicios Escolares</span></p>
            </div>
            </div>
        </div>
        
    </div>    

<div class="container principal m-b-40">				
  <div class="sixteen columns ">                                      
                <ul class="tabs bg_light threeT">   
                <li><a class="active" href="#tab4">Control Escolar</a></li> 
                 <li><a href="#tab3">Finanzas</a></li>          
                   <li><a  href="#tab1">Tutorías</a></li>
                   <li><a href="#tab2">Egresados</a></li>  

                </ul>
            </div>
            
              <ul class="tabs-content oferta">
                <li id="tab1">
                    <div id="tab1" class="sixteen columns ">   
                        <div class="header-oferta postgrado">
                            <h3>Tutorías</h3>
                            <div class="trans"></div>
                        </div>
                        <p align="justify">El departamento de Tutorías CEPROG, está a tu disposición para atender de primera mano dudas o procesos cotidianos; siendo este el primer departamento al que debes acudir para solicitar cualquier trámite académico que tengas pendiente por resolver, como son:
<br><br>
                       1.  Justificantes. <br>
                       2.  Regularizaciones académicas. <br>
                       3.  Reinscripciones. <br>
                       4.  Información de eventos/actividades académicas, culturales, deportivas, etc.
                            </div>
                </li>
	           <li id="tab2">
                 <div  class="sixteen columns ">   
                   <div class="header-oferta doctorado">
                            <h3>Egresados</h3>
                            <div class="trans"></div>
                     </div>
                     <ul>
                          <p align="justify"><strong>EGRESADOS (Licenciatura)</strong><br><br>
                       Después de egresar, puedes elegir como hacer tu Trámite de Titulación:<br><br>- PRIMERA ETAPA... Elegir una opción! <br> <br>
                            1.    Tesis individual o colectiva. <br>
                            Involucra la investigación o realización de proyectos; teniendo una duración de 3 meses, en donde el egresado desarrollará una tesis profesional, la cual será evaluada por los asesores del área. <br> <br>
                            
                            2.    Curso de Titulación.  <br>
                            Con una duración de 2 meses y medio consiste en cursar 4 materias afines a la carrera profesional del egresado, las cuales se deberán aprobar con una calificación mínima de 8 y no tendrán derecho a faltas, concluyendo con una tesina. <br> <br>
                            
                            3.    Promedio General de calificaciones. <br>
                            Tener un promedio mínimo de 9.0 siempre y cuando no hayan reprobado ninguna materia y no hayan realizado cambio de modalidad o institución. <br> <br>
                            
                            4.    Sustentación de examen por áreas de conocimiento (CENEVAL). <br>
                            Examen general de calidad profesional aplicado por el Centro Nacional de Evaluación. <br> <br>
                            
                            5.    Estudio de Posgrado. <br>
                            Tener cursado y acreditado el 50% de créditos de la maestría. <br> <br>
                            
                            6.    100% de Especialidad. <br>
                            Haber cursado y terminado una especialidad en su totalidad. <br> <br>
                            
                            * Entregar Formato con opción de Titulación elegida.
                          <a href="">Formato<br><br></a>- SEGUNDA ETAPA...Examen Profesional <br> <br>
                               Es necesario integrar en el Departamento de Titulación de Servicios Escolares, la siguiente documentación: <br> <br> 
                               1.    Pago académico en caja CEPROG, por concepto de CERTIFICADO DE ESTUDIOS. <br> <br>
                               2.    Pago académico en caja CEPROG, correspondiente a la opción de titulación elegida en la Primera Etapa. <br> <br>
                               3.    Pagos en Secretaría de Hacienda del Estado de Chiapas por los siguientes conceptos: <br> <br>
                               a.    Examen profesional de grado. <br>
                               b.    Legalización de acta de examen profesional. <br>
                               c.    Legalización de firmas de funcionarios públicos. <br> <br>
                               IMPORTANTE: En caso de haber elegido titulación por Tesis individual/Colectiva o Curso de Titulación, atender oficio de autorización de impresión y fecha, emitidos por Servicios Escolares con las siguientes características: <br> <br>

                               - Tesis Individual: 5 copias impresas y empastadas del Proyecto desarrollado. <br>
                               - Tesis Colectiva: 6 copias impresas y empastadas del proyecto desarrollado. <br> <br>

                               También verificar expediente integrado por la siguiente documentación: <br> <br>

                               • Acta de Nacimiento Actualizada. <br>
                               • Certificado de Bachillerato Legalizado. <br>
                               • Certificado de Licenciatura. <br> 
                               • Constancia de Servicio Social. <br>
                               • CURP <br>
                               • Constancia del 50% de créditos (en caso de titulación con maestría). <br> <br>

                               IMPORTANTE: Si realizaste tus estudios fuera del Estado de Chiapas, tendrás que acudir a la Secretaría de Educación del Estado en el que realizaste tus estudios, para realizar la verificación del documento en original. <br> <br>

                               Al finalizar los procesos de esta Segunda Etapa, obtén tu constancia de TOMA DE PROTESTA expedida por Servicios Escolares en acto protocolario, como reconocimiento al haber acreditado el Examen Profesional y como manifiesto de la capacitación legal para ejercer la Licenciatura cursada. <br> <br>


                                 -    TERCERA ETAPA...Título Profesional de LICENCIATURA. <br> <br>

                                 Para concluir tu proceso de titulación debes complementar tu documentación con lo siguiente: <br> <br>

                                 •   Recibo de pago en Secretaría de Hacienda del Estado de Chiapas, por concepto de Expedición y Registro de Título Profesional. <br> <br>
                                 •   Recibo de pago en Secretaría de Hacienda del Estado de Chiapas, por concepto de Legalización de Título Profesional. <br> <br>
                                 •   Recibo de pago en Secretaría de Hacienda del Estado de Chiapas, por concepto de Legalización de Firmas de Funcionarios Públicos. <br> <br> <br>

                                 Para obtener tu CERTIFICADO DE MAESTRÍA, antes de finalizar tus estudios, debes verificar que tu expediente académico esté integrado por la siguiente documentación:
                                 <br> <br>

                                 1.  Acta de Nacimiento Actualizada del año de egreso. <br>
                                 2.  Certificado de Bachillerato Legalizado. <br>
                                 3.  Certificado Profesional. <br>
                                 4.  Acta de Examen Profesional. <br>
                                 5.  Título Profesional. <br>
                                 6.  Cédula de Licenciatura. <br>
                                 7.  Pagos vigentes en el Diario Oficial de la Secretaría de Hacienda del Estado.
                                 <br> <br>
                            <strong>EGRESADOS (POSGRADO)</strong><br><br>Después de egresar; elije como obtener tu Grado de maestro:<br><br>1.  Curso de profundización temática. <br>
                       Estrategia formativa donde el egresado amplía su conocimiento en ejes temáticos de su formación profesional, que le permite obtener y demostrar conocimientos necesarios y actualizados. <br> <br>

                       2.  Acreditar el 50% del plan de Doctorado. <br>
                       Tener cursado y acreditado el 50% de créditos de Doctorado. <br> <br>

                       3.  Examen general de conocimientos. <br>
                       Examen general de calidad profesional aplicado por el Centro Nacional de Evaluación.
                       <br> <br>

                       4.  Caso práctico.  <br>
                       Investigación escrita donde el egresado expone un tema a fin a su perfil profesional, evaluando resultados. <br> <br>

                       5.  Por Promedio General de calificaciones.  <br>
                       Tener un promedio mínimo de 9.0 siempre y cuando no hayan reprobado ninguna materia y no hayan realizado cambio institución <br> <br>

                       No olvides verificar la integración de tu expediente académico con la siguiente documentación: <br> <br>

                       a.  Acta de Nacimiento Actualizada. <br>
                       b.  Certificado de Licenciatura. <br>
                       c.  Acta de Examen Profesional de Licenciatura. <br>
                       d.  Título de Licenciatura. <br>
                       e.  Cédula de Licenciatura. <br>
                       f.  Certificado de Maestría. <br>
                       g.  Acta de Examen de Maestría.
                   </ul>
                   </div>
                </li>    
            
            	<li id="tab3">
                    <div class="sixteen columns ">   
                        <div class="header-oferta licenciatura">
                            <h3>Finanzas</h3>
                            <div class="trans"></div>
                        </div>
                        <ul>
                          <p align="justify">
                            En el departamento de Finanzas Estudiantiles CEPROG, además de acudir directamente a caja con pago en efectivo o tarjeta bancaria, puedes elegir cualquiera de nuestras 5 opciones más de pago. A continuación te explicamos el proceso para cada una.
                          <br><br>1.  Depósito Bancario. <br>
                        Solicita en caja el número de cuenta y/o tus referencias personales, para realizar tu depósito y posteriormente canjear el comprobante bancario por tu ticket de pago institucional.
                        <br>
                        <br>
                        2.  Transferencia Electrónica. <br>
                        Al realizar tu pago por este medio; no olvides canjear tu comprobante de la transferencia por el ticket de pago institucional.
                        <br>
                        <br>
                        3.  Cargo automático. <br>
                        Deberás solicitar el formato correspondiente en el departamento de Finanzas o descargarlo desde <a href="">AQUI</a>, llenarlo debidamente y entregarlo.
                        <br>
                        <br>
                        4.  En Línea. <br>
                        Desde el sitio web Santander: <a href="">Paga la Escuela</a>, crea tu registro y realiza tu pago, imprimiendo tu comprobante, el cual posteriormente debes canjear por tu ticket de pago institucional en caja.
                        <br>
                        <br>
                        5.  Pago por vía Telefónica. <br>
                        Sólo tienes que llamar al (01) 800 062 0699, donde debes elegir la opción 1, y proporcionar correctamente tus datos contenidos en la referencia que previamente debes solicitar en el departamento de caja, como son: 
                        <br><br>
                            a. Nombre del alumno.<br>
                            b.  Nombre de la Universidad.<br>
                            c.  Referencia.<br>
                        <br>
                        IMPORTANTE. Si requieres facturar tu pago, es necesario acudas el mismo día en que lo realizaste a la dirección de Finanzas, con los siguientes requisitos.<br>- Si es primera vez: <br> 
                          • Ticket de Pago efectuado en el mismo día. 
                          <br>• RFC.                            
                          <br>• Correo electrónico actual. 
                      </p></ul>
                    </div>
                </li> 
      
                <li id="tab4" class="active">
                  <div class="sixteen columns ">   
                    <div class="header-oferta doctorado">
                            <h3>Control Escolar</h3>
                            <div class="trans"></div>
                    </div>
                    <p align="justify">Universidad CEPROG, en función de los procesos y trámites académicos que como alumno necesitas realizar durante tu formación académica, te brinda la siguiente información.
                           <br><br>
                      Para obtener tu CERTIFICADO DE LICENCIATURA, antes de finalizar tus estudios, debes verificar que tu expediente académico este integrado por la siguiente documentación: <br><br>
                      1. Acta de Nacimiento Actualizada en el año en que vas a egresar. <br>
                           2.  Certificado de Bachillerato Legalizado; y verificado, en caso de ser foráneo a Chiapas. <br>
                           3.  Copia de CURP. <br>
                           4.  Pagos vigentes en el Diario Oficial de la Secretaría de Hacienda del Estado. <br>
                           5.  Fotografías con características señaladas por la reglamentación de la SE. <br>
                           6.  En caso de ser alumno inscrito por Dictamen, tener en expediente Acta de examen interno/externo. <br> <br>

                           ***Además de entregar el siguiente Formato, con tu información actualizada.
                           <a href="">Formato</a> <br><br>
                      <strong>SERVICIO SOCIAL</strong><br><br>

                         - ¿Qué es el Servicio Social? <br>

                         Es el trabajo temporal y obligatorio que ejecuten y presten los estudiantes en interés de la sociedad y el estado.Es una actividad eminentemente formativa y de servicio, es decir, por un lado afirma y amplía la información académica del estudiante y, por otro, fomenta en él una conciencia de solidaridad con la sociedad a la que pertenece.
                         <br> <br>

                         - ¿Por qué realizar el Servicio Social? <br> 

                         Para que los estudiantes puedan obtener el título o grado académico a que corresponda. El Servicio Social se presta con carácter temporal y obligatorio; además, es un requisito académico indispensable para la titulación.
                         <br> <br>

                         - ¿Dónde prestar el Servicio Social? <br> 

                         En cualquier dependencia de gobierno o sector social, en un área de acuerdo al perfil de tu carrera.
                         <br> <br>

                         - ¿Cuánto tardará el periodo de Servicio Social? <br> 

                         Cualquiera que sea la carrera que curses, tendrás que realizar el servicio social en un tiempo no menor de seis meses, ni mayor de dos años; y cubrir 480 horas como mínimo.
                         <br> <br>

                         - PRIMERA ETAPA...Buscar una empresa. <br><br>

                         Antes de iniciar tu proceso de Servicio Social es necesario que solicites a Control Escolar: <br> 

                         • Constancia del 70% de créditos aprobados. <br>
                         • Calendario de periodos autorizados para tramitar el Servicio Social. <br>
                         • Descargar los formatos que estarás usando en este proceso.
                         <a href="">Formatos</a> <br><br>

                         1)  Si eliges una Institución de gobierno debes entregar la siguiente documentación:
                         <br><br> 

                         4.  Entregar Formato de Asignación SS-1. <br>
                         5.  Carta de aceptación de Servicio Social expedida por la institución (Membretada, Firmada y Sellada), dirigida a: C.P. Mario César Ramírez Moreno - Rector Institucional de CEPROG, con las siguientes características referentes al alumno:
                         <br> <br>

                         1.  Nombre Completo. <br>
                         2.  Matrícula. <br>
                         3.  Carrera. <br> 
                         4.  Modalidad. <br>
                         5.  Periodo del Servicio (día/mes/año). <br>
                         6.  Duración del programa (480 hrs). <br> <br>

                         2)  Si eliges una Empresa Privada debes entregar la siguiente documentación:
                         <br> <br>
                         • Entregar Formato SE-SMR-04(Secretaría de Economía) <br> 
                         • Entregar Formato Asignación(SS-1) <br> 
                         • Carta de aceptación de Servicio Social: <br>  
                         1.  Expedida por la universidad <br>
                         2.  Expedida por la empresa. <br> <br>

                         Dirigida a C.P. Mario César Ramírez Moreno – Rector Institucional de CEPROG, con las siguientes características referentes al alumno:
                         <br> <br>
                         a.  Nombre Completo. <br>
                         b.  Matrícula. <br>
                         c.  Carrera. <br>
                         d.  Modalidad. <br>
                         e.  Periodo del Servicio (día/mes/año). <br>
                         f.  Duración del programa (480 hrs). <br> <br>

                         Servicio Social Activo. Para que el alumno sea candidato a este tipo de servicio debe contar con:
                         <br> 
                         - Una antigüedad mínima de 2 años en una institución de gobierno. <br> 
                         - Constancia Laboral(Membretada, Firmada y Sellada), dirigida a: C.P. Mario César Ramírez Moreno - Rector Institucional de CEPROG, con las siguientes características referentes al alumno 
                         <br> <br>
                         1.  Nombre Completo. <br>
                         2.  Matrícula. <br>
                         3.  Carrera. <br>
                         4.  Modalidad. <br>
                         5.  Antigüedad y puesto, integrada con: <br>
                         a.  Copia de Acta de Nacimiento. <br>
                          b.  Copia del último cheque o nómina. <br> <br>

                          SEGUNDA ETAPA...Entregar reportes trimestrales.
                          <br> <br>
                          Al cumplir los primeros 3 meses de haber iniciado el Servicio Social tienes la obligación de entregar tu primer reporte trimestral en tiempo y forma; este proceso se realiza dos veces a lo largo del periodo de Servicio Social.
                          <br> <br>
                          Para tu primer trimestre debes entregar los siguientes formatos:
                          <br>
                          -  Carátula de Presentación (SS-2). Este formato contiene el periodo de asignación (dd de mes año al dd de mes año) y la fecha del trimestre (dd de mes año). <br>
                          -  Control de asistencias (SS-3). <br>
                          -  Informe de actividades (SS-4). <br> <br>

                          *Esta parte del proceso se repite una vez más, debido a que el Servicio Social consta de 2 trimestres; con formatos firmados y sellados previamente por la institución.
                          <br> <br>

                          TERCERA ETAPA...Liberación del Servicio Social.
                          <br> <br>

                          Una vez concluidos los seis meses de Servicio Social debes concluir la entrega de reportes con el reporte de segundo trimestre, anexándole los siguientes formatos:
                          <br> <br>

                          -  Pago por concepto de Servicio Social, articulo 39. Fracción XVII emitidas por Secretaría de Hacienda. <br>
                          -  Informe Final de actividades (SS-5). <br>
                          - Carta de Liberación, dirigida a: C.P. Mario César Ramírez Moreno - Rector Institucional de CEPROG, con las siguientes características referentes al alumno:
                          <br> <br>
                          1. Nombre Completo. <br>
                          2. Matrícula. <br>
                          3. Carrera. <br>
                          4. Modalidad. <br> 
                          5. Periodo del Servicio Social (día/mes/año). <br>
                          6. Horas del programa (480 hrs). <br>
                          -  Y anexar Copia del Acta de Nacimiento.  
                </div>
              </li> 
                  </li>
  </ul>
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