<?
if( empty($_POST['data']) ) 
	exit('Все плохо');
$data = json_decode($_POST['data'], true);
if(empty($data['firstname']) || empty($data['email']))
	exit('Нет необходимых данных!!!');

foreach( $data as $key => $value ) {
	$data[$key] = strip_tags(trim($value));
}


require_once 'php/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;


// $mail->isSMTP();                                      // Set mailer to use SMTP

$mail->setFrom($data['email'], $data['firstname']);
$mail->addAddress('alohawind@mail.ru', 'Егор Тиханин');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Это сообщение от: ';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send())
    exit('Message could not be sent.');
echo ('Message has been sent');

print_r($data);
?>