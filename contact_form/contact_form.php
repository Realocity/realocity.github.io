<?php    
if(isset($_POST['submit'],$_POST['Name'],$_POST['Email'],$_POST['Subject'],$_POST['Message'])){
    $form_name = $_POST['Name']; 
    $form_email = $_POST['Email']; 
    $form_subject = $_POST['Subject']; 
    $form_message = $_POST['Message']; 

    $email_from = $email;
    $email_to = 'ssapkal101@gmail.com';

    $body = 'Name: ' . $form_name . "\n\n" . 'Email: ' . $form_email . "\n\n" . 'Subject: ' . $form_subject . "\n\n" . 'Message: ' . $form_message;

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