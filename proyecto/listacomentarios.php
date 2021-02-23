<?php 
$mostrar = "SELECT * FROM comentario";
$mostrar1 = $conn->query($mostrar);
while($fila=$mostrar1->fetch_assoc()){

  echo "<tr class='".$fila['id_coment']."'>";
  echo "<td>".$fila['id_coment']."</td>";
  echo "<td class='name'><a style='text-decoration:none;color:black;'>".$fila['valoracion']."</a></td>";
  echo "<td class='name'><a style='text-decoration:none;color:black;'>".$fila['nombre']."</a></td>";
  echo "<td class='email'>".$fila['comentario']."</td>";
  echo "<td>".$fila['fecha']."</td>";
?>
  <!--<td><?php echo"<a href='editar.php?id=".$fila['id_coment']."' class='btn btn-success btn-sm'> Modificar </a>"; ?>
  <?php echo"<a href='eliminar.php?id=".$fila['id_coment']."' class='btn btn-danger btn-sm'> Eliminar </a>
  </td>
  </tr>";}?>-->