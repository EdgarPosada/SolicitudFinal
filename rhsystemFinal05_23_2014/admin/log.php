<?php
include_once 'lock.php';
include_once '../Classes/Log.php';

$log = new Log();
$id = $_GET['id'];
$log->setIdSolicitud($id);

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
								<h2>Nombre del Solicitante</h2>
							</div>

							<div class="main-content">
                                                            
								<!-- JQUERY DATA TABLE -->
								<div class="widget widget-table">
                                                                    <div class="widget-header" style="color:  #000000">
									
                                                                          
                                                                            
									</div>
									<div class="widget-content">
										<table class="table  table-striped table-hover " cellpadding="0" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Estado</th>
													<th>Fecha</th>
													<th>Usuario</th>
													<th>Comentario</th>
												
												</tr>
											</thead>
											<tbody>

												<?php
												//Se realiza el llenado de la tabla
												$result = $log->obtieneDatos();
												while($result2 = mysql_fetch_array($result))
												{
													$estado = $result2['id_estado'];
													//Se valida el id del estado
													if($estado == 1)
														$estado = 'Nuevo';
													else
														if($estado == 2)
															$estado = 'Contactado';
														else
															if($estado == 3)
																$estado = 'Entrevistado';
															else
																if($estado == 4)
																	$estado = 'Entrenamiento';
																else
																	if($estado == 5)
																		$estado = 'Contratado';
																	else
																		if($estado == 6)
																			$estado = 'Despedido';
																		else
																			if($estado == 7)
																				$estado = 'Renuncia';
																			else
                                                                                                                                                            if($estado == 8)
																				$estado = 'No Elegible';
																			else
                                                                                                                                                            
																				$estado = '';
													?>

												<tr>
													<td><?php echo $estado; ?></td>
													<td><?php echo $result2['fecha']; ?></td>
													<td><?php echo $result2['id_usuario']; ?></td>
													<td><?php echo $result2['comentario']; ?></td>
												
												</tr>
												<?php
													}
												?>
												</tbody>
										</table>
									</div>
								</div>
								<!-- END JQUERY DATA TABLE -->

						

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