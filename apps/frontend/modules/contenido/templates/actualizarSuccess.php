<?php if ($sf_params->has('nombre')): ?>
  <p>¡Hola, <?php echo $sf_params->get('nombre'); ?>!</p>
<?php else: ?>
  <p>¡Hola, Anonimo!</p>
<?php endif; ?>
<p>Esto es una variable: "<?php echo $parametro; ?>"</p>

