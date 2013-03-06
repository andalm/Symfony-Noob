<?php

/**
 * contenido actions.
 *
 * @package    prueba1
 * @subpackage contenido
 * @author     Andres Aldana
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z 
 */
class contenidoActions extends sfActions
{
	public function executeVer()
	{
		$hoy = getdate();
		$this->hora = $hoy['hours'];		
	}
	
	public function executeActualizar($peticion)
	{
		$this->nombre = $peticion->getParameter('nombre');
		//$this->peticion = var_dump($peticion);
	}
}
