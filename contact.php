<?php  
 
require("./PHPMailer/class.phpmailer.php"); // path to the PHPMailer class

$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_phone = $_POST['cf_phone'];
$field_duedate = $_POST['cf_duedate'];
$field_message = $_POST['cf_message'];

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Due date: '.$field_duedate."\n";
$body_message .= 'Message: '.$field_message;

$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "thewholebundle@gmail.com"; // SMTP username
$mail->Password = "Werth0626"; // SMTP password 
 
$mail->AddReplyTo($field_email, $field_name);
$mail->SetFrom($field_email, 'The Whole Bundle');
$mail->AddAddress('contact@wholebundle.com');  
 
$mail->Subject  = 'Whole Bundle Inquiry from '.$field_name;
$mail->Body     = $body_message;
$mail->WordWrap = 50;  
 
if($mail->Send()){ ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for your message. We will contact you soon.');
		window.location = 'postpartum-doula-contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an email to webmaster@wholebundle.com');
		window.location = 'postpartum-doula-contact.html';
	</script>
<?php
}
?>