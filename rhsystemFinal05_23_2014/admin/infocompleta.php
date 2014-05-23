<?php
include_once 'lock.php';
include '../Classes/Solicitud.php';
include_once '../Classes/Log.php';
$in = new Solicitud();
$log = new Log();

$id = $_GET['id'];

$in->setIdSolicitud($id);


$result = $in->obtenerDatos();
$result2 = mysql_fetch_array($result);

$estadoId = $result2['estado_solicitud'];


//Se valida si se presiono el boton de guardar
if(isset($_REQUEST['guardar']))
{
	//Actualizacion para el estado de la solicitud
	$estadoSol = $_POST['estadoSol'];
	$in->setEstadoSol($estadoSol);
	$in->setId($id);
	$in->actualizaEstado();

	//Insert en la tabla log

	$comentario = $_POST['comentario1'];
	$fecha = date('Y-m-d');

	$log->setIdSolicitud($id);
	$log->setIdEstado($estadoSol);
	$log->setComentario($comentario);
	$log->setFecha($fecha);
	$log->setIdUsuario($user_name);
	$log->insertaLog();
	?>
	<script>
	alert("Los datos fueron ingresados correctamente")
	</script>
	<?php
	header('Location:index.php');
}


?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->


<head>
	<title>Sanco Business Solution</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="Kingboard - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">

	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.min.css" rel="stylesheet" type="text/css">

	<!-- CSS for demo style switcher. you can remove this -->
	<link href="demo-style-switcher/assets/css/style-switcher.css" rel="stylesheet" type="text/css">

	

</head>

