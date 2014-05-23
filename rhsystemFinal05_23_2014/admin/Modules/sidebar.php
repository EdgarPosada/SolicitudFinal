	<nav class="main-nav">

							<ul class="main-menu">
								<li><a href="index.php"><i class="fa fa-edit fa-fw"></i><span class="text">Solicitudes</span></a></li>
								 <?php if($type_user==1){ ?> 
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i><span class="text">Usuarios</span>
									<i class="toggle-icon fa fa-angle-left"></i></a>
									
                                                                  
                                                                    <ul class="sub-menu ">
										<li>
											<a href="usuario.php">
												<span class="text">Nuevo Usuario</span>
											</a>
										</li>
										<li>
											<a href="usuarios.php">
												<span class="text">Usuarios</span>
											</a>
										</li>
									
									</ul>
                                                                  
                                                                    
								</li>
							
							 <?php }?>
							
							</ul>
        </nav>