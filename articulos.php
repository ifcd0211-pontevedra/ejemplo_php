<?php

$articuloSeleccionado = $_GET['articulo'];

$conexion = new mysqli("localhost", "root", "", "jardineria");

if(!$conexion){
	echo $conexion->error;
}

$consulta = "SELECT * FROM productos WHERE CodigoProducto = \"$articuloSeleccionado\"";

$solucion = $conexion->query($consulta);

while($producto = mysqli_fetch_object($solucion)){
	echo "<h1>Nombre: ".$producto->Nombre."</h1>";
	echo "<p>Gama: ".$producto->Gama."</p>";
	echo "<p>Dimensiones: ".$producto->Dimensiones."</p>";
	echo "<p>Proveedor: ".$producto->Proveedor."</p>";
	echo "<p>Descripcion: ".$producto->Descripcion."</p>";
	echo "<p>CantidadEnStock: ".$producto->CantidadEnStock."</p>";
	echo "<p>PrecioVenta: ".$producto->PrecioVenta."</p>";
	echo "<p>PrecioProveedor: ".$producto->PrecioProveedor."</p>";
}

?>