<?

header('Access-Control-Allow-Origin: *'); 

if($_GET['vs']!="4321"){
header ("Location: http://dev.nemesistracker.com/login.aspx");
}

include ("inc/connect.php");

$serial=$_GET['serial'];

$serialsql = "SELECT * FROM devicesystem_main as a where a.serial='".$serial."'";
$params = array();
$options =array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $serialsql, $params, $options);
$c = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);

function s($conn,$tipo,$sel) { 

$serialsql = "SELECT * FROM menusel where cat='".$tipo."'";
$params = array();
$options =array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $serialsql, $params, $options);
while($c = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)){

if($c['item']==$sel){$sld="selected";}else{$sld="";} 
echo'<option value="'.$c['item'].'" '.$sld.' >'.$c['item'].'</option>';
}


}

?>