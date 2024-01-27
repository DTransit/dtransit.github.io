<?php
$action=$_REQUEST['action'];
if ($action="")
{
}
else 
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name="")||($email="") || ($message==""))
    {
        echo "All fields required! Please fill the form out.";
    }
    else {
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using Contact Form: DTransit";
        mail("dylan.intwala@gmail.com", $subject, $message, $from);
        echo "Message sent!";
    }
}

?>
