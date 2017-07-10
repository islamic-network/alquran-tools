<?php
require_once('vendor/autoload.php');

$json = json_decode(file_get_contents('../data/ayah.json'));
$text = $json->data->text;

$parser = new AlQuranCloud\Tools\Parser\Buck();


$arabic = $parser->toArabic($text);


//header('Content-Type: application/html;charset=utf-8');
echo $arabic;
