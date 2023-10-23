<?php
// connection
include_once("connection.php");

// create a temporary file
$backupFile = 'backup.sql';
$command = 'mysqlidump -h {$severname} -u {$username} -p{$password} {$database} > $backupFile';

system($command);
?>