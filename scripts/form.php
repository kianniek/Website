<?php
if(isset($_POST['submit'])){
    $to = "kianniek@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    function_alert()
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

    function function_alert() { 
              
        // Display the alert box; note the Js tags within echo, it performs the magic
        echo "<script>Mail Sent. Thank you " . $name . ", we will contact you shortly.</script>"; 
    } 
?>