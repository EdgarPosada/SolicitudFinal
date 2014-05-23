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
$type_user=''; 

if(isset($_POST['id_user'])&&!is_numeric($_POST['id_user']))// Insert - si recibimos vacio el post id_user
{
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->setTypeUser($_POST['type_user']);
$user->insertUser();
header('Location: usuarios.php?message=Record Inserted Successfully&type=success');
}

if(isset($_GET['edit']))//llenamos el formulario con los campos a modificar
{
$user->User($_GET['edit']); 
$id_user=$user->getIdUser();
$name=$user->getName();
$email=$user->getEmail();
$type_user=$user->getTypeUser();

}

if(isset($_POST['id_user'])&&is_numeric($_POST['id_user']))// Update - si recibimos un valor en el post id_user 
{
$user->setIdUser($_POST['id_user']);    
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->setTypeUser($_POST['type_user']);
$user->updateUser();
header('Location: usuarios.php?message=Updated Successfully&type=warning');
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
								<h2>Usuario</h2>
							</div>

					<div class="main-content">
								<div class="row">
									<div class="col-md-6">
										<!-- BASIC VALIDATION -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-check"></i>Información de Usuario</h3>
											</div>
                                                                                    
                                                                                  <form  action="usuario.php" method="POST">
                                                                                    
											<div class="widget-content">
                                                                                          	<input type="hidden"  name="id_user" value="<?php echo $id_user ?>">																										<div class="form-group">
														<label for="text-input">Correo Electrónico</label>
														<input type="email" name="email" id="text-input" class="form-control" value="<?php echo $email ?>" required>
													</div>
                                                                                            
                                                                                            	<div class="form-group">
														<label for="text-input">Contraseña</label>
                                                                                                                <input type="password" name="password" id="text-input" class="form-control" >
													</div>

												
                                                                                            
                                                                                            <div class="form-group">
														<label for="text-input">Nombre</label>
														<input type="text" id="text-input" name="name" class="form-control" value="<?php echo $name ?>" required>
													</div>
                                                                                       
                                                                   
                                                                                  
                                                                                        <label class="checkbox-inline">
                                                                                            <input type="radio" name="type_user" id="inlineCheckbox1" value="1" <?php  if($type_user==1)echo 'checked=""' ?> required="" >Administrador
												</label>
												<label class="checkbox-inline">
                                                                                                    <input type="radio" name="type_user" id="inlineCheckbox2" value="2"  <?php  if($type_user==2)echo 'checked=""' ?>>Recursos Humanos
												</label>
												<label class="checkbox-inline">
                                                                                                    <input type="radio" name="type_user" id="inlineCheckbox3" value="3"  <?php  if($type_user==3)echo 'checked=""' ?>>Entrevistador
												</label>
                                                                                            <br><br>
                                                                                  
											<button type="submit" class="btn btn-primary">Guardar</button>

												
                                                                                       
												
											</div>
                                                                                        
                                                                                         </form>
										</div>
										<!-- END BASIC VALIDATION -->
									</div>

									
										<!-- END ADVANCED VALIDATION -->
									</div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                                                                                        <div class="col-md-6">
										<!-- BASIC VALIDATION -->

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