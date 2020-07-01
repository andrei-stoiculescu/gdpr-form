<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



session_start();
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

#if(isset($_POST['name'])) {$name = $_POST['name'];}
if(isset($_POST['name'])) {$_SESSION['name'] = $_POST['name'];}
if(isset($_POST['tel'])) {$tel = $_POST['tel'];}
if(isset($_POST['email'])) {$email = $_POST['email'];}
if(isset($_POST['uid'])) {$uid = $_POST['uid'];}
if(isset($_POST['group1'])) {$group1 = $_POST['group1'];}
if(isset($_POST['group2'])) {$group2 = $_POST['group2'];}
if(isset($_POST['group3'])) {$group3 = $_POST['group3'];}
if(isset($_POST['group3'])) {$group4 = $_POST['group4'];}


if(isset($_POST['imgOutput'])){$img_output = $_POST['imgOutput'];}

$bse = preg_replace('#^data:image/[^;]+;base64,#', '', $img_output );

if ( base64_encode( base64_decode($bse) ) === $bse ) {

require_once 'dompdf/autoload.inc.php';


  $html = '<!DOCTYPE html><html><head><style type="text/css">
	h1 {
		text-align: center;
		font-size: 18px;
	}
	h2 {
	  font-size: 16px;
	  margin-top: 30px;
}
	p {
		text-align: justify;
	}

	.li-text{
	  margin:20px;
	  text-align: justify;
	  line-height: 20px;
}
	.spacer{
		height:70px;
	}
</style></head><body>

  <h1>GDPR Consent Form</h1>
  <br>
  <p>Please identify yourself and fill in the following fields</p>
  <br>
  <p>Name: '. $_SESSION['name'] .'<br>Phone: ' . $tel .'<br>E-mail: ' . $email .'<br>ID number: ' . $uid .'</p>

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec turpis elit. Phasellus eget leo finibus, egestas odio et, bibendum diam. In at sodales massa, in suscipit elit. Suspendisse sagittis dignissim nisi, ut vehicula diam porttitor venenatis. Sed a tincidunt urna. Praesent mauris massa, dapibus et tempor eu, lacinia non odio. Curabitur et nulla nec neque facilisis pharetra eget nec risus. Phasellus lobortis ex eros. Aliquam convallis, risus in malesuada faucibus, ante orci accumsan augue, et luctus dolor risus a mi. Aliquam erat volutpat. Nam pretium finibus consectetur. Morbi ornare arcu id hendrerit rhoncus.</p>

  <div class="spacer">&nbsp;</div>

  <p>As per the below options, I express my free and informed consent to the processing of my personal data for the following:</p>

  <li>Direct marketing:&nbsp;<strong>'. $group1 .'</strong></li><br><br>
  <li>Promotion of other services:&nbsp;<strong>'. $group2 .'</strong></li><br><br>
  <li>Receiving newsletters:&nbsp;<strong>'. $group3 .'</strong></li><br><br>
  <li>Consent for third party marketing::&nbsp;<strong>'. $group4 .'</strong></li>

  <p style="margin-left:550px;">Date: '. date("d.m.Y") .'</p>
  <p style="margin-left:550px;">Signature:</p>
  <br />
  <img style="margin-left:470px;" src="'. $img_output .'">
 &nbsp;<br></body></html>';


  $dompdf = new DOMPDF;
  $dompdf->load_html($html);
  $dompdf->render();
  $dompdf->setPaper('A4', 'landscape');
 file_put_contents('assets/'. $_SESSION['name'] .'.pdf', $dompdf->output());
 readfile("download.html");
 $file = 'assets/'. $_SESSION['name'] .'.pdf';
 $hash = hash_file('md5', $file);
}

else {
    echo ("ERROR");
}

?>

<!-- To automatically send the for via email uncomment this section
<?php
/* Email Detials */
  $mail_to = "name@email.com";
  $from_mail = "name@email.com";
  $from_name = "name@email.com";
  $reply_to = "name@email.com";
  $subject = "GDPR Consent form";
  $message_body = "Hi,\r\n" . $_SESSION['name'] . " signed the GDPR consent form. \r\n Hash: " . $hash ."";
 
/* Set the email header */
    // Generate a boundary
    $boundary = md5(uniqid(time()));
     
    // Email header
   /* $header = "From: ".$from_name." \r\n";*/
   /* $header .= "Reply-To: ".$reply_to."\r\n";*/
    $header .= "MIME-Version: 1.0\r\n";
     
    // Multipart wraps the Email Content and Attachment
    $header .= "Content-Type: multipart/mixed;\r\n";
    $header .= " boundary=\"".$boundary."\"";
 
    /* $message .= "This is a multi-part message in MIME format.\r\n\r\n"; */
    $message .= "--".$boundary."\r\n";
     
    // Email content
    // Content-type can be text/plain or text/html
    $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n";
    $message .= "\r\n";
    $message .= "$message_body\r\n";
    $message .= "--".$boundary."\r\n";
     
    // Attachment
    // Edit content type for different file extensions
    $message .= "Content-Type: application/xml;\r\n";
    $message .= " name=\"".$file_name."\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment;\r\n";
    $message .= " filename=\"".$file_name."\"\r\n";
    $message .= "\r\n".$content."\r\n";
    $message .= "--".$boundary."--\r\n";
     
    // Send email
    if (mail($mail_to, $subject, $message, $header)) {
        echo "Thank you!";
    } else {
        echo "Oops, something went wrong.";
    }
    exit()
?>
-->