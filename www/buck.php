<?php
require_once('buckParser.php');
require_once('tajweedParser.php');

$json = json_decode(file_get_contents('ayah.json'));
$text = $json->data->text;

$parser = new Buck();
$tajweed = new Tajweed();

$arabic = $parser->toArabic($text);
$tajweedText = $tajweed->parse($text);

$json = json_encode(['original' => $text, 'parsed' => $tajweedText]);
$html = json_decode($json);

//header('Content-Type: application/json;charset=utf-8');
//echo $json;


//header('Content-Type: application/html;charset=utf-8');
//echo $parser->toArabic($tajweed->parse($text));
echo $tajweed->parse($text);
echo '<br>';
echo $text;
