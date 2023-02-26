<?php 

$tomail = $_GET['tomail'];
$sub = "testing";
$message = "Dear $tomail you passcode for khava mate is NSNSNKD8394";
$header = 'MIME-VERSION: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'To: '.$tomail."\r\n";
    if(mail($tomail,$sub,$message,$header))
    {
        $myobj=array('status'=>'success','message'=>'Check your mail to reset password!');
        echo json_encode($myobj);
    }
    else{
        $myobj=array('status'=>'error','message'=>'Invalid e-mail!');
        echo json_encode($myobj);
    }
?>