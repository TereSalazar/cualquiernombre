<?php
	include('header.php');
	require_once('clases/Archivo.php');
	require_once('clases/Global.php');
	head('Pictotime','Inicio');
	$global = new G();
?>
<h1>PICTOTIME</h1>
<div class="row">
<?php
	$archivos = new Archivo();
	$cursor = $archivos->getArchivos(12);
	foreach($cursor as $fila){
?>
<div class="col-sm-12 col-md-4 col-lg-4">
	<div class="thumbnail">
		<?php echo '<img class="img-responsive img-circle" src="ftp://'.$global->getFtpServer().'/files/'.$fila['url'].'">'; ?>
		<div class="caption">
			<h3><?php echo implode(' ', $fila["nombreImagen"]); ?></h3>
			<?php echo '<p><a href="image.php?image='.$fila["_id"].'" class="btn btn-primary" role="button">Ver</a></p>'; ?>
		</div>
	</div>
</div>
<?php
	}
?>
</div>
<?php
	foot();
?>
