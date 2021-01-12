<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
	$back_msg = "";
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
        $back_msg = "All fields are required";
		$retVal = array("back_msg"=>$back_msg);
		echo json_encode($retVal);
    } elseif(!strchr($_POST['email'],"@")){
		$back_msg = "Email must have an at-sign (@)";
		$retVal = array("back_msg"=>$back_msg);
		echo json_encode($retVal);

    } else {
	    $to = "harshilpadhiyar786@gmail.com";
		$subject = $_POST['subject'];
		$txt = "Name: ".$_POST['name']."\r\nMessage: ".$_POST['message'];
		$headers = "From: ".$_POST['email'];

		mail($to,$subject,$txt,$headers);
	
	    $back_msg = "Response recorded, I will contact you soon..";
		$retVal = array("back_msg"=>$back_msg);
		echo json_encode($retVal);
    }
}

?>
