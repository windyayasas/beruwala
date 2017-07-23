

<?

$name=$_POST['name'];
$Email=$_POST['email'];
$message=$_POST['message'];


    
    $body .= "Name: " . $name . "\n"; 
    $body .= "Email: " . $Email . "\n"; 
    $body .= "Message: " . $message . "\n"; 

    //replace with your email
    //mail("test@email.com","New email",$body); 

    $to = "dilresthorana@gmail.com"; 
    $subject = "Contact Form";
    $subject2 = "Copy of your form submission";
    $message = $body ;
    $message2 = "Here is a copy of your message \n"+$body ;
    $headers = "From:" . $Email;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($Email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        // You can also use header('Location: thank_you.php'); to redirect to another page.

  
?>



  
   
   
   
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your message has been sent successfully. We will contact you shortly.");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html"> 

</head>