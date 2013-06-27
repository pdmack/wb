<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_phone = $_POST['cf_phone'];
$field_duedate = $_POST['cf_duedate'];
$field_message = $_POST['cf_message'];

$mail_to = 'contact@wholebundle.com';
$subject = 'Whole Bundle Inquiry from '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Due date: '.$field_duedate."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
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
