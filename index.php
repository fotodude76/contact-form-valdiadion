<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name: '.$_POST['fullname'].'<br />
Phone:  '.$_POST['phone'].'<br />
Email:  '.$_POST['emailid'].'<br />
Message:   '.$_POST['message'].'
';
    require "php/PHPMailerAutoload.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "XXXXXXXXXX ";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "XXXX@XXX.XX"; // Your full Gmail address
    $mail->Password   = "XXXXXXX"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Inquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("info@flowersbylovelylily.com", "Website Inquiry "); // Where to send it - Recipient
    $mail->AddCC("donotreply@flowersbylovelylily.com", "Website Inquiry");
    $result = $mail->Send();        // Send!  
    $message = $result ? '<div class="alert alert-success" role="alert">Message Sent Successfully!</div>' : '<div class="alert alert-danger" role="alert"><strong>Error!</strong>There was a problem delivering the message.</div>';  
unset($mail);

    

}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flowers by Lovely Lily</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css'>
	<link rel='stylesheet' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
     

<script  src="js/index.js"></script>
<script  src="js/testominal.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/testominal.css" rel="stylesheet">
	<link rel="icon" href="favicon.ico">




</head>
<body>



    <!-- Contact Form -->
   <section id="contactform" class="contactform">
       
    <div class="contactform">
    <div class="panel panel-default">
        <div class="panel-heading">
        <h2 class="panel-title">Contact Us</h2>
        </div>
        <div class="panel-body">
        <form name="form1" id="form1" action="" method="post">
                <fieldset>
                  <input type="text" class="form-control" name="fullname" placeholder="Name" />
                  <br />
                  <!--input type="text" class="form-control" name="subject" placeholder="Subject" />
                  <br /-->
                  <input type="text" class="form-control" name="phone" placeholder="Phone" />
                  <br />
                  <input type="email" class="form-control" name="emailid" placeholder="Email" />
                  <br />
                  <textarea rows="4" class="form-control" cols="20" name="message" placeholder="Message"></textarea>
                  <br />
                  <input type="submit" class="btn btn-default"name="submit" value="Send Message" />

                </fieldset>
        </form>
        <div class="confirmation">
        <p><?php if(!empty($message)) echo $message; ?></p>
    </div>
        </div>
    </div>
    </div>
      </section>
      <!-- End Contact Form -->
    
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script> baguetteBox.run('.compact-gallery', { animation: 'slideIn'});  </script>
        <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

	</body>
	</html>
