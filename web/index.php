<?php
//Patron MVC 
require_once __DIR__ . '/../app/Config.php';
require_once __DIR__ . "/../app/Controller.php";
require_once __DIR__ . "/../app/Model.php";


//enrutador para cada action se activa una opcion del controlador
$map = array(
     'inicio' => array('controller' =>'Controller', 'action' =>'inicio'),
     'listar' => array('controller' =>'Controller', 'action' =>'listar'),
     'insertar' => array('controller' =>'Controller', 'action' =>'insertar'),
     'buscar' => array('controller' =>'Controller', 'action' =>'buscarPorNombre'),
     'ver' => array('controller' =>'Controller', 'action' =>'ver')
 );

//parsear la ruta asociada

if(isset($_GET["ctl"]))
{
	if(isset($map[$_GET["ctl"]]))
	{
		$ruta = $_GET["ctl"];
	}
	else
	{
		header("Status: 404 Not Found");
		echo "<html><body><h1>Error 404: No existe la ruta <i>".
		$_GET["ctl"].
		"</h1></body></html>";

		exit;
	}
}
else{
	$ruta = "inicio";
}

//crear un controlador con los arrays del mapa de navegacion
$controlador = $map[$ruta];

//Ejecucion del Controlador asociado
if(method_exists($controlador["controller"], $controlador["action"]))
{
	call_user_func(array(new $controlador["controller"], $controlador["action"]));
}
else
{
	header("Status: 404 not found");
	echo "<html><body><h1>Error 404: El controlador <i>".
	$controlador["controller"].
	"->".
	$controlador["action"].
	"<i>no existe</h1></body></hmtl>";
}

?>