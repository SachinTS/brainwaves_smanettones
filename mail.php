
<?php
require 'PHPMailerAutoload.php';
 
$mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and

$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'schandana.f15@gmail.com';                   // SMTP username
$mail->Password = 'cutechandana';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('schandana.f15@gmail.com', 'chandana');     //Set who the message is to be sent from
$mail->addReplyTo('schandana.f15@gmail.com', 'chandana');  //Set an alternative reply-to address
$mail->addAddress('sachinjbms@gmail.com', 'sachin j');  // Add a recipient
$mail->addAddress('nagaravali.t@gmail.com');               // Name is optional
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
 
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('example1.html'), dirname(__FILE__));
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
?>
=======

<?php
   $to = "sachintshebbar@gmail.com";
   $subject = "This is subject";
   $message = "The pin is 8456.";
   $header = "From:sachinjbms@gmail.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully . The pin is 8456";
   }
   else
   {
      //echo "Message could not be sent...";
   }header('Location: page2.php');
exit;

?>
