<?php
include_once 'apisumas.php';

$api = new ApiSumas();

if(isset($_POST['sumando01']) && isset($_POST['sumando02'])){
	
		$item = array(
			'sumando01' => $_POST['sumando01'],
			'sumando02' => $_POST['sumando02']
			
		);
		$api->add($item);

	

}
else
{
	$api->error('Error al llamar la api');
}


?>