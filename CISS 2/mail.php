<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "sofiullahc@gmail.com";

mail($recipient, $phone, $comment, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <div class="logo"><a href="#home"><img src="images/nj.png" style="max-width: 30%;"></a> 
    </div>
</head>
<body>
<div class="header_main">
<!-- header inner -->

   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
               <div class="center-desk">
                  <div class="logo"><a href="#home"><img src="images/nj.png" style="max-width: 30%;"></a> 
                  </div>
               </div>
            </div>
         </div>
         </div>

    <div class="col-sm-12">
    <h1 class="choose_text"> Thank you for contacting us. I will get back to you as soon as possible! </h1>
    <p class="lorem_text"> Go back to the <a href="contact.html">contact page</a>.</p>
</div
</body>
</html>
';


?>