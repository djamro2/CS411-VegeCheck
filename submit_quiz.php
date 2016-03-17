
<?php

// used to login to the database
require("util/database.php");

// attributes for this item
$pluTitle = $_POST["pluTitle"];
$pluCode  = $_POST["pluCode"];

//Get the content of the image and then add slashes to it
$imagetmp = addslashes (file_get_contents($_FILES['pluimage']['tmp_name']));

session_start();
$managerID = $_SESSION["managerID"];

//Insert the image name and image content in image_table
$insert_image=sprintf("INSERT INTO plu(pluID, title, managerID, image)
                           VALUES('%d', '%s', '%d', '%s')", $pluCode, mysql_real_escape_string($pluTitle), $managerID, $imagetmp);

mysql_query($insert_image);
header( 'Location: manager_dashboard.php' ) ;
exit();
?>

