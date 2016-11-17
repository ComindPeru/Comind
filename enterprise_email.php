<?php
if (isset($_REQUEST['email']))  {
    //Email information
    $admin_email = "juan_davilacalderon@hotmail.com";
    $name = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['celular']
    $message = $_REQUEST['mensaje'];

    //send email
    if (mail($admin_email, $name, $message, $phone, "From: " . $email)) {
        echo 1;
    }
    else {
    	echo 0;
    }
}
?>