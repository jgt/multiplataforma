<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	@include('layouts.homeCeprog.mensaje_mision.htmlheader')
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- Javascript
	================================================== -->
	@include('layouts.homeCeprog.mensaje_mision.scripts')
</head>

<body>
    
    
    
    @yield('content_mision')
    @yield('content_mensaje')
    @yield('content_admisiones')
    
    @yield('content_palenqueHome')
    @yield('content_galeriaPalenque')
    @yield('content_servicioGeneral')
    @yield('content_contactoPalenque')
    @yield('content_ofertaPalenque')

    <!--
    
    Licenciaturas Palenque.

    -->

    <!--====================================================================== -->

    @yield('content_adminEmpresas')
    @yield('content_arquitectura')
    @yield('content_adminTuristicas')
    @yield('content_contaduriaPublica')
    @yield('content_derecho')
    @yield('content_enfermeria')
    @yield('content_informatica')
    @yield('content_ingenieriaCivil')
    @yield('content_ingenieriaTelematica')
    @yield('content_psicologiaGeneral')


    <!--
    
    Maestrias Palenque

    -->

    <!--====================================================================== -->

    @yield('content_mAdministracion')
    @yield('content_maestriaCienciaEducacion')
    @yield('content_maestriaComputacion')
    @yield('content_maestriaDerecho')
    @yield('content_maestriaDerechoPenal')
    @yield('content_maestriaFinanzas')

<!--====================================================================== -->

    <!--
    
    Doctorado Palenque

    -->

    @yield('content_doctoradoEducacion')


<!--====================================================================== -->

    @yield('content_reformaHome')
    @yield('content_galeriaReforma')
    @yield('content_servicioReforma')
    @yield('content_contactoReforma')
    @yield('content_ofertaReforma')

    <!--

    Licenciaturas Reforma

    -->

    <!--====================================================================== -->

    @yield('content_adminEmpresasReforma')
    @yield('content_contaduriaPublicaReforma')
    @yield('content_informaticaReforma')
    @yield('content_psicologiaGeneralReforma')
    @yield('content_derechoReforma')

    <!--====================================================================== -->

    <!--
    
    Maestrias Reforma

    -->

    @yield('content_cienciaEducacionReforma')

    
<!--====================================================================== -->

    @yield('content_sancristobalHome')
    @yield('content_galeriaSancristobal')
    @yield('content_servicioSancristobal')
    @yield('content_contactoSancristobal')
    @yield('content_ofertaSancristobal')

<!--====================================================================== -->

    <!--
    
    Licenciaturas Sancristobal

    -->

     @yield('content_adminEmpresasSancristobal')
     @yield('content_adminEmpresasTuristicasSancristobal')
     @yield('content_arquitecturaSancristobal')
     @yield('content_contaduriaPublicaSancristobal')
     @yield('content_derechoSancristobal')
     @yield('content_informaticaSancristobal')
     @yield('content_psicologiaGeneralSancristobal')


<!--====================================================================== -->

    <!--
    
    Maestrias Sancristobal

    -->

    @yield('content_maestriaAdministracionSancristobal')
    @yield('content_maestriaComputacionSancristobal')
    @yield('content_maestriaDerechoConstitucionalSancristobal')
    @yield('content_maestriaFinanzasSancristobal')


<!--====================================================================== -->

    @yield('content_tuxtlaHome')
    @yield('content_galeriaTuxtla')
    @yield('content_servicioTuxtla')
    @yield('content_contactoTuxtla')
    @yield('content_ofertaTuxtla')

    <!--
    
    Preparatoria Tuxtla

    -->
    
    


    <!--====================================================================== -->
    
	
	<!-- Contact Form
	================================================== -->
    
    @include('layouts.homeCeprog.mensaje_mision.htmlheader')

    @include('layouts.homeCeprog.mensaje_mision.scripts')
    
    <script type="text/javascript">
        $('ul.slimmenu').slimmenu({
            resizeWidth: '800',
            collapserTitle: 'Menu Principal',
            easingEffect:'easeInOutQuint',
            animSpeed:'medium',
            indentChildren: true,
            childrenIndenter: '&raquo;'
        });
		
    </script>
        
</body>
</html>