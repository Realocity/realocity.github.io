<?php    
if(isset($_POST['submit'],$_POST['Name'],$_POST['Email'],$_POST['Subject'],$_POST['Message'])){
    $name = $_POST['Name']; 
    $email = $_POST['Email']; 
    $subject = $_POST['Subject']; 
    $message = $_POST['Message']; 

    $email_from = $email;
    $email_to = 'ssapkal101@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    $response = array();

    if($success){
        $response['success'] = true;
        $response['message'] = 'Email sent!';
    }else{
        $response['success'] = false;
        $response['message'] = 'Email sent!';
    }
}else{
    $response['success'] = false;
    $response['message'] = 'post variables are not set';
}

echo json_encode($response);
//die;
?>