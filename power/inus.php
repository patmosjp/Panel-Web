<?php
session_start();
include ("../inc/connect.php");
$user=$_POST['user'];
$ps=$_POST['pass'];
if($us=="" || $ps==""){header ("Location: ../index.php?err=1");}

$serialsql = "SELECT * FROM dbo.consola_user_dealers where users='".$user."'";
$params = array();
$options =array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $serialsql, $params, $options);
$us = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);


$id=$us["id"];
$ids=md5($id);
$_SESSION["appms"]=$ids;
$pass=md5($ps);
$pass=strtoupper($pass);

//#ed. seccion de configuracion de variable de menu activo.------------
$menuactivo = 1;
//---------------------------------------------------------------------

if($us["pass"]==$pass){
header ("Location: ../panel.php?us=".$us["users"]."&mnact=".$menuactivo);
}else{
header ("Location: ../index.php?err=2");
}
?> 