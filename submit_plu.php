
<?php

$host = 'mysql4.000webhost.com';
$user = 'a6322361_user';
$pass = 'lemonade3';

mysql_connect($host, $user, $pass);

mysql_select_db('a6322361_data');

// attributes for this item
$pluTitle = $_POST["pluTitle"];
$pluCode  = $_POST["pluCode"];

//Get the content of the image and then add slashes to it 
$imagetmp = addslashes (file_get_contents($_FILES['pluimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO PLU(Title, Code, Image) 
                           VALUES('$pluTitle', '$pluCode', '$imagetmp')";

mysql_query($insert_image);

?>

