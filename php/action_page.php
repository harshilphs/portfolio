<?php

if(isset($_POST['g-recaptcha-response'])) {
   // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6LfjLXUaAAAAAEnVtkPcHvpAVETLkUBhysA_Swcn';
   $url = 'https://www.google.com/recaptcha/api/siteverify';

   // RECAPTCH RESPONSE
   $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
   $data = json_decode($recaptcha_response);

   if(isset($data->success) &&  $data->success === true) {

       
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

                require_once('pdo.php');
                
                $stmt = $pdo->prepare('INSERT INTO UserResponse(user_name,user_mail,user_sub,user_msg) VALUES ( :name, :mail, :sub, :msg)');

                $stmt->execute(array(
                    ':name' => $_POST['name'],
                    ':mail' => $_POST['email'],
                    ':sub' => $subject,
                    ':msg' => $_POST['message'])
                );
                $pdo=null;
                $back_msg = "Done";
                $retVal = array("back_msg"=>$back_msg);
                echo json_encode($retVal);
            }
        }



   }
   else {
       $back_msg = "";
       $back_msg = "val failed";
       $retVal = array("back_msg"=>$back_msg);
       echo json_encode($retVal);
   }
 }

?>
