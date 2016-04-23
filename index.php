
<!--<script type="text/javascript">-->
<!--    window.location.href = 'login.php';-->
<!--</script>-->

<?php

session_start();

if (!$_SESSION["loggedIn"]) {
    header("Location: /login.php");
} else {
    header("Location: /manager_dashboard.php");
}

?>

