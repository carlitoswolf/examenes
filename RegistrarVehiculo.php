<?php

include_once 'Database.php';
include_once 'Vehiculo.php';


$database = new Database();
$db = $database->getConnection();

$item = new Vehiculo($db);
	 	

if (isset($_POST['txtID']) && isset($_POST['txtNombre']) && isset($_POST['txtFecha']) && isset($_POST['txtDepto']) && isset($_POST['txtModelo']) && isset($_POST['txtSexo']) && isset($_POST['txtPlaca']))
{
		$placa = $_POST['txtPlaca'];
	    $modelo = $_POST['txtModelo'];
	    $idPropietario = $_POST['txtID'];
	    $nombrePropietario = $_POST['txtNombre'];
	    $fechaNacimiento = $_POST['txtFecha'];
	    $sexo = $_POST['txtSexo'];
	    $tipoPropietario = $_POST['txtTipo'];
	    $departamento = $_POST['txtDepto'];	

	    $item->placa =$placa;
		$item->modelo = $modelo;
		$item->idPropietario = $idPropietario;
		$item->nombrePropietario = $nombrePropietario;
		$item->fechaNacimiento = $fechaNacimiento;
		$item->sexo = $sexo;
		$item->tipoPropietario = $tipoPropietario;
		$item->departamento = $departamento;

	if($item->createVehiculo())
	{
		echo "<br>";
		echo "Creacion existosa.";
		echo "<br>";
		echo "<a href='Principal.php'>REGRESAR ATRAS</a>";
	}else
 	{
 		echo "No se pudo crear, error.";
 	}
}else{
	echo "<br>";
	echo "ERROR, the ejecution is stop";
}
?>