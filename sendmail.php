<?php 

$email = $_POST["email"];
$from = $_POST["from"];
$subject = $_POST["subject"];
$text = $_POST["text"];

$header = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$timesToSend = $_POST["timesToSend"];
$timeToWait = $_POST["timeToWait"];

if($email != NULL && $from != NULL && $subject != NULL && $text != NULL){
    
    if($timesToSend != NULL && $timeToWait != NULL){
        
        for($i = 0; $i <= $timesToSend; $i += 1){
            
            mail($email, $subject, $text, $header);

            echo("Email sent!");
            
            sleep($timeToWait);
        
        }
            
    }else{
        
        mail($email, $subject, $text, $headers);

        echo("Email sent!");
        
    }
    
}else{
    
    echo("Please make sure every parameter was sent!");
    
}
?>