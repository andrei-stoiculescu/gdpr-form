<?php 
session_start();
$file = 'assets/'. $_SESSION['name'] .'.pdf';
if ( !file_exists($file) ) die("File not found");
header("Content-type:application/pdf");
// doc name
header("Content-Disposition:attachment;filename=Signed_GDPR_form.pdf");
// doc src
readfile('assets/'. $_SESSION['name'] .'.pdf');
exit();
 ?>