<!--Funcion para actualizar el campo de la capaña-->
<script>
function updateCampaign(camp) {
  if (camp=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    	
    }
  }
  var id = document.getElementById("id").value;
  xmlhttp.open("GET","Modules/updateCampaign.php?id="+id+"&camp="+camp,true);
  xmlhttp.send();
  
}
</script>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- TOP GENERAL ALERT -->
		
		<!-- END TOP GENERAL ALERT -->

		<!-- TOP BAR -->
	<?php include 'Modules/topbar.php';?>
		<!-- /top -->


		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">

						<!-- main-nav -->
					<?php include 'Modules/sidebar.php';?>
						<!-- /main-nav -->

						<div class="sidebar-minified js-toggle-minified">
							<i class="fa fa-angle-left"></i>
						</div>
                                                
						<!-- end sidebar content -->
					</div>
					<!-- end left sidebar -->

					<!-- content-wrapper -->
					<div class="col-md-10 content-wrapper">
						<div class="row">
							<div class="col-md-4">
							
							</div>
							<div class="col-md-8">
						
							</div>
						</div>

						<!-- main -->
						<div class="content">
							<div >
								<h2>Solicitudes</h2>
							</div>

					<div class="main-content">
								<div class="row">
									<div class="col-md-6">
										<!-- BASIC VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i>Información Personal</h3>
											</div>
											<div class="widget-content">

													<div class="form-group">
														<label for="text-input">Correo Electrónico</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['correo']; ?>">
														<input type="hidden" name="id" id="id" value="<?php echo $result2['id_solicitud']; ?>" />
													</div>

													<div class="form-group">
														<label for="text-input">Apellido Paterno</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['paterno']; ?>">
													</div>
                                                                                            
                                                                                                        <div class="form-group">
														<label for="text-input">Materno</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['materno']; ?>">
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Nombre(s)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['nombre']; ?>">
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Fecha de Nacimiento</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['fechanac']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Nacionalidad</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['nacionalidad']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Género</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['genero']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Estado Civil</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['civil']; ?>" >
													</div>
                                                                                   
                                                                                  
													
												
                                                                                       
												
											</div>
										</div>
										<!-- END BASIC VALIDATION -->
									</div>

									<div class="col-md-6">
										<!-- ADVANCED VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i> Datos de Contacto</h3>
											</div>
											<div class="widget-content">
											
														<div class="form-group">
														<label for="text-input">Calle</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['calle']; ?>">
													</div>

													<div class="form-group">
														<label for="text-input">Número</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['numero']; ?>" >
													</div>
                                                                                            
                                                                                                        <div class="form-group">
														<label for="text-input">Colonia</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['colonia']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Código Postal</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['cp']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Estado</label>
														<input type="text" id="text-input" class="form-control" required  value="<?php echo $result2['estado']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Municipio</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['municipio']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Contacto(1)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['nombrecto1']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Teléfono Contacto(1)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['telefonocto1']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Contacto(2)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['nombrecto2']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Teléfono Contacto(2)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['telefonocto2']; ?>" >
													</div>
															
												

											
											</div>
										</div>
										<!-- END ADVANCED VALIDATION -->
									</div>
                                                                    
                                                                    						<div class="col-md-6">
										<!-- ADVANCED VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i> Historial Académico</h3>
											</div>
											<div class="widget-content">
														<div class="form-group">
														<label for="text-input">Máximo Grado de Estudios</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['gradoEstudios']; ?>" > 
													</div>

													<div class="form-group">
														<label for="text-input">Institución Educativa</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['institucion']; ?>" >
													</div>
                                                                                            
                                                                                                        <div class="form-group">
														<label for="text-input">Status</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['edoacademico']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Nivel de Inglés</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['ingles']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Estudiano Actualmente</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['estudia']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Otros Estudios</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['otrosestudios']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Habilidades</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['habilidades']; ?>" >
													</div>
                                                                                            <br><br>  <br><br>
													
													
													
												

											
											</div>
										</div>
										<!-- END ADVANCED VALIDATION -->
									</div>
                                                                    
                                                                    						<div class="col-md-6">
										<!-- ADVANCED VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i> Historial Laboral</h3>
											</div>
											<div class="widget-content">
											
												        <div class="form-group">
														<label for="text-input">Empleo Anterior(1)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['anterior1']; ?>" >
													</div>
                                                                                                   <div class="form-group">
														<label for="text-input">Puesto</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['puesto1']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Salario Mensual</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['salario1']; ?>" >
													</div>	
                                                                                                   <div class="form-group">
														<label for="text-input">Empleo Anterior(2)</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['anterior2']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Puesto</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['puesto2']; ?>" >
													</div>	
                                                                                                   <div class="form-group">
														<label for="text-input">Salario Mensual</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['salario2']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Trabaja Actualmente</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['trabaja']; ?>" >
													</div>
                                                                                            <div class="form-group">
														<label for="text-input">Disponibilidad de Horario</label>
														<input type="text" id="text-input" class="form-control" required value="<?php echo $result2['disponibilidad']; ?>" >
													</div>	
                                                                                     
												<?php echo $result2['campania'] ?>

											
											</div>
                                                                                    
                                                                                    
										</div>
										<!-- END ADVANCED VALIDATION -->
									</div>
                                                                    
                                                                    
                                                                    
                                                                                                                                        <div class="col-md-6">
										<!-- BASIC VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i>Elegible para la Campaña</h3>
											</div>
											<div class="widget-content">
												<form id="basic-form" action="#" method="post" parsley-validate novalidate>
													
                                                                                                    
                                                                                                    
                                                                                                    
													<div class="form-group">
														<label for="textarea">Campaña</label>
														<select style="margin-top:7px" name="campania" onclick="updateCampaign(this.value)" >
                                                                                                                    <option value="1" name="camp" <?php if($result2['campania']==1)  echo 'selected';?>>Ninguna</option>
															<option value="2" name="camp"  <?php if($result2['campania']==2)  echo 'selected';?>>Cash advance</option>
															<option value="3" name="camp"  <?php if($result2['campania']==3)  echo 'selected';?>>Préstamo para negocio</option>
															<option value="4" name="camp"  <?php if($result2['campania']==4)  echo 'selected';?>>Compliance Services Office</option>
															<option value="5" name="camp"  <?php if($result2['campania']==5)  echo 'selected';?>>Green light</option>
														</select>   <br><br>
													</div>
												</form>
											</div>
										</div>
										<!-- END BASIC VALIDATION -->
									</div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    <div class="col-md-6">
										<!-- BASIC VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i>Estado de la Solicitud</h3>
											</div>
											<div class="widget-content">
												<form id="basic-form" action="#" method="post" parsley-validate novalidate>
													<div class="form-group">
														<label for="textarea">Estado</label>
														<select style="margin-top:7px" name="estadoSol">
															<?php include_once 'Modules/estados.php'; ?>
														</select><br><br>
														<label for="textarea">Comentario</label>
														<textarea class="form-control" rows="5" cols="30" required  name="comentario1"></textarea>
													</div>
													<button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
												</form>
											</div>
										</div>
										<!-- END BASIC VALIDATION -->
									</div>
                                                                    
                                                                    

                                                            
								</div>

							</div>
							<!-- /main-content -->
						</div>
						<!-- /main -->
					</div>
							<!-- /main-content -->
						</div>
						<!-- /main -->
					</div>
					<!-- /content-wrapper -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->

		<!-- FOOTER -->
		<footer class="footer">
			&copy; 2014 Sanco Business Solutions
		</footer>
		<!-- END FOOTER -->

	</div>
	<!-- /wrapper -->


	<!-- END STYLE SWITCHER -->

	<!-- Javascript -->
	<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-tour.custom.js"></script>
	<script type="text/javascript" src="assets/js/king-common.min.js"></script>
	<script type="text/javascript" src="demo-style-switcher/assets/js/deliswitch.min.js"></script>
	<script type="text/javascript" src="assets/js/datatable/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/js/datatable/jquery.dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jqgrid/jquery.jqGrid.min.js"></script>
	<script type="text/javascript" src="assets/js/jqgrid/i18n/grid.locale-en.js"></script>
	<script type="text/javascript" src="assets/js/jqgrid/jquery.jqGrid.fluid.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/king-table.min.js"></script>


</body>


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingboard-v1.1/tables-dynamic-table.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 09 May 2014 16:35:06 GMT -->
</html>