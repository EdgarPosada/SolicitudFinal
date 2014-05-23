<!DOCTYPE html>
<html lang="en">
    <head>
               <title>Application form</title>
        <meta charset="utf-8">
        
<style>
    @-webkit-viewport { width: device-width; }
    @-moz-viewport { width: device-width; }
    @-ms-viewport { width: device-width; }
    @-o-viewport { width: device-width; }
    @viewport { width: device-width; }
</style>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
<link href="Content/ingles.css?v=qzNDGMSSU2446I1AfRDdl_9r4ONra-Bx07ahjN2Cuz81" rel="stylesheet"/>
<script src="js/validaRespuesta.js"></script> 
<script src="validaResp.js"></script> 
<link rel="stylesheet" href="Content/css/myCss.css" rel="stylesheet" >

        


    </head>

    <body data-spy="scroll" data-target="#lefthand" data-offset="60" style="">
      

        <div id="topbar" class="navbar navbar-fixed-top" style="margin-top:25px;">
            <div class="navbar-inner container">
                <h1 style="margin-left:20px;">
                    <img src="images/sanco_logo.png" width="180" alt="sanco_logo"/>
                    <strong>English Test:</strong> Select the correct answer
                </h1> 
            </div>
        </div><br><br>
        
        <div class="sitewrapper container" style="margin-top:25px;">
            

