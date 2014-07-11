<?
  if(!empty($_GET['sbmnact']))
  {
  	if($_GET['sbmnact'] == 1){$classlisbmn01="active";$classlisbmn02="";$classlisbmn03="";}
    elseif($_GET['sbmnact'] == 2){$classlisbmn01="";$classlisbmn02="active";$classlisbmn03="";}
    elseif($_GET['sbmnact'] == 3){$classlisbmn01="";$classlisbmn02="";$classlisbmn03="active";}
  }
  else{$classlisbmn01="active";$classlisbmn02="";$classlisbmn03="";}
?>

      <ul class="nav nav-pills nav-stacked nav-email">
          <li class="<?=$classlisbmn01?>"><a href="email.php?us=<?=$_GET['us']?>&mnact=2&sbmnact=1"><span class="badge pull-right">2</span><i class="glyphicon glyphicon-inbox"></i>Entradas</a></li>
      <!--<li><a href="email.php#"><i class="glyphicon glyphicon-star"></i>Destacados</a></li>-->
          <li class="<?=$classlisbmn02?>"><a href="email.php?us=<?=$_GET['us']?>&mnact=2&sbmnact=2"><i class="glyphicon glyphicon-send"></i>Enviados</a></li>
      <!--<li><a href="email.php#" style="font-size:12px;"><span class="badge pull-right">3</span><i class="glyphicon glyphicon-pencil"></i>Borradores</a></li>-->
          <li class="<?=$classlisbmn03?>"><a href="email.php?us=<?=$_GET['us']?>&mnact=2&sbmnact=3"><i class="glyphicon glyphicon-trash"></i>Eliminados</a></li>
      </ul>      