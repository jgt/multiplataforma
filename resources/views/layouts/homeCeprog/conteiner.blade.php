<section class="Menu-Container">
          <div class="MainMenu-Uceprog">
            <div class="MenuBurger">
                <a class="MenuResponsive MenuResponsive--Interior"></a>
            </div>
                        <ul class="MainMenu-Item MainMenu-ListMenu">
                            <li class="MainMenu-List check"><a href="#" class="MainMenu-Item MainMenu-List--Before Main-Nosotros">Nosotros</a>
                                <ul class="fadeIn MainMenu-Submenu">
                                    <li class="MainMenu--ListSub"><a href="{{ route('mision') }}">misión/visión</a></li>
                                    <li class="MainMenu--ListSub"><a href="{{ route('mensajeRector') }}">mensaje del rector</a></li>
                                    </li>
                                </ul>
                            @if(! Auth::user())
                            <li class="MainMenu-List"><a href="{{ url('/login') }}" class="MainMenu-Item" target="_black">Portal uc</a></li>
                            @elseif(Auth::user())
                            <li class="MainMenu-List"><a href="{{ url('/home') }}" class="MainMenu-Item" target="_black">Portal uc</a></li>
                            @endif
                            <li class="MainMenu-List"><a href="https://www.pagalaescuela.santander.com.mx/pagalaescuela/jsp/inicio.jsp" class="MainMenu-Item" target="_black">pagos</a></li>
                    <li class="MainMenu-List"><a href="https://webmail.1and1.com/" class="MainMenu-Item" target="_black">email</a></li>
                        </ul>
                </div>
        </section>