<div class="content">
    <div class="row-fluid">
        <div class="span12 main" role="main">
            
            <section id="basic-form">
                <form id="form-2" action="validaRespuestas.php" method="POST" name="formu">
                    <div id="wizard-2" style="margin-left:20px;">
                        <!--Section One-->
                        <h3>Section One</h3>
                        <section>
                            <div>
                                <div style="float:left;margin-left:20px;  width: 50%;">
                                    <!--PREGUNTA 1-->
                                    <div style=" width: 7%;">
                                        <h3>1.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>Tom <span id="ans1" class="ans">___</span> English.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px;  position: relative; width: auto; height: auto;">are</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="que1" onclick="press()" type="radio" name="que1" value="are" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="que1" onclick="press()" type="radio" name="que1" value="am"  />
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">am</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="que1" onclick="press()" type="radio" name="que1" value="is" />
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">is</label>
                                    </div>
                                    
                                    <!--PREGUNTA 2-->
                                     <div style=" width: 7%;">
                                        <h3>2.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label><span id="ans2" class="ans">___</span> there a restaurant near here?</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">Have</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="que2" onclick="press2()" type="radio" name="que2" value="Have" required/>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="que2" onclick="press2()" type="radio" name="que2" value="Is"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">Is</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="que2" onclick="press2()" type="radio" name="que2" value="Do"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">Do</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 2-->
                                    
                                    <!--PREGUNTA 3-->
                                     <div style=" width: 7%;">
                                        <h3>3.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>I didn't <span id="ans3" class="ans">___</span> TV last night.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">not watched</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press3()" type="radio" name="que3" value="not watched" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press3()" type="radio" name="que3" value="watching"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">watching</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press3()" type="radio" name="que3" value="watch"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">watch</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 3-->
                                    
                                    <!--PREGUNTA 4-->
                                     <div style=" width: 7%;">
                                        <h3>4.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 70%; ">
                                        <label>Look! The bus <span id="ans4" class="ans">___</span>.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">is Leaving</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press4()" type="radio" name="que4" value="is Leaving" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press4()" type="radio" name="que4" value="leaving"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">leaving</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press4()" type="radio" name="que4" value="does leaving"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">does leaving</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 4-->
                                    
                                    <!--PREGUNTA 5-->
                                     <div style=" width: 7%;">
                                        <h3>5.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>I've never <span id="ans5" class="ans">___</span> to England.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">going</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press5()" type="radio" name="que5" value="going" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press5()" type="radio" name="que5" value="been"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">been</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press5()" type="radio" name="que5" value="go"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">go</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 5-->
                                    
                                    
                                </div>
                                
                                
                                
                                
                                <div style="float:left;margin-left:20px;">
                                    <!--PREGUNTA 6-->
                                    <div style=" width: 7%;">
                                        <h3>6.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 150%; ">
                                        <label><span id="ans6" class="ans">___</span> to go out to an Italian restaurant tonight?</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">Are you liking</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press6()" type="radio" name="que6" value="Are you liking" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press6()" type="radio" name="que6" value="You like"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">You like</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press6()" type="radio" name="que6" value="Would you like"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">Would you like</label>
                                    </div>
                                    <!-- FIN DE PREGUNTA 6-->
                                    
                                    <!--PREGUNTA 7-->
                                     <div style=" width: 7%; ">
                                        <h3>7.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 150%; ">
                                        <label>To get to the Post Office, <span id="ans7" class="ans">___</span> at the end of this road.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">turn right</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press7()" type="radio" name="que7" value="turn right" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press7()" type="radio" name="que7" value="go over"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">go over</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press7()" type="radio" name="que7" value="go past"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">go past</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 7-->
                                    
                                    <!--PREGUNTA 8-->
                                     <div style=" width: 7%; ">
                                        <h3>8.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 150%; ">
                                        <label>Excuse me <span id="ans8" class="ans">___</span> time please?</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">you have the</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press8()" type="radio" name="que8" value="you have the" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press8()" type="radio" name="que8" value="what is"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">what is</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press8()" type="radio" name="que8" value="have you got the"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">have you got the</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 8-->
                                    
                                    <!--PREGUNTA 9-->
                                     <div style=" width: 7%; ">
                                        <h3>9.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 150%; ">
                                        <label>Dubai has <span id="ans9" class="ans">___</span> building in the world.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">bigger</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press9()" type="radio" name="que9" value="bigger" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press9()" type="radio" name="que9" value="the most tall"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">the most tall</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press9()" type="radio" name="que9" value="the tallest"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">the tallest</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 9-->
                                    
                                    <!--PREGUNTA 10-->
                                     <div style=" width: 10%; position: relative; left: -6%; ">
                                        <h3>10.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 150%; ">
                                        <label>I think i've got a cold, i can't stop <span id="ans10" class="ans">___</span>.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">sneeze</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press10()" type="radio" name="que10" value="sneeze" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press10()" type="radio" name="que10" value="sneezing"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">sneezing</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press10()" type="radio" name="que10" value="to sneeze"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">to sneeze</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 10-->
                                </div>
                            </div>
                        </section>

                        
                        <!--Section 2 //////////////////////////////////////////////////////////////////////////////-->
                        
                        <h3>Section Two</h3>
                        <section>
                            <div> 
                                <div style="float:left;margin-left:20px; width: 50%;">
                             
                            <!--PREGUNTA 11-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>11.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>My parents <span id="ans11" class="ans">___</span> married since 1985.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">got</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press11()" type="radio" name="que11" value="got" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press11()" type="radio" name="que11" value="were"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">were</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press11()" type="radio" name="que11" value="have been"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">have been</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 11-->
                                    
                                    <!--PREGUNTA 12-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>12.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>Hurry up or we'll <span id="ans12" class="ans">___</span> our train!</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">lose</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press12()" type="radio" name="que12" value="lose" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press12()" type="radio" name="que12" value="miss"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">miss</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press12()" type="radio" name="que12" value="fail"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">fail</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 12-->
                                    
                                    <!--PREGUNTA 13-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>13.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>You're from New York, <span id="ans13" class="ans">___</span>.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">aren´t you</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press13()" type="radio" name="que13" value="aren´t you" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press13()" type="radio" name="que13" value="isn´t it"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">isn´t it</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press13()" type="radio" name="que13" value="don´t you"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">don´t you</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 13-->
                                    
                                    <!--PREGUNTA 14-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>14.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>I don't know many people <span id="ans14" class="ans">___</span> still smoke nowadays.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">they</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press14()" type="radio" name="que14" value="they" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press14()" type="radio" name="que14" value="who"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">who</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press14()" type="radio" name="que14" value="which"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">which</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 14-->
                                    
                                    <!--PREGUNTA 15-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>15.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>My mother <span id="ans15" class="ans">___</span> me to buy some tea.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">told</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press15()" type="radio" name="que15" value="told" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press15()" type="radio" name="que15" value="said"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">said</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press15()" type="radio" name="que15" value="spoke to"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">spoke to</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 15-->
                                </div>               
                                   <div style="float:left;margin-left:20px;">
                                       
                                       
                                <!--PREGUNTA 16-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>16.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>I wish i <span id="ans16" class="ans">___</span> get up early every morning.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">didn´t have to</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press16()" type="radio" name="que16" value="didn´t have to" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press16()" type="radio" name="que16" value="mustn´t"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">mustn´t</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press16()" type="radio" name="que16" value="hadn´t"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">hadn´t</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 16-->
                                    
                                    <!--PREGUNTA 17-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>17.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>You should <span id="ans17" class="ans">___</span> my advice!</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">do</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press17()" type="radio" name="que17" value="do" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press17()" type="radio" name="que17" value="take"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">take</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press17()" type="radio" name="que17" value="hear"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">hear</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 17-->
                                    
                                    <!--PREGUNTA 18-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>18.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>How much time do you spend <span id="ans18" class="ans">___</span> English?</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">to study</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press18()" type="radio" name="que18" value="to study" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press18()" type="radio" name="que18" value="studying"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">studying</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press18()" type="radio" name="que18" value="studied"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">studied</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 18-->
                                    
                                    <!--PREGUNTA 19-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>19.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>You should <span id="ans19" class="ans">___</span> for directions if you're lost.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">asked</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press19()" type="radio" name="que19" value="asked" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press19()" type="radio" name="que19" value="to ask"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">to ask</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press19()" type="radio" name="que19" value="ask"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">ask</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 19-->
                                    
                                    <!--PREGUNTA 20-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>20.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 110%; ">
                                        <label>Are you going to the cafe? <span id="ans20" class="ans">___</span> with you.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">i´ll come</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press20()" type="radio" name="que20" value="i´ll come" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press20()" type="radio" name="que20" value="i come"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">i come</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press20()" type="radio" name="que20" value="i can be coming"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">i can be coming</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 20-->
                                    
                                   </div>
                            </div>
                        </section>

                        
                        
                        <!--Section 3-->
                        <h3>Section Three</h3>
                        <section>
                          <div>
                                <div style="float:left; margin-left:20px; width: 50%;">
                      
                            <!--PREGUNTA 21-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>21.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>A lot of products <span id="ans21" class="ans">___</span> in China.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">are made</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press21()" type="radio" name="que21" value="are made" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press21()" type="radio" name="que21" value="made"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">made</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press21()" type="radio" name="que21" value="are making"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">are making</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 21-->
                                    
                                    <!--PREGUNTA 22-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>22.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>What is this <span id="ans22" class="ans">___</span> in English? I can't remember.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">called</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press22()" type="radio" name="que22" value="called" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press22()" type="radio" name="que22" value="said"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">said</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press22()" type="radio" name="que22" value="named"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">named</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 22-->
                                    
                                    <!--PREGUNTA 23-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>23.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>If i had <span id="ans23" class="ans">___</span> early, I wouldn't have been late for work.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">left</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press23()" type="radio" name="que23" value="left" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press23()" type="radio" name="que23" value="was leaving"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">was leaving</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press23()" type="radio" name="que23" value="had left"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">had left</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 23-->
                                    
                                    <!--PREGUNTA 24-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>24.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>By 2020 i think we will <span id="ans24" class="ans">___</span> a settlement on Mars.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">have built</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press24()" type="radio" name="que24" value="have built" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press24()" type="radio" name="que24" value="have been building"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">have been building</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press24()" type="radio" name="que24" value="be built"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">be built</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 24-->
                                    
                                    <!--PREGUNTA 25-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>25.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 110%; ">
                                        <label>There were <span id="ans25" class="ans">___</span> of people at the football match on Friday.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">fives</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press25()" type="radio" name="que25" value="fives" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press25()" type="radio" name="que25" value="many"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">many</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press25()" type="radio" name="que25" value="hundreds"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">hundreds</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 25-->
                           
                                </div>               
                                   <div style="float:left;margin-left:5px;">

                               <!--PREGUNTA 26-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>26.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 130%; ">
                                        <label>Do you fancy <span id="ans26" class="ans">___</span> away for the weekend.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">go</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press26()" type="radio" name="que26" value="go" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press26()" type="radio" name="que26" value="to go"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">to go</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press26()" type="radio" name="que26" value="going"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">going</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 26-->
                                    
                                    <!--PREGUNTA 27-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>27.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 140%;">
                                        <label><span id="ans27" class="ans">___</span> to bring your passport. You'll need it at the airport.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">If i were you i´d</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press27()" type="radio" name="que27" value="If i were you i´d" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press27()" type="radio" name="que27" value="You should"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">You should</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press27()" type="radio" name="que27" value="Don´t forget"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">Don´t forget</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 27-->
                                    
                                    <!--PREGUNTA 28-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>28.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 150%; ">
                                        <label>Mark: I've had a headache for three days.<br/> Sue: <span id="ans28" class="ans">___</span> to the doctors.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">You Should</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press28()" type="radio" name="que28" value="You Should" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press28()" type="radio" name="que28" value="If i were you l´d go"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;"> If i were you l´d go</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press28()" type="radio" name="que28" value="Try go"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">Try go</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 28-->
                                    
                                    <!--PREGUNTA 29-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>29.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>There are so many people off sick we'll have to put<br/>the meeting <span id="ans29" class="ans">___</span> until next week.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">back</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press29()" type="radio" name="que29" value="back" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press29()" type="radio" name="que29" value="off"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">off</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press29()" type="radio" name="que29" value="over"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">over</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 29-->
                                    
                                    <!--PREGUNTA 30-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>30.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 110%; ">
                                        <label>Where's your car today? it <span id="ans30" class="ans">___</span> repaired.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">been</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press30()" type="radio" name="que30" value="been" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press30()" type="radio" name="que30" value="was"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">was</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press30()" type="radio" name="que30" value="is being"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">is being</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 30-->
                                   </div>
                            </div>
                        </section>

                        <h3>Section Four</h3>
                        <section>
                            <div>
                                <div style="float:left; margin-left:20px; width:50%; ">

                      <!--PREGUNTA 31-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>31.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>If the people on the ship <span id="ans31" class="ans">___</span> him, he would have drowned.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">had seen</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press31()" type="radio" name="que31" value="had seen" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press31()" type="radio" name="que31" value="hadn´t seen"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">hadn´t seen</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press31()" type="radio" name="que31" value="could see"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">could see</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 31-->
                                    
                                    <!--PREGUNTA 32-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>32.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>The journey <span id="ans32" class="ans">___</span> much longer than i had expected.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">is taking</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press32()" type="radio" name="que32" value="is taking" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press32()" type="radio" name="que32" value="took"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">took</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press32()" type="radio" name="que32" value="was taken"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">was taken</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 32-->
                                    
                                    <!--PREGUNTA 33-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>33.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>He didn't enjoy studying abroad as he had <span id="ans33" class="ans">___</span> friends there.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">little</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press33()" type="radio" name="que33" value="little" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press33()" type="radio" name="que33" value="a few"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">a few</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press33()" type="radio" name="que33" value="few"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">few</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 33-->
                                    
                                    <!--PREGUNTA 34-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>34.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>There's <span id="ans34" class="ans">___</span> in applying for the job. I'm not qualified for it.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">no reason</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press34()" type="radio" name="que34" value="no reason" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press34()" type="radio" name="que34" value="no point"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">no point</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press34()" type="radio" name="que34" value="no worth"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">no worth</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 34-->
                                    
                                    <!--PREGUNTA 35-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>35.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 110%; ">
                                        <label>Please remain seated <span id="ans35" class="ans">___</span> the plane has come to a complete<br/>standstill.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">as</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press35()" type="radio" name="que35" value="as" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press35()" type="radio" name="que35" value="while"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">while</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press35()" type="radio" name="que35" value="until"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">until</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 35-->
                                </div>

                                   <div style="float:left;margin-left:20px;">
                                <!--PREGUNTA 36-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>36.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>It's <span id="ans36" class="ans">___</span> to go climbing alone.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">danger</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press36()" type="radio" name="que36" value="danger" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press36()" type="radio" name="que36" value="risky"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">risky</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press36()" type="radio" name="que36" value="hazard"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">hazard</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 36-->
                                    
                                    <!--PREGUNTA 37-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>37.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>Chen's looking foward <span id="ans37" class="ans">___</span> his new job next week.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">to starting</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press37()" type="radio" name="que37" value="to starting" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press37()" type="radio" name="que37" value="to start"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">to start</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press37()" type="radio" name="que37" value="starting"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">starting</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 37-->
                                    
                                    <!--PREGUNTA 38-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>38.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 150%; ">
                                        <label>It's almost midnight. He Sue: <span id="ans38" class="ans">___</span> be coming now!.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">can´t</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press38()" type="radio" name="que38" value="can´t" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press38()" type="radio" name="que38" value="mustn´t"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">mustn´t</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press38()" type="radio" name="que38" value="mightn´t"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">mightn´t</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 38-->
                                    
                                    <!--PREGUNTA 39-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>39.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>The car <span id="ans39" class="ans">___</span> start this morning, so i was late for work.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">couldn´t</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press39()" type="radio" name="que39" value="couldn´t" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press39()" type="radio" name="que39" value="shouln´t"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">shouln´t</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press39()" type="radio" name="que39" value="wouldn´t"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">wouldn´t</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 39-->
                                    
                                    <!--PREGUNTA 40-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>40.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 110%; ">
                                        <label>You <span id="ans40" class="ans">___</span> be really excited about your trip to Germany.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">could</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press40()" type="radio" name="que40" value="could" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press40()" type="radio" name="que40" value="must"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">must</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press40()" type="radio" name="que40" value="have to"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">have to</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 30-->
                                   </div>
                            </div>       
                        
                        </section>

                        <h3>Section Five</h3>
                        <section>
                            <div>
                                <div style="float:left; margin-left:20px; width:50%; ">

                      <!--PREGUNTA 41-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>41.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>It looks <span id="ans41" class="ans">___</span> it's going to train.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">alike</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press41()" type="radio" name="que41" value="alike" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press41()" type="radio" name="que41" value="as like"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">as like</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press41()" type="radio" name="que41" value="as if"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">as if</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 41-->
                                    
                                    <!--PREGUNTA 42-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>42.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 70%; ">
                                        <label>The new GPS is <span id="ans42" class="ans">___</span>. I don't know how we managed without it before.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">priceless</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press42()" type="radio" name="que42" value="priceless" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press42()" type="radio" name="que42" value="worthy"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">worthy</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press42()" type="radio" name="que42" value="invaluable"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">invaluable</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 42-->
                                    
                                    <!--PREGUNTA 43-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>43.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>I wish i <span id="ans43" class="ans">___</span> more at college. I'd have<br/>a better job now!</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">studied</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press43()" type="radio" name="que43" value="studied" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press43()" type="radio" name="que43" value="had been studying"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">had been studying</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press43()" type="radio" name="que43" value="had studied"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">had studied</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 43-->
                                    
                                    <!--PREGUNTA 44-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>44.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>I was <span id="ans44" class="ans">___</span> when i heard i'd got the job.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">pleased</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press44()" type="radio" name="que44" value="pleased" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press44()" type="radio" name="que44" value="pleasing"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">pleasing</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press44()" type="radio" name="que44" value="exctable"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">excitable</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 44-->
                                    
                                    <!--PREGUNTA 45-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>45.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 110%; ">
                                        <label>My manager <span id="ans45" class="ans">___</span> on excellent punctuality at all times.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">advises</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press45()" type="radio" name="que45" value="advises" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press45()" type="radio" name="que45" value="demands"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">demands</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press45()" type="radio" name="que45" value="insists"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">insists</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 45-->
                                </div>

                                   <div style="float:left;margin-left:-10px;">
                                <!--PREGUNTA 46-->
                                    <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>46.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 100%; ">
                                        <label>We have been <span id="ans46" class="ans">___</span> that a new training centre should be built.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">advise</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press46()" type="radio" name="que46" value="advise" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press46()" type="radio" name="que46" value="advised"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">advised</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press46()" type="radio" name="que46" value="adviced"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">adviced</label>
                                    </div>
                            <!-- FIN DE PREGUNTA 46-->
                                    
                                    <!--PREGUNTA 47-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>47.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 115%; ">
                                        <label>It's important that everyone in the group <span id="ans47" class="ans">___</span> each other.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">goes along</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press47()" type="radio" name="que47" value="goes along" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press47()" type="radio" name="que47" value="gets on with"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">gets on with</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press47()" type="radio" name="que47" value="gets along"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">gets along</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 47-->
                                    
                                    <!--PREGUNTA 48-->
                                     <div style=" width: 7%;  position: relative; left: -6%;">
                                        <h3>48.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 150%; ">
                                        <label>Pablo denied <span id="ans48" class="ans">___</span> the money.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">having tool</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press48()" type="radio" name="que48" value="having tool" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press48()" type="radio" name="que48" value="to have taken"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">to have taken</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press48()" type="radio" name="que48" value="having taken"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">having taken</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 48-->
                                    
                                    <!--PREGUNTA 49-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>49.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px;  width: 100%; ">
                                        <label>There were <span id="ans49" class="ans">___</span> of people at the football match on Friday.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto;">a great deal</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press49()" type="radio" name="que49" value="a great deal" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press49()" type="radio" name="que49" value="many"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">many</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press49()" type="radio" name="que49" value="hundreds"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">hundreds</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 49-->
                                    
                                    <!--PREGUNTA 50-->
                                     <div style=" width: 7%; position: relative; left: -6%;">
                                        <h3>50.</h3>
                                    </div>
                                    
                                    <div style="position: relative; left: 7%; top: -40px; width: 150%;">
                                        <label>You <span id="ans50" class="ans">___</span> be really excited about your trip to Germany.</label>
                                    </div>
                                    
                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <label style="left: 15px; top: -5px; position: relative; width: auto; height: auto; ">plenty of</label>
                                        <input style="position:relative; top:-135%; background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press50()" type="radio" name="que50" value="plenty of" required />
                                    </div>

                                    <div style="position: relative; margin-left: 6%;   height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press50()" type="radio" name="que50" value="a lot"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto; ">a lot</label>
                                    </div>

                                    <div style="position: relative; margin-left: 6%;  height: 20px; width: 330px; top: -30px;">
                                        <input style="background-color: threedface; width: auto; height: auto;  margin-left: 0%;"  id="" onclick="press50()" type="radio" name="que50" value="too much"/>
                                        <label style="left: 15px; top: -15px; position: relative; width: auto; height: auto;">too much</label>
                                    </div>
                                    <!--FIN DE PREGUNTA 50-->
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
                    alert("Subm!");
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

