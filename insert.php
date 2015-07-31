
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $from = 'Together for Better Site'; 
    $to = 'brandoncranmore@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $Comments";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
    }
}
?>
