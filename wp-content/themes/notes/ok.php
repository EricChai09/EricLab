<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2017/11/29
 * Time: 20:24
 */
header("Content-type: text/html; charset=utf-8");
//$name=$_POST["name"];
$age=array(array("Bill"=>"60"),array("Bill"=>"70"),array("Bill"=>"80"));
$name="123";
//echo $name;
echo json_encode($age);
?>