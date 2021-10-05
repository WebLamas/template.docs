<?php 

include(__DIR__.'/vendor/autoload.php');

$Parsedown = new Parsedown();

echo $Parsedown->text(file_get_contents(__DIR__.'/readme.md'));