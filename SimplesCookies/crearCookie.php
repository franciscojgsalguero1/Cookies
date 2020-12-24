<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Francisco José Gordo Salguero";
    // name, value, expires, path, domain, secure, httpOnly
    // creamos la cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>
<html>
    <head>
        <title> Crear Cookie </title>
    </head>
    <body>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
             echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
             echo "Cookie '" . $cookie_name . "' is set!<br>";
             echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

    </body>
</html>