<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $to='mo.juseph@gmail.com';
    $subject='from My Portfolio';
    $message="name: ".$name."\n"."Wrote the following: "."\n\n".$message;
    $headers="From: ".$mailFrom;

    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Sent Successfuly! Thank you"." ".$name.", I will contact you shortly!</h1>";
    }
    else{
        echo "Something went wrong!";
    }
    

    // $mailTo = "mo.juseph@utoronto.ca";
    // $headers = "From: ".$mailFrom;
    // $txt = "You have received an e-mail from ".$name.".\n\n".$message;


    // mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.php?mailsend");
}
?>