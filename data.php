<?
if( empty($_POST['data']) ) 
	exit('Все плохо');
$data = json_decode($_POST['data'], true);
if(empty($data['firstname']) || empty($data['email']))
	exit('Нет необходимых данных!!!');
print_r ($data);
exit('Хорошо!!!');
?>