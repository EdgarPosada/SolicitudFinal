
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Application form</title>
        <meta charset="utf-8">



<!--link rel="shortcut icon" href="~/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"-->
        
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/Scripts/html5shiv?v=RE_gJ9EUPkTBKS71UlDP_lykWxpC3LqjM3UwakH-oGQ1"></script>

<![endif]-->
        
<style>
    @-webkit-viewport { width: device-width; }
    @-moz-viewport { width: device-width; }
    @-ms-viewport { width: device-width; }
    @-o-viewport { width: device-width; }
    @viewport { width: device-width; }
</style>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
<link href="Content/Examples0572.css?v=qzNDGMSSU2446I1AfRDdl_9r4ONra-Bx07ahjN2Cuz81" rel="stylesheet"/>
	<link href="css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
	<script>
	$(function() {

		$( "#fecha" ).datepicker({
			inline: false
		});

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>

    </head>

    <body data-spy="scroll" data-target="#lefthand" data-offset="60" style="">
      

        <div id="topbar" class="navbar navbar-fixed-top" style="margin-top:25px;">
            <div class="navbar-inner container">
                <h1 style="margin-left:20px;">
                    <img src="images/sanco_logo.png" width="180" alt="sanco_logo"/>
                    Formulario de Aplicación
                </h1> 
                <h1 style="margin-top: "></h1>
                
            </div>
        </div><br><br>
        
        <div class="sitewrapper container" style="margin-top:25px;">
            

<div class="content">
    <div class="row-fluid">
        <div class="span12 main" role="main" >
            <section id="basic-form" >
                <form id="form-2" method="post" action="datospersonales.php">
                    <div id="wizard-2" style="margin-left:20px;">
                        <h3>Información Personal</h3>
                        <section>
                            
                            <div>
                                <div style="float:left;margin-left:20px;">
                      
                            <label for="userName">Correo Electrónico</label>
                            <input id="userName" name="correo" type="email" class="required">
                            <label for="userName">Apellido Paterno</label>
                            <input id="userName" name="paterno" type="text" class="required">
                            <label for="userName">Apellido Materno</label>
                            <input id="userName" name="materno" type="text" class="required">
                            <label for="userName">Nombre(s)</label>
                            <input id="userName" name="nombre" type="text" class="required">
                         
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                <label for="userName">Fecha de Nacimiento</label>
                                <p><input type="date" id="fecha" name="fechanac" required=""></p>
                            <label for="userName">Nacionalidad</label>
                            <input id="userName" name="nacionalidad" type="text" class="required">
                            <label for="userName">Género</label>
                            <br>
                            <select name="genero" required="">
                         <option value="masculino">Masculino</option>
                         <option value="femenino">Femenino</option>
                    
                         </select>
                            <br>
                            <label for="userName">Estado Civil</label><br>
                            <select name="civil" required="">
                         <option value="soltero">Soltero(a)</option>
                         <option value="casado">Casado(a)</option>
                         <option value="union libre">En unión libre</option>
                         </select>
  
                            
                                   </div>
                            </div>
                       
                            
                            
                           
                            
                            
                        
                        </section>

                        <h3>Datos de Contacto</h3>
                        <section>
                            <div> 
                                <div style="float:left;margin-left:20px;">
                             
                            <label for="userName">Calle</label>
                            <input id="userName" name="calle" type="text" class="required">
                            <label for="userName">Número</label>
                            <input id="userName" name="numero" type="text" class="required">
                            <label for="userName">Colonia</label>
                            <input id="userName" name="colonia" type="text" class="required">
                            <label for="userName">Código Postal</label>
                            <input id="userName" name="cp" type="text" >
                            <label for="userName">Estado</label>
                            <input id="userName" name="estado" type="text" class="required">
                            
                         
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                <label for="userName">Municipio</label>
                            <input id="userName" name="municipio" type="text" class="required">
                            <label for="userName">Nombre de Contacto (1)  *amigo/familiar</label>
                            <input id="userName" name="nombrecto1" type="text" class="required">
                            <label for="userName">Teléfono de Contacto</label>
                            <input id="userName" name="telefonocto1" type="text" class="required">
                            <label for="userName">Nombre de Contacto (2) *amigo/familiar</label>
                            <input id="userName" name="nombrecto2" type="text" >
                                 <label for="userName">Teléfono de Contacto</label>
                            <input id="userName" name="telefonocto2" type="text" >
                                   </div>
                            </div>
                        </section>

                        <h3>Historial Académico</h3>
                        <section>
                          <div>
                                <div style="float:left;margin-left:20px;">
                      
                            <label for="userName">Máximo Grado de Estudios</label>
                            <br>
                            <select name="gradoEstudios" required="required">
                         <option value="primaria">Primaria</option>
                          <option value="secundaria">Secundaria</option>
                           <option value="preparatoria">Preparatoria</option>
                            <option value="licenciatura">Licenciatura</option>
                       
                         </select>
                            <br>
                            <label for="userName">Institución Educativa</label>
                            <input id="userName" name="institucion" type="text" >
                            <label for="userName">Status</label><br>
                                  <select name="edoacademico">
                         <option value="pasante">Pasante</option>
                          <option value="titulado">Titulado</option>
                           <option value="trunco">Trunco</option>
                            <option value="constancia">Constancia</option>
                       
                         </select>
                            <br>
                                     <label for="userName">Nivel de Inglés</label><br>
                                     <select name="ingles" required="required">
                         <option value="basico">Básico</option>
                          <option value="intermedio">Intermedio</option>
                           <option value="avanzado">Avanzado</option>
                            <option value="lengua materna">Lengua Materna</option>
                      
                       
                                  </select><br>
                            
                            
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                <label for="userName">Actualmente Estudiando</label>
                                <br>
                                <select name="estudia" required="required">
                         <option value="si">Sí</option>
                          <option value="no">No</option>
                        
                       
                         </select>
              
                                <br>
                            <label for="userName">Otros Estudios</label>
                            <input id="userName" name="otrosestudios" type="text" >
                            <label for="userName">Habilidades</label>
                            <input id="userName" name="habilidades" type="text" >
                                   </div>
                            </div>
                        </section>

                        <h3>Historial Laboral</h3>
                        <section>
<div>
                                <div style="float:left;margin-left:20px;">
                      
                            <label for="userName">Empleo Anterior (1)</label>
                            <input id="userName" name="anterior1" type="text" class="required">
                            <label for="userName">Puesto</label>
                            <input id="userName" name="puesto1" type="text" class="required">
                            <label for="userName">Salario (mensual)</label>
                            <input id="userName" name="salario1" type="text" class="required">
                            <label for="userName">Empleo Anterior (2)</label>
                            <input id="userName" name="anterior2" type="text" >
                         
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                <label for="userName">Puesto</label>
                            <input id="userName" name="puesto2" type="text" >
                            <label for="userName">Salario (mensual)</label>
                            <input id="userName" name="salario2" type="text" >
                            <label for="userName">¿Actualmente Trabaja?</label>
                            
                            <br>
                            <select name="trabaja" required="required">
                         <option value="no">No</option>
                         <option value="si">Sí</option>
                        
                        
                       
                         </select>
                            <br>
                            <label for="userName">Disponibilidad de Horario</label>
                             
                            <br>
                            <select name="disponibilidad" required="required">
                                                              
                         <option value="medio tiempo">Medio Tiempo</option>
                         <option value="tiempo completo">Tiempo Completo</option>
                         <option value="fin de semana">Fin de Semana</option>
                        
                        
                       
                         </select>
                            <br>
                            
                            
                            
                            
                                   </div>
                            </div>       
                        
                        </section>
		
						
                    </div>
                </form>
            </section>
           
    

 

   
        </div>
    </div>
</div>


        </div>
  

<script src="Scripts/Examples5b39?v=XvU_aS1mq8EiFCe5Uaq4PzE_wtAgeh1PITjMYRRWQ2A1"></script>

        
    <script>
        $(function ()
        {
            $("#lefthand-nav").affix({
                offset: {
                    top: function ()
                    {
                        return $("#topbar").outerHeight() + $("#banner").outerHeight();
                    }
                }
            });

            prettyPrint();

            function errorPlacement(error, element)
            {
                element.before(error);

                //element.popover({
                //    content: error.text(),
                //    placement: function ()
                //    {
                //        return (element.parents(".content").width() >= 550) ? "right" : "top";
                //    },
                //    trigger: "focus hover"
                //});
                //$(".popover-content", element.next(".popover")).empty().prepend(error);
            }

            $("#wizard-1").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                autoFocus: true
            });

            $("#form-2").validate({
                errorPlacement: errorPlacement,
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });

            $("#wizard-2").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    $("#form-2").validate().settings.ignore = ":disabled,:hidden";
                    return $("#form-2").valid();
                },
                onFinishing: function (event, currentIndex)
                {
                    $("#form-2").validate().settings.ignore = ":disabled";
                    return $("#form-2").valid();
                },
                onFinished: function (event, currentIndex)
                {
                    
                    
   f=document.getElementById('form-2');
   if(f){
     f.submit();
     }
   
                }
            });

            $("#form-3").steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid next action on "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age-2").val()) < 18)
                    {
                        return false;
                    }

                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $("#form-3 .body:eq(" + newIndex + ") label.error").remove();
                        $("#form-3 .body:eq(" + newIndex + ") .error").removeClass("error");
                    }

                    $("#form-3").validate().settings.ignore = ":disabled,:hidden";
                    return $("#form-3").valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Used to skip the "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
                    {
                        $("#form-3").steps("next");
                    }

                    // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $("#form-3").steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    $("#form-3").validate().settings.ignore = ":disabled";
                    return $("#form-3").valid();
                },
                onFinished: function (event, currentIndex)
                {
                    alert("Submitted!");
                }
            }).validate({
                errorPlacement: errorPlacement,
                rules: {
                    confirm: {
                        equalTo: "#password-2"
                    }
                }
            });

            $("#wizard-4").steps({
                headerTag: "h3",
                bodyTag: "section",
                enableAllSteps: true,
                enablePagination: false
            });

            $("#wizard-5").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                enableFinishButton: false,
                enablePagination: false,
                enableAllSteps: true,
                titleTemplate: "#title#",
                cssClass: "tabcontrol"
            });

            $("#wizard-6").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical"

            });

            $("#wizard-7").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slide"
            });

            $("#wizard-8").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "fade"
            });
        });
    </script>
    </body>
</html>