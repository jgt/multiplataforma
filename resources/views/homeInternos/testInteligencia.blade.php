@extends('layouts.ceprogTemplate.homeInterno')


@section('content_testInteligencia')

	
	<div class="header-sitio interno">
				
            <div class="container">				
                  <div class="sixteen columns">
                	<a href="{{ route('ceprog') }}"><img src="image/mensaje_rector/logos/ceprog_logo_header.png" alt="CEPROG" /></a>
                  </div>                
                  <nav>
                    <ul id="navigation" class="slimmenu">
                        <li><a href="#">Nosotros</a>  
                        	<ul>
                                <li><a class="outside" href="{{ route('mision') }}">Misión, Visión</a></li>
                                <li><a class="outside" href="{{ route('mensajeRector') }}">Mensaje del Rector</a></li>
                            </ul>                      	
                        </li>                        
                      <!-- <li><a class="outside" href="index.html#noticias">Noticias</a></li>    -->
                    </ul>
                </nav>

            </div>
    
    </div>
    
    <div id="separator6">
		<div class="titulo-principal">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p>Test de Inteligencias Multiples</p>
            </div>
            </div>
        </div>
		<div class="subtitulo">
        	<div class="container">				
			<div class="sixteen columns ">
	        	<p><a href="{{ route('ceprog') }}">Inicio</a> / <span>Test de Inteligencias Multiples</span></p>
            </div>
            </div>
        </div>
        
    </div>    

	<div class="contacto-cont">
        <div class="container principal">
              
                            
             <div id="seccionForma" class="fourteen columns offset-by-one">
             
                    <div id="err-timedout" class="alert error full">¡Error! Tiempo de espera agotado. Intente más tarde</div>
                    <div id="error"  class="alert error full">Lo sentimos, ocurrió un error. Por favor intente más tarde.</div>
                    <div id="email-success" class="alert success full">Su comentario fue enviado correctamente. ¡Gracias!</div>
             
                    <p>Universidad CEPROG en cualquiera de nuestros programas académicos. También, te invitamos a realizar el siguiente Test de Inteligencias múltiples a través del cual podremos ayudarte a descubrir tu área de formación profesional. Si tienes alguna duda escríbenos a <a href="wwww.contacto@uceprog.edu.mx">contacto@uceprog.edu.mx</a>

                    <span class="campos-req">*Campos requeridos</span>
                    </p>
                   <form id="ajax-form" action="submit.php" method="post">
                                    <div class="row">
                                        <div class="fourteen columns alpha">
                                            <input id="name" type="text" name="name" placeholder="Nombre completo*" />
                                            <div id="err-name" class="alert error">*Por favor, introduzca tu nombre completo</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="seven columns alpha">
                                            <input id="email" type="text" name="email" placeholder="E-mail*" />
                                            <div id="err-email" class="alert error">*Por favor, introduzca un correo electrónico</div>
                                            <div id="err-emailvld" class="alert error">¡Error! Por favor introduzca un correo electrónico válido</div>
                                        </div>
                                        <div class="seven columns omega">
                                            <input id="phone" type="text" name="phone" placeholder="Teléfono" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="fourteen columns alpha">
                                            <div class="styled-select">
                                             <select id="motivo" name="motivo">
                                                  <option value="0" selected>-- Motivo de contacto* --</option>
                                                  <option value="1">Solicitar información de opción educativa</option>
                                                  <option value="2">Enviar comentario</option>
                                             </select> 
                                             </div>
                                             <div id="err-motivo" class="alert error">*Por favor, seleccione un motivo de contacto</div>
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="fourteen columns alpha">
                                            <div class="styled-select">
                                             <select id="opcionEducativa" name="opcionEducativa">
                                                  <option value="0" selected>Licenciaturas</option>
                                                  <option value="1">Postgrados</option>
                                                  <option value="2">Doctorado</option>
                                             </select> 
                                             </div>
                                            <textarea id="message" name="message" placeholder="Escribe tu comentario...*" style="height: 98px;"></textarea>
                                             <div id="err-message" class="alert error">*Por favor, introduzca un comentario</div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="four columns offset-by-three alpha">                                            
                                            <a href="#" type="submit" id="send2" class="button"><span>Enviar</span></a>
                                        </div>
                                        <div class="four columns omega">
                                            <a href="#" id="cancelar" class="button secundario"><span>Cancelar</span></a>
                                        </div>
                                    </div>                                    
                    </form>
             </div>
            </div>

     <form id="ajax-form" action="" method="post">
	<div class="Multiples">
                 <h3>Instrucciones</h3>
                 <p>Coloca en la casilla de la izquierda el número que consideres correcto de acuerdo a las siguientes opciones: </p>
                </div>

                <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>1. Prefiero hacer un mapa que explicarle a alguien como tiene que llegar.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>2. Si estoy enojado(a) o contento(a) generalmente sé exactamente por qué.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>3. Sé tocar (o antes sabía tocar) un instrumento musical.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>4. Asocio la música con mis estados de ánimo.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>5. Puedo sumar o multiplicar mentalmente con mucha rapidez.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>6. Puedo ayudar a un amigo a manejar sus sentimientos porque yo lo pude hacer antes en relación a sentimientos parecidos.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>7. Me gusta trabajar con calculadoras y computadores.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>8. Aprendo rápido a bailar un baile nuevo.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>9. Puedo decir lo que pienso una discusión o debate.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>10. Disfruto de una buena charla, discurso o sermón.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>11. Siempre distingo el norte del sur, esté donde esté.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>12. Me gusta reunir grupos de personas en una fiesta o en un evento especial.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>13. La vida me parece vacía sin música.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>14. Siempre entiendo los gráficos que vienen en las instrucciones de equipos o instrumentos.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>15. Me gusta hacer rompecabezas y entretenerme con juegos electrónicos.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>16. Me fue fácil aprender a andar en bicicleta. (o patines).</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>17. Me enojo cuando oigo una discusión o una afirmación que perece ilógica.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>18. Soy capaz de convencer a otros que sigan mis planes.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>19. Tengo buen sentido de equilibrio y coordinación.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>20. Con frecuencia veo configuraciones y relaciones entre números con más rapidez y facilidad que otros.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>21. Me gusta construir modelos (o hacer esculturas).</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>22. Tengo agudeza para encontrar el significado de las palabras.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>23. Puedo mirar un objeto de una manera y con la misma facilidad verlo de otra manera.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>24. Con frecuencia hago la conexión entre una pieza de música y algún evento de mi vida.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>25. Me gusta trabajar con números y figuras.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>26. Me gusta sentarme silenciosamente y reflexionar sobre mis sentimientos íntimos.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>27. Con sólo mirar la forma de construcciones y estructuras me siento a gusto.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>28. Me gusta tararear, silbar y cantar en la ducha o cuando estoy solo(a).</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>29. Soy bueno(a) para el atletismo.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>30. Me gusta escribir cartas detalladas a mis amigos.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>31. Generalmente me doy cuenta de la expresión que tengo en la cara.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>32. Me doy cuenta de las expresiones en la cara de otras personas.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>33. Me mantengo “en contacto” con mis estados de ánimo. No me cuesta identificarlos.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>34. Me doy cuenta de los estados de ánimo de otros.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="four columns" id="preguntas">
                        <h6>35. Me doy cuenta bastante bien de lo que otros piensan de mí.</h6>
                        <ul>
                            <li><input type="checkbox" name="option2" value="Butter">5) Siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">4) Casi siempre</li>
                            <li><input type="checkbox" name="option2" value="Butter">3) Algunas Veces</li>
                            <li><input type="checkbox" name="option2" value="Butter">2) Casi Nunca</li>
                            <li><input type="checkbox" name="option2" value="Butter">1) Nunca</li>

                        </ul>
                    </div>
                    <div class="button">
                           <a href="#" id="send3" class="button"><span>Enviar</span></a>
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
					<p><span></span>Sitio desarrollado por BrainBoox</p>
				</div>
			</div>
			
		</div> <!-- end container -->
	</div> <!-- end contact -->

@stop