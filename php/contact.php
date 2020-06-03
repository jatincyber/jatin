<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

//check input

if ((empty($name) ||  empty($email) ||  empty($number)  ||  empty($subject))  ||  empty($message)  )

{
    echo "Please fill all the feilds";

}

else

{
mail("alimentationequillibree@gmail.com ", "form", $message , "From: $name
    <$email> <$number>  ") ;

    echo "<script type='text/javascript'>alert('your message sent successfully') ;
    window.history.log(-1);




    </script>"           ;

}





?>