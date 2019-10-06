<?php
include_once 'suma.php';

class ApiSumas
{
	
	
	
	function printJSON($array){
		echo '<code>'.json_encode($array).'</code>';

	}

	function error($mensaje){
		echo '<code>'. json_encode(array('mensaje'=>$mensaje)).'</code>';
	}

	
	function add($item){
		$suma = new Suma();
		$res = $suma->nuevaSuma($item);
		$this->exito('Suma Registrada');
	}

	function exito($mensaje){
		echo '<code>'. json_encode(array('mensaje'=>$mensaje)).'</code>';
	}

	

   
   
}
?>