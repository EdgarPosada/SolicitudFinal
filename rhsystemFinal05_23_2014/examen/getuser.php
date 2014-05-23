<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','solicitudempleo');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM solicitud WHERE estado_solicitud = '".$q."' ORDER BY fecha ASC";
$result = mysqli_query($con,$sql);



echo "class="."table table-sorting table-striped table-hover datatable"."cellpadding="."0"."cellspacing="0" width="100%">
<thead>
<tr>
<th>Fecha</th>
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Exámen Inglés</th>
<th>Información Completa</th>
<th>Actividad</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result)) {

$sql2 = "SELECT MAX( fecha ) FROM  log WHERE id_solicitud = '".$row['id_solicitud']."' ";
$ultimaFecha = mysqli_query($con,$sql2);

$ultimaFecha2 = mysqli_fetch_array($ultimaFecha);

  echo "<tr>";
  echo "<td>" . $ultimaFecha2['MAX( fecha )'] . "</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['paterno'] . "</td>";
  echo "<td>" . $row['materno'] . "</td>";
  echo "<td>" . $row['resultadoExamen'] . "</td>";
  echo "<td><a href="."infocompleta.php".">."."<i class="." fa fa-folder-open".">". "</a></td>";
  echo "<td><a href="."log.php".">."."<i class="."fa fa-bar-chart-o".">"."</a></td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>