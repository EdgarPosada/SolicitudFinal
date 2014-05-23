<?php include_once 'lock.php';

 //classes
 include_once '../Classes/Solicitud.php';
 
 // objeto
 $solicitud= new Solicitud();
 $solicitud->setEstado(1); 
 $result=$solicitud->getSolicitudesPorEstado(); // creamos objeto para obtener los usuarios   

 if(isset($_GET['estado'])) // recibimos el estado
 {
 //objetos

   $estado=$_GET['estado'];
   
   if($estado==0) // si el estado que recibimos es igual a 0, mostramos todas las solicitud
   {
    
    $result=$solicitud->getSolicitudes();
  
   }
   else
   {        
 //$solicitud->setEstado(1);
 $solicitud->setEstado($_GET['estado']);
   $result=$solicitud->getSolicitudesPorEstado(); // creamos objeto para obtener los usuarios   
   }

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
                                                            
								<!-- JQUERY DATA TABLE -->
								<div class="widget widget-table">
                                                                    <div class="widget-header" style="color:  #000000">
                                                                        <form  action="" method="get">
                                                                        <select style="margin-top:7px" name="estado">
<?php include_once 'Modules/esta'
. 'dos.php';?>

                                                                        
                                                                        </select>  

                                  <button type="submit" >Buscar</button>                                             
                                                                        </form>                                                                          
                                                                            
									</div>
									<div class="widget-content">
										<table class="table table-sorting table-striped table-hover datatable" cellpadding="0" cellspacing="0" width="100%">
											<thead>
												<tr>	<th>Fecha</th>
                                                                                                        <th>Estado</th>
                                                                                                        <th>Campaña</th>
													<th>Nombre</th>
													<th>Apellido Paterno</th>
													<th>Apellido Materno</th>
												        <th>Exámen Inglés</th>
													<th>Información Completa</th>
                                                                                                     
                                                                                                          <?php if($type_user==2 || $type_user==1)
     { ?>    
                                                                                                        <th>Actividad</th>
											
                                                                                                   <?php }?>
                                                                                                </tr>
											</thead>
											<tbody>
                                                                                            
                                 
                                                           									    <?php 
                                                                                                                                    
                                                                                                                                    
                                                                                                                              
                                                 
                                
                                 
                                 while ($row = mysql_fetch_array($result)) //mediante un ciclo asignamos el resultado a un objeto
                                 {
                                     $solicitud->setIdSolicitud($row['id_solicitud']);
                                     $fecha=$solicitud->getFechaRecienteLog();
                                     
                                 ?> 
												<tr>    
                                                                                                        <td><?php echo $row['fecha']?></td>
                                                                                                        <td><?php 
                                                                                                        
                                                                                                      if($row['estado_solicitud']==1)echo 'nuevo';
                                                                                                        if($row['estado_solicitud']==2)echo 'contactado';
                                                                                                          if($row['estado_solicitud']==3)echo 'entrevistado';
                                                                                                            if($row['estado_solicitud']==4)echo 'entrenamiento';
                                                                                                              if($row['estado_solicitud']==5)echo 'contratado';
                                                                                                                if($row['estado_solicitud']==6)echo 'despedido';
                                                                                                                 if($row['estado_solicitud']==7)echo 'renuncia';
                                                                                                                  if($row['estado_solicitud']==8)echo 'no elegible';
                                                                                                        
                                                                                                        ?>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td><?php 
                                                                                                        if($row['campania']==1)echo 'ninguna';
                                                                                                         if($row['campania']==2)echo 'cash advance';
                                                                                                          if($row['campania']==3)echo 'préstamo para negocio';
                                                                                                           if($row['campania']==4)echo 'compliance services office';
                                                                                                            if($row['campania']==5)echo 'green ligths';
      
                                                                                                                ?></td>
													<td><?php echo $row['nombre']?></td>
													<td><?php echo $row['paterno']?></td>
													<td><?php echo $row['materno']?></td>
                                                                                                        <td><?php echo $row['resultadoExamen']?></td>
                                                                                                        <td><a href="infocompleta.php?id=<?php echo $row['id_solicitud']?>"><i class=" fa fa-folder-open"></i></a></td>
                                                                                                        <?php  if($type_user==2 || $type_user==1){
     ?>
                                                                                                        <td><a href="log.php?id=<?php echo $row['id_solicitud']?>"><i class="fa fa-bar-chart-o"></i></a></td>
                                                                                                        <?php } ?>
                                                                                                </tr>
                                                                                               
												
                                 <?php } ?>	
												
												
												
											
											
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

