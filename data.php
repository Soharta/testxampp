<?
if( empty($_POST['data']) ) echo 'Все плохо';
	// echo 'Все хорошо!!!!!';
	$data = json_decode($_POST['data'], true);
	exit ($data);
?>