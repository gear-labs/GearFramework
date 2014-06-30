<?php

class IndexController
{
	public function __construct()
	{
		$drawing = new IndexDrawing();
		$drawing->drawPage( 'Bienvenido a Gear Framework' );
	}
}

$page = new IndexController();