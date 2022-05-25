<?php
$command = escapeshellcmd('/Program Files/XAMPP/htdocs/Web-Server/turn_off.py');
$output = shell_exec($command);
echo $output;
?>