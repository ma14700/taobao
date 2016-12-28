<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

$items = file_get_contents('php://input');

print_r( json_decode($items , true) );

?>