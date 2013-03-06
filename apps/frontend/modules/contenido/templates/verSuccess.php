<p>¡Hola, Mundo!</p>

<?php if ($hora >= 18): ?>
	<p>Quizás debería decir buenas tardes. Ya son las <?php echo $hora ?>.</p>
<?php endif; ?>

<form method="post" action="<?php echo url_for('contenido/actualizar') ?>">
  <label for="nombre">¿Cómo te llamas?</label>
  <input type="text" name="nombre" id="nombre" value="" />
  <input type="submit" value="Ok" />
  <?php echo link_to('Nunca digo mi nombre', 'contenido/actualizar?nombre=anonimo',
	  array(
		'class'    => 'enlace_especial',
		'confirm'  => '¿Estás seguro?',
		'absolute' => false
	  ));
  ?>
</form>


  
  