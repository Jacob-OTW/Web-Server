<?php 
$command = escapeshellcmd('/Program Files/XAMPP/htdocs/Web-Server/turn_on.py');
$output = shell_exec($command);
echo $output;
?>