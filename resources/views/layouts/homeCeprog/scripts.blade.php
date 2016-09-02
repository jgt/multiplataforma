<script type="text/javascript" src="{{ asset('/plugins/ceprog/jquery-1.9.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/plugins/ceprog/jquery.fractionslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('/plugins/ceprog/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('/plugins/ceprog/index.js')}}"></script>
<script type="text/javascript">

            //Estos es necesario para funciones el responsivo
            var seleccion_menu = true;

            jQuery(document).ready(function()
            {
                jQuery(".MenuBurger").click(function()
                {
                    if(seleccion_menu)
                    {
                        $(".MainMenu-ListMenu").css({display: "block"});
                        $(".MainMenu-ListMenu").animate({right: "10px"},250);
                        seleccion_menu=false;
                    }
                    else
                    {
                        $(".MainMenu-ListMenu").animate({right: "-600px"},250);
                        $(".MainMenu-ListMenu").css({display: "none"});
                        seleccion_menu=true;
                    }
                });
            });
        </script>

