<table class="table table-bordered table-striped table-hover">
	<h1>Registros de Usuarios</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Contraseña</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Genero</th>
		<th>Pais</th>
		<th>Foto</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from create_account");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td><?php echo $res['pictrure']; ?></td>
	</td>
	</tr>	
<?php 	
}
?>	