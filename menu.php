<?
 if(!empty($_GET['mnact']))
   { if ($_GET['mnact'] == 1){$classli01="active";$classli02="";$classli03="";}
     elseif($_GET['mnact'] == 2){$classli01="";$classli02="active";$classli03="";}
     elseif($_GET['mnact'] == 3){$classli01="";$classli02="";$classli03="active";}
    }
?>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="<?=$classli01?>"><a href="panel.php?us=<?=$_GET['us']?>&mnact=1"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="<?=$classli02?>"><a href="email.php?us=<?=$_GET['us']?>&mnact=2&sbmnact="><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Mensajes</span></a></li>
        <li class="<?=$classli03?>"><a href="tables.php?us=<?=$_GET['us']?>&mnact=3"><i class="fa fa-th-list"></i> <span>Dispositivos</span></a></li>
      </ul>