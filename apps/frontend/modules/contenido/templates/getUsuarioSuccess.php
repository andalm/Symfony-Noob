<p>Hola <?php echo $nombre; ?></p>
<p>Variable $sf_user: <?php echo $sf_user->getAttribute('nombre') ?></p>
<?php echo link_to('Cerrar', 'contenido/destroyUser',
	  array(
		'class'    => 'enlace_especial',
		'absolute' => false))
?>


  
  