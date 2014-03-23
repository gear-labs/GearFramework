<?php

require_once 'server/libraries.php'; // Carga las librerias a usar

$server = str_replace( $_SERVER[ 'DOCUMENT_ROOT' ], '', __FILE__ );
$server = str_replace( 'process.php', '', $server );

$config = require 'config.php';

$drawer = new Gear\Draw\Drawer( $config[ 'Master Page' ] ); // pasa el objeto index por referencia para poder imprimir la pagina


$urlController = $drawer->getMVC( 'action', 'index', 'error' );//obtiene el controller de acuerdo al valor de la posicion action en $_GET[]