<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Francisco José Gordo Salguero2";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <head>
        <title> Modificar Cookie </title>
    </head>
    <body>

        <?php
            $output .= "";
            if(!isset($_COOKIE[$cookie_name])) {
              $output .= "Cookie named '" . $cookie_name . "' is not set!";
            } else {
              $output .= "Cookie '" . $cookie_name . "' is set!<br>";
              $output .= "Value is: " . $_COOKIE[$cookie_name];
            }

            echo $output;
        ?>
    </body>
</html>