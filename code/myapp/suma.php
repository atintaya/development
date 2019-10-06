<?php
include_once 'db.php';

class Suma extends DB{

	function nuevaSuma($suma){
		$query = $this->connect()->prepare('insert into suma (sumando01, sumando02, resultado) values(:sumando01, :sumando02, :resultado) ');
		$query->execute(['sumando01'=>$suma['sumando01'], 'sumando02'=>$suma['sumando02'], 'resultado'=>($suma['sumando01'] + $suma['sumando02'])]);

		return $query;
	}
}
?>