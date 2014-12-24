<?php

if(isset($_GET['name'])){
$name = $_GET['name'];
$email = $_GET['email'];
$msg = $_GET['msg'];
$to = "binoybalu1993@gmail.com";
$subject = "Feedback mail";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>$msg</p>
<table>
<tr>
<th>Firstname</th>
<th>Email</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

$mailer = mail($to,$subject,$message,$headers);
 
    if($mailer) {
      echo '<script type="text/javascript">'
   , 'swal("Your Feedback Is!", "Submitted!", "success");'
   , '</script>';
}
    else{
        
        echo "Processing Error";
    }
    
}
 else{
     
     echo  "No data recieved";
 }   
?> 