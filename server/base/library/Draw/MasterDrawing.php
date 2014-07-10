<?php

namespace Gear\Draw;

class MasterDrawing
{
	protected $className; 

	protected $template;

	public function __construct()
	{
		$classname = get_class($this);
		$this->className = str_replace( 'Drawing', '', $classname );

	}//end __construct


	public function setTemplate()
	{
		//Establece el directorio de las listas de una vista		
		$this->template = file_get_contents( 'client/html/master/' . lcfirst( $this->className ) . '/' . lcfirst( $this->className ) . '.html' );
	}

	public function translateConst()
	{
		global $drawer;
		$this->template = $drawer->draw( $this->translate, $this->template );
	}
}//end MasterView