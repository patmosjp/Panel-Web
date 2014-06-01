<?
$serverName = "dev.nemesistracker.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"GPSDB", "UID"=>"sa", "PWD"=>"gps@2013");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>