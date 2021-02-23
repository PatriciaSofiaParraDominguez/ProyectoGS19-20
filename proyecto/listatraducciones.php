<?php 
$mostrar = "SELECT * FROM documento";
$mostrar1 = $conn->query($mostrar);
while($fila=$mostrar1->fetch_assoc()){

  echo "<tr class='".$fila['id_docu']."'>";
  echo "<td>".$fila['id_docu']."</td>";
  echo "<td class='name'><a style='text-decoration:none;color:black;'>".$fila['full_name']."</a></td>";
  echo "<td class='email'>".$fila['email']."</td>";
  echo "<td>".$fila['telefono']."</td>";
  echo "<td>".$fila['mensaje']."</td>";
  ?>
  <!--<td><?php echo"<a href='editar.php?id=".$fila['id_docu']."' class='btn btn-success btn-sm'> Modificar </a>"; ?>
  <?php echo"<a href='eliminar.php?id=".$fila['id_docu']."' class='btn btn-danger btn-sm'> Eliminar </a>
  </td>
  </tr>";}?> -->