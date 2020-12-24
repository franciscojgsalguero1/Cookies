<!DOCTYPE html>
<?php
    // set the expiration date to one hour ago
    // se envia una cookie con los mismos valores excepto el de expiración y el de valor (que no importa sea igual)
    setcookie("user", "Francisco José Gordo Salguero", time() - 3600);
?>
<html>
    <head>
        <title> Eliminar Cookie </title>
    </head>
    <body>

        <?php
            echo "Cookie 'user' is deleted.";
        ?>

    </body>
</html>