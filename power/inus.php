<?php
session_start();
include ("../inc/connect.php");
$user=$_POST['user'];
$ps=$_POST['pass'];
if($us=="" || $ps==""){header ("Location: ../index.php?err=1");}

$serialsql = "SELECT * FROM dbo.consola_user_dealers where user='".$user."'";
$params = array();
$options =array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $serialsql, $params, $options);
$us = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);



$id=$us["id"];
$ids=md5($id);
$_SESSION["appms"]=$ids;
$pass=md5($ps);

if($us["pass"]==$pass){
header ("Location: ../panel.php?us=".$us["user"]);
}else{
header ("Location: ../index.php?err=2");
}
?> 