<?php

/**
 * contenido actions.
 *
 * @package    prueba
 * @subpackage contenido
 * @author     Andres Aldana
 * @version    actions.class.php 23810 2009-11-12 11:07:44Z 
 */
class contenidoActions extends sfActions
{
	public function preExecute()
	{
		// El código insertado aquí se ejecuta al principio de cada llamada a una acción
		// ...
		
		echo 'Antes de cada peticion<br\>';
	}
	
	public function executeVer()
	{
		$hoy = getdate();
		$this->hora = $hoy['hours'];		
	}
	
	public function executeActualizar($peticion)
	{
		$this->nombre = $peticion->getParameter('nombre');
		echo "Esto viene del archivo de conficuracion: ".sfConfig::get('app_tarjetascredito_falsa');
			 
		// Obteniendo información del controlador
		$nombreModulo  = $this->getModuleName();
		$nombreAccion  = $this->getActionName();
	 
		// Obteniendo objetos del núcleo del framework
		$sesionUsuario = $this->getUser();
		$respuesta     = $this->getResponse();
		$controlador   = $this->getController();
		$contexto      = $this->getContext();
	 
		// Creando variables de la acción para pasar información a la plantilla
		$this->parametro = 'Parametro para la vista'; // Versión corta.
		
	}
	
	public function executeSetUsuario($peticion)
	{
		if( $peticion->hasParameter('nombre') && !$this->getUser()->isAuthenticated() )
		{
			$nombreEnviado = $peticion->getParameter('nombre');
			// Guardar información en la sesión del usuario
			$this->getUser()->setAttribute('nombre', $nombreEnviado);
			// Autenticar usuario para tener acceso a areas restringidas
			$this->getUser()->setAuthenticated(true);
			$this->redirect('contenido/GetUsuario');			
		}
	}
	
	public function executeGetUsuario($peticion)
	{
		// Obtener información de la sesión del usuario con un valor por defecto
		$this->nombre = $this->getUser()->getAttribute('nombre', 'Anónimo');
	}
	
	public function executeDestroyUser($peticion)
	{
		//Eliminar algunos atributos de usaurio
		//$this->getUser()->getAttributeHolder()->remove('nombre');
		//Limpiar totalmente 
		$this->getUser()->getAttributeHolder()->clear();
		//Quitar acceso
		$this->getUser()->setAuthenticated(false);
		$this->redirect('contenido/SetUsuario');
	}
	
	public function executeCabecera()
	{
		$salida = '<"titulo","Mi carta sencilla"],["nombre","Sr. Pérez">';
		$this->getResponse()->setHttpHeader("X-JSON", '('.$salida.')');
	 
		return sfView::HEADER_ONLY;
	}
	
	public function postExecute()
	{
		// El código insertado aquí se ejecuta al final de cada llamada a la acción
		//...
		
		echo '<br\>Al final de cada peticion';
	}
	
	protected function miPropioMetodo()
	{
		// Se pueden crear métodos propios, siempre que su nombre no comience por "execute" 
		// En ese case, es mejor declarar los métodos como protected o private
		// ...
	}
}
