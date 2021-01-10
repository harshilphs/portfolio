<?php

session_start();
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
        $_SESSION['error'] = "All fields are required";
        header("location: index.php");
        return;
    } elseif(!strchr($_POST['email'],"@")){
		$_SESSION['error'] = "Email must have an at-sign (@)";
		header("location: index.php");
		return;
    } else {
	    $to = "harshilpadhiyar786@gmail.com";
		$subject = $_POST['subject'];
		$txt = "Name: ".$_POST['name']."\r\nMessage: ".$_POST['message'];
		$headers = "From: ".$_POST['email'];

		mail($to,$subject,$txt,$headers);
	
	    $_SESSION['success'] = "Response recorded, I'll contact you soon..";
	    header("location: index.php");
	    return;
    }
}

?>
