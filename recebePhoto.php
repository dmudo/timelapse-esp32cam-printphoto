<?php

$received = file_get_contents('php://input');
$fileToWrite = "uploads/".time().".jpg";
file_put_contents($fileToWrite, $received);

?>