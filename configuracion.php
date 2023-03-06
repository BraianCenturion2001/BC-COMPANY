<?php

/////////////////////////////////////
///////// CONFIGURACIÓN APP /////////
/////////////////////////////////////

$GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'];

// INCLUSIÓN FUNCIONES
include_once 'Utiles/funciones.php';
include_once 'Utiles/funcionesMailer.php';

// MODIFICAR SEGÚN TENGAS EL PROYECTO GUARDADO LOCALMENTE
$PROYECTO = 'BC-COMPANY';

// ALMACENA EL DIRECTORIO DEL PROYECTO
$ROOT = $_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";

$GLOBALS['IMGS'] = $ROOT . "Vista/img/"; // CONTROL IMAGEN GUARDA LOS ARCHIVOS EN UNA SUBCARPETA

?>