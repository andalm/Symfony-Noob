<p><?php echo $message ?><p>
<form method="post" action="<?php echo url_for('contenido/setUsuario') ?>">
  <label for="nombre">¿Cómo te llamas?</label>
  <input type="text" name="nombre" id="nombre" value="" />
  <input type="submit" value="Ok" />
</form>
<?php echo link_to('Nunca digo mi nombre', 'contenido/GetUsuario',
	  array(
		'class'    => 'enlace_especial',
		'absolute' => false))
?>


  
  