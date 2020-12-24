<!DOCTYPE html>
<?php
    setcookie("user", "Francisco José Gordo Salguero", time() + 3600, '/');
?>
<html>
    <head>
        <title> Comprobar Cookie </title>
    </head>
    <body>

        <?php
            $output = "";
            if(count($_COOKIE) > 0) {
              $output .= "Cookies are enabled.";
            } else {
              $output .= "Cookies are disabled.";
            }

            echo $output;
        ?>

    </body>
</html>