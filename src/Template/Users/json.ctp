<?php
//header( "Content-Type: application/json; charset=utf-8" ) ;
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
//echo $json_string;
var_dump(file_get_contents("php://input"));
//$fruits = json_decode($json_string, true);
//var_dump($json_string);

?>
