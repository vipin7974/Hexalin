<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $to='viprock234@gmail.com';
    $subject="Feedback from site";
    $message="Name: ".$name."\n";."phone:".$mobile."\n"."message: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to,$subject,$message,$headers)){
        echo"<h1>Sent Successfully!!Thank You"." ".$name.", we'll contact you shortly.</h1>";
    }
    else{
        echo"somthing went wrong";
    }
}
?>