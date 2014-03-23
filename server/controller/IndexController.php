<?php

require_once 'server/drawing/IndexDrawing.php';

class IndexController
{
	public function __construct()
	{
		$draw = new IndexDrawing();
		$draw->drawPage( 'Bienvenido a Gear Framework' );
	}
}

$page = new IndexController();