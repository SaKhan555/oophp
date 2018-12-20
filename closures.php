<?php 
$id = 99;
	$closure = function () use ($id) {
		return "selecet * from employee where id = '{$id}'";
	};

	echo $closure();
 ?>