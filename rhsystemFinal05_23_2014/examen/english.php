
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

        
<style>
  
    
</style>

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
        <div class="span12 main" role="main">
            <section id="basic-form">
                <form id="form-2" action="#">
                    <div id="wizard-2" style="margin-left:20px;">
                        <h3>Información Personal</h3>
                        <section>
                            
                            <div>
                                <div style="float:left;margin-left:0px;">
                          
                                    <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2


                      
                         
                                </div>    
                                
                                   <div style="float:left;margin-left:20px;">
                    
                                     <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                            
                                   </div>
                            </div>
                       
                        
                        </section>

                        <h3>Datos de Contacto</h3>
                        <section>
                            <div> 
                                <div style="float:left;margin-left:20px;">
                                                                <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                         
                            
                         
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                                  <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                                   </div>
                            </div>
                        </section>

                        <h3>Historial Académico</h3>
                        <section>
                          <div>
                                <div style="float:left;margin-left:20px;">
                      
                                                              <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                            
                            
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                                                  <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                                   </div>
                            </div>
                        </section>

                        <h3>Historial Laboral</h3>
                        <section>
<div>
                                <div style="float:left;margin-left:20px;">
                                   
                                                                   <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                                    
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                         
                            
                                                                        <b>Question</b>    
<br>
<input type="radio" name="group1" value="Butter" checked> Answer 1
<input type="radio" name="group1" value="Cheese"> Answer 2
                            
                            
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
                    alert("Submitted!");
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