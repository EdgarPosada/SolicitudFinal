<?php 
include_once 'lock.php';
include_once '../Classes/User.php';
//Objects
$user=new User();
//variables
$id_user=''; 
$name='';
$email='';
$password='';
 


if(isset($_GET['delete']))//llenamos el formulario con los campos a modificar
{
$user->User($_GET['delete']);
$user->deleteUser();
 header('Location: usuarios.php?message=Record Deleted Successfully&type=error');
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
    <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete?")) {
    document.location = delUrl;
  }
}
</script>
	
  <link href="assets/css/jquery_notification.css" type="text/css" rel="stylesheet"/>

        <script type="text/javascript" src="assets/js/jquery_v_1.4.js"></script>
        <script type="text/javascript" src="assets/js/jquery_notification_v.1.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){ 
            });
        </script>
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
								<h2>Usuarios</h2>
							</div>

							<div class="main-content">
                                                            
								<!-- JQUERY DATA TABLE -->
								<div class="widget widget-table">
                                                                    <div class="widget-header" style="color:  #000000">
									
                                                                          
                                                                            
									</div>
									<div class="widget-content">
										<table class="table table-sorting table-striped table-hover datatable" cellpadding="0" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Email</th>
													<th>Nombre</th>
													<th>Tipo</th>
													<th>Edit</th>
                                                                                                        <th>Delete</th>
												
												</tr>
											</thead>
											<tbody>
												    <?php   
                                 $result=$user->getUsers(); // creamos objeto para obtener los usuarios
                                 while ($row = mysql_fetch_array($result)) //mediante un ciclo asignamos el resultado a un objeto
                                 {

                                 ?> 
                                    
                                                                                                
                                                                                                <tr>
													<td><?php echo $row['email'];?></td>
													<td><?php echo $row['name'];?></td>
													<td><?php 
                                                                                                         
                                                                                                         if($row['type_user']==1)
                                                                                                         echo 'Administrador';
                                                                                                          if($row['type_user']==2)
                                                                                                         echo 'Recursos Humanos';
                                                                                                          if($row['type_user']==3)
                                                                                                         echo 'Entrevistador'; 
                                                                                                        
                                                                                                        
                                                                                                        ?></td>
                                                                                                        <td><a href="usuario.php?edit=<?php echo $row['id_user'];?>"><i class="fa fa-edit"></i></a></td>
                                                                                                        <td><a href="javascript:confirmDelete('usuarios.php?delete=<?php echo $row['id_user'];?>')"><i class="fa fa-ban"></i></a></td>
												
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

 <?php
                if (isset($_GET["type"])) {
                    $message = $_GET["message"];
                    $type = $_GET["type"];
                    ?>
                     <script type="text/javascript">
                        showNotification({
                            message: "<?php echo $message; ?>",
                            type: "<?php echo $type; ?>",
                            autoClose: true,
                            duration: 5                                        
                        });
                    </script>
                    <?php
                }
                ?>