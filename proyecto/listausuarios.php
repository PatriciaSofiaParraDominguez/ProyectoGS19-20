<?php 
$mostrar = "SELECT * FROM user";
$mostrar1 = $conn->query($mostrar);
while($fila=$mostrar1->fetch_assoc()){

  echo "<tr class='".$fila['id_user']."'>";
  echo "<td>".$fila['id_user']."</td>";
  echo "<td class='name'><a style='text-decoration:none;color:black;'>".$fila['full_name']."</a></td>";
  echo "<td class='email'>".$fila['email']."</td>";
  echo "<td>".$fila['username']."</td>";
  echo "<td>".$fila['password']."</td>";
  echo "<td>".$fila['telefono']."</td>";
  echo "<td>".$fila['rango_user']."</td>";
?>
  <td><?php echo"<a href='editar.php?id=".$fila['id_user']."' class='btn btn-success btn-sm'> Modificar </a>"; ?>
      <?php echo"<a href='eliminar.php?id=".$fila['id_user']."' class='btn btn-danger btn-sm'> Eliminar </a>
  </td>
  </tr>";}?> 