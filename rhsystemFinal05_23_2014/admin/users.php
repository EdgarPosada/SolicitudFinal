<?php 
include_once 'lock.php';
//classes
include_once 'Classes/User.php';
include_once 'Classes/Evaluation.php';
//Objects
$user=new User();
//variables
$id_user=''; 
$name='';
$email='';
$password='';

if(isset($_POST['id_user'])&&!is_numeric($_POST['id_user']))// Insert - si recibimos vacio el post id_user
{
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->insertUser();
}

if(isset($_GET['edit']))//llenamos el formulario con los campos a modificar
{
$user->User($_GET['edit']); 
$id_user=$user->getIdUser();
$name=$user->getName();
$email=$user->getEmail();
}

if(isset($_POST['id_user'])&&is_numeric($_POST['id_user']))// Update - si recibimos un valor en el post id_user 
{
$user->setIdUser($_POST['id_user']);    
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->updateUser();
}


if(isset($_GET['delete']))//llenamos el formulario con los campos a modificar
{
$user->User($_GET['delete']);
$user->deleteUser();
}

if(isset($_GET['clear']))//limpiamos los campos del formulario
{

}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wbpreview.com/previews/WB0918M29/pages/forms.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 19:44:31 GMT -->
<head>
    <meta charset="utf-8">
    <title>SANCO Quality Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="resource/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
            background-image: url("resource/img/bg.png");
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../bootstrap/js/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://wbpreview.com/previews/WB0918M29/bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/bootstrap-apple-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/bootstrap-apple-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/bootstrap-apple-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/bootstrap-apple-57x57.png">

    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete?")) {
    document.location = delUrl;
  }
}
</script>

      <link href="css/jquery_notification.css" type="text/css" rel="stylesheet"/>

        <script type="text/javascript" src="js/jquery_v_1.4.js"></script>
        <script type="text/javascript" src="js/jquery_notification_v.1.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){ 
            });
        </script>
</head>

<body>

<?php  include 'modules/topbar.php';?>


<div class="container-fluid">
    <div class="row-fluid">


	<?php  include 'modules/menu.php';?>

	
        <div class="span10">


                      <div class="row-fluid">
               
                          
                <div class="span12">
                    <div class="accordion" id="accordionFormHorisontal">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a style="text-align: left;text-decoration: none" class="accordion-toggle btn btn-danger"
                                   data-toggle="collapse" data-parent="#accordion2" href="#collapseFormHorisontal">
                                    <i class="icon-list-alt"></i> New / Edit Agent <i class="icon-minus pull-right"></i>
                                </a>
                            </div>
                            <div id="collapseFormHorisontal" class="accordion-body collapse in">
                                <div class="accordion-inner" style="background-color: #ffffff;">     
                                    
                                    <form class="form-horizontal" action="users.php" method="POST">
                                        <fieldset>
                                            <div class="control-group">
                                                   <div class="controls">
                                                    <input type="hidden" class="input-xlarge" id="input01" name="id_user" value="<?php echo $id_user?>">
                                                </div>
                                                
                                            
                                            </div>
                                          <div class="control-group">
                                              <label class="control-label" for="input2">Name</label>
                                              <div class="controls">
                                                <input type="text" class="input-xlarge" id="input2" name="name" value="<?php echo $name?>" <?php if($id_user==""){echo 'required';} ?>>
                                              </div>
                                            </div>
                                          <div class="control-group">
                                              <label class="control-label" for="input3">Email</label>
                                              <div class="controls">
                                                <input type="email" class="input-xlarge" id="input3" name="email" value="<?php echo $email?>" <?php if($id_user==""){echo 'required';} ?>>
                                              </div>
                                            </div>
                                          <div class="control-group">
                                              <label class="control-label" for="input4">Password</label>
                                              <div class="controls">
                                                <input type="password" class="input-xlarge" id="input4" name="password" value="<?php echo $password?>" <?php if($id_user==""){echo 'required';} ?>>
                                              </div>
                                            </div>
                                          <div class="form-actions">
                                               <button type="submit" class="btn btn-primary">Save</button>
                                               <a href="users.php?clear=1"> <button class="btn">Clear Form</button></a>
                                            </div>
                                            
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                          
                          
                          
                          

            </div>
           
            
            
            
            
            
            

                  <div class="row-fluid">
                <div class="span12">
                    <div class="accordion" id="accordionTable5">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a style="text-align: left;text-decoration: none" class="accordion-toggle btn btn-danger"
                                   data-toggle="collapse" data-parent="#accordion2" href="#collapseTable5">
                                    <i class="icon-list-alt"></i> Agents <i class="icon-minus pull-right"></i>
                                </a>
                            </div>
                            <div id="collapseTable5" class="accordion-body collapse in">
                                <div class="accordion-inner" style="background-color: #ffffff;">
                                    <table class="table table-striped table-bordered table-condensed">
                                        <thead>
                           
                                            
                                            
                                            
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Option</th>
                                  
                                        </tr>
                             
                                        </thead>
                                        <tbody>
                                     
                                        
                                 <?php   
                                 $result=$user->getUsers(); // creamos objeto para obtener los usuarios
                                 while ($row = mysql_fetch_array($result)) //mediante un ciclo asignamos el resultado a un objeto
                                 {
                                 if($row['id_user']!=23){
                                 ?> 
                                           
                                            
                                            
                                        <tr>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><a href="users.php?edit=<?php echo $row['id_user'];?>">Edit</a> / <a href="javascript:confirmDelete('users.php?delete=<?php echo $row['id_user'];?>')">Delete</a></td>
                                        
                                      
                                        </tr>                                     
                                 <?php
                                     }
                                 }
                                 ?>         
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
            
            
            
            
            
            
            
            
            


        </div>
    </div><!--/row-->

    <hr>


</div><!--/.fluid-container-->



<!-- Validate plugin -->
<script src="../resource/validate/jquery.validate.min.js"></script>

<!-- Scripts specific to this page -->
<script src="../resource/validate/script.js"></script>

</body>

<!-- Mirrored from wbpreview.com/previews/WB0918M29/pages/forms.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 19:44:31 GMT -->
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
                            duration: 3                                        
                        });
                    </script>
                    <?php
                }
                ?>