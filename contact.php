<?php

$name="";
$email="";
$tel="";
$msg="";

if(isset($_POST['name'])){
    $name=$_POST["name"];
}

if(isset($_POST['email'])){
    $email=$_POST["email"];
}

if(isset($_POST['tel'])){
    $tel=$_POST["tel"];
}

if(isset($_POST['msg'])){
    $msg=$_POST["msg"];
}

//echo $name.$email.$tel.$msg;

$body="
Name = ".$name."\n".
"Email = ".$email."\n".
"Tele = ".$tel."\n".
"Message = ".$msg;



// send email
mail("yasirulokesha01@gmail.com","Contact",$body);
?> 

<script>
alert("Message Sent!");
window.location.href="index.html";
</script>



