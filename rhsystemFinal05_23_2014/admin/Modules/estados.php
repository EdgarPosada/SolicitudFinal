    <?php 
    if($estadoId)
    {
    ?>

 <?php if($type_user==3|| $type_user==2 || $type_user==1)
     { ?> 
    <option value="1"  <?php if($estadoId == 1) echo 'selected'; ?> >Nuevo</option>       
    <option value="2"  <?php if($estadoId == 2) echo 'selected'; ?> >Contactado</option>                                                                                                             
    <option value="3"  <?php if($estadoId == 3) echo 'selected'; ?> >Entrevistado</option>
<?php }?>
    
     <?php if($type_user==2 || $type_user==1)
     { ?> 
    <option value="4"  <?php if($estadoId == 4) echo 'selected'; ?> >Entrenamiento</option>
    <option value="5"  <?php if($estadoId == 5) echo 'selected'; ?> >Contratado</option>
    <option value="6"  <?php if($estadoId == 6) echo 'selected'; ?> >Despedido</option>
    <option value="7" <?php if($estadoId == 7) echo 'selected'; ?> >Renuncia</option>
    <option value="8" <?php if($estadoId == 8) echo 'selected'; ?> >No Elegible</option>

    <?php }?>
 
        
<?php
}else
{
?>
    
   
    
    
    
    
 <?php if($type_user==3|| $type_user==2 || $type_user==1)
     { ?>
   
    <option value="1">Nuevo</option>
    <option value="2">Contactado</option>                                                                                                             
    <option value="3">Entrevistado</option>
    
    <?php }?>
         <?php if($type_user==2 || $type_user==1)
     { ?> 
    <option value="4">Entrenamiento</option>
    <option value="5">Contratado</option>
    <option value="6">Despedido</option>
    <option value="7">Renuncia</option>
    <option value="8">No Elegible</option>
     <option value="0">Todos</option>
    <?php }?>
    
    
    
<?php
}
?>