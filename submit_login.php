

<?php

    /* change this in the future */

    if ($_POST["username"] === "username" && $_POST["password"] === "password") {
        header("Location: /manager_dashboard.php");
        die();
    } else {
        header("Location: /login.php?loginFail=true");
        die();
    }

?>

