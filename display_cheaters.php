<html>
<h1> Suspected Employees </h1>
<?php
$command = escapeshellcmd('python /root/CS411-VegeCheck/scripts/cheating_detection/display_cheaters.py');
$output = shell_exec($command);
echo $output;
?>
</html>
