<?
  /* 1. Buscamos el codigo del usuario, segun su nombre (temporalmente) ----------------*/
  if(!empty($_GET['us']))
  {
    $serialsql = "Select * From dbo.consola_user_dealers where users='".$_GET['us']."'";
    $params = array();
    $options =array("Scrollable" => SQLSRV_CURSOR_KEYSET);
    $consulta = sqlsrv_query($conn, $serialsql, $params, $options);
    $us = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
 
    $code=$us["codigo"];
  }
  else{$code="";}
  /*------------------------------------------------------------------------------------*/

  /* 2. Definicion de submenu activo*/
   $qrymsj = "";
  if(!empty($_GET['sbmnact']))
  {
    if($_GET['sbmnact'] == 1){
      $subtitle="ENTRADAS";
      //$qrymsj="Select * From dbo.consola_mensajes Where IdReceiver = '".$code."' And IdType_msg_out = 2 Order By DateCreated";
      $qrymsj="Exec sp_msjRecibidos '".$code."'";
    }
    elseif($_GET['sbmnact'] == 2){
      $subtitle="ENVIADOS";
      $qrymsj="Select * From dbo.consola_mensajes Where IdTransmitter = '".$code."' And IdType_msg_in = 1 Order By DateCreated";
    }
    elseif($_GET['sbmnact'] == 3){
      $subtitle="ELIMINADOS";
      $qrymsj="Select * From dbo.consola_mensajes Where IdLocation_msg = '3' And (IdTransmitter = '".$code."' Or IdReceiver = '".$code."') Order By DateCreated";
    }
  }
  else{$subtitle="ENTRADAS";$qrymsj="Exec sp_msjRecibidos '".$code."'";}
  /*------------------------------------------------------------------------------------*/

  /* 3. Cargar variables para cargar mensajes del usuario*/
     //$sql = "Select * From dbo.consola_mensajes";
     $stmt = sqlsrv_query( $conn, $qrymsj );
     if( $stmt === false) {die( print_r( sqlsrv_errors(), true) );}
     $numFields = sqlsrv_num_fields( $stmt );  

  /*------------------------------------------------------------------------------------*/
?>
     <!-- <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="<?=$classli01?>"><a href="panel.php?us=<?//=$_GET['us']?>&mnact=1"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="<?=$classli02?>"><a href="email.php?us=<?//=$_GET['us']?>&mnact=2"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Mensajes</span></a></li>
        <li class="<?=$classli03?>"><a href="tables.php?us=<?//=$_GET['us']?>&mnact=3"><i class="fa fa-th-list"></i> <span>Dispositivos</span></a></li>
      </ul>
      -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group mr10">
                                <!--<button class="btn btn-white tooltips" type="button" data-toggle="tooltip" title="Archive"><i class="glyphicon glyphicon-hdd"></i></button>-->
                                <!--<button class="btn btn-white tooltips" type="button" data-toggle="tooltip" title="Report Spam"><i class="glyphicon glyphicon-exclamation-sign"></i></button>-->
                                <button class="btn btn-white tooltips" type="button" data-toggle="tooltip" title="Delete"><i class="glyphicon glyphicon-trash"></i></button>
                            </div>
                            <!--
                            <div class="btn-group mr10">
                                <div class="btn-group nomargin">
                                    <button data-toggle="dropdown" class="btn btn-white dropdown-toggle tooltips" type="button" title="Move to Folder">
                                      <i class="glyphicon glyphicon-folder-close mr5"></i>
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-folder-open mr5"></i> Conferencias</a></li>
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-folder-open mr5"></i> Noticias</a></li>
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-folder-open mr5"></i> Invitaciones</a></li>
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-folder-open mr5"></i> Promociones</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group nomargin">
                                    <button data-toggle="dropdown" class="btn btn-white dropdown-toggle tooltips" type="button" title="Label">
                                      <i class="glyphicon glyphicon-tag mr5"></i>
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-tag mr5"></i> Web</a></li>
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-tag mr5"></i> Fotos</a></li>
                                      <li><a href="email.html#"><i class="glyphicon glyphicon-tag mr5"></i> Video</a></li>
                                    </ul>
                                </div>
                            </div>
                            -->
                            <div class="btn-group mr10">
                                <button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                <button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-right"></i></button>
                            </div>
                        </div><!-- pull-right -->
                        
                        <h5 class="subtitle mb5"><?=$subtitle?></h5>
                        <p class="text-muted">Showing 1 - 15 of 230 messages</p>

                        <? //$hoy=date("d-m-Y H:i:s");?>
                        <? $fecha=date("d-m-Y");?>
                        <? $dd = substr($fecha,0,2)?>
                        <? $mm = substr($fecha,3,2)?>
                        <? $aaaa = substr($fecha,6,4)?>

                        <div class="table-responsive">
                            <table class="table table-email">
                              <tbody>
                                <? while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) { ?>
                                <? 
                                   $flag_msj= $row[7];
                                   if($flag_msj == 0){$class_flag_msj = "unread mensaje";}
                                   else{$class_flag_msj = "mensaje";}
                                ?>
                                <?
                                   $fechaDB = $row[3];
                                   $sizefDB= strlen($fechaDB);
                                   $ddDB = substr($fechaDB,4,2);
                                   $mmDB = substr($fechaDB,0,3);
                                   $aaaaDB = substr($fechaDB,7,4);

                                   //valor numerico del mes-----------------
                                   if($mmDB == "Jan"){$mmDBnum = "01";}
                                   elseif($mmDB == "Feb"){$mmDBnum = "02";}
                                   elseif($mmDB == "Mar"){$mmDBnum = "03";}
                                   elseif($mmDB == "Apr"){$mmDBnum = "04";}
                                   elseif($mmDB == "May"){$mmDBnum = "05";}                                   
                                   elseif($mmDB == "Jun"){$mmDBnum = "06";}
                                   elseif($mmDB == "Jul"){$mmDBnum = "07";}
                                   elseif($mmDB == "Aug"){$mmDBnum = "08";}
                                   elseif($mmDB == "Sep"){$mmDBnum = "09";}
                                   elseif($mmDB == "Oct"){$mmDBnum = "10";}
                                   elseif($mmDB == "Nov"){$mmDBnum = "11";}
                                   elseif($mmDB == "Dec"){$mmDBnum = "12";} 
                                   //----------------------------------------

                                   if($aaaaDB == $aaaa)
                                   {if($mmDBnum == $mm)
                                    {if($ddDB == $dd)
                                      {
                                         $timestamp = "Hoy ".strtolower(substr($row[3],12,7));
                                      }
                                     else{$timestamp = $ddDB." de ".$mmDB;}
                                    }
                                    else {$timestamp = $ddDB." de ".$mmDB;}
                                   }
                                   else {$timestamp = $ddDB."/".$mmDBnum."/".$aaaaDB;}
                                ?>
                                <tr class="<?=$class_flag_msj;?>">
                                  <td>
                                    <div class="ckbox ckbox-success">
                                        <input type="checkbox" id="<?='checkbox'.$row[0]?>">
                                        <label for="<?='checkbox'.$row[0]?>"></label>
                                    </div>
                                  </td>
                                  <td>
                                    <a href="#" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                  </td>
                                  <td>
                                    <div class="media">
                                        <a href="#" class="pull-left">
                                          <img alt="" src="images/photos/user3.png" class="media-object">
                                        </a>
                                        
                                        <div class="media-body">
                                            <span class="media-meta pull-right"><?=$timestamp?></span>
                                            <h4 class="text-primary" id="destmsg"><?=strtoupper($row[1])?></h4>
                                            <small class="text-muted"></small>
                                            <p class="email-summary"><strong><?=$row[4]?></strong>&nbsp&nbsp<?=$row[5]?></p>
                                            <span value="<?=$row['8']?>" id="idmsg"><?=$row['8']?></span>
                                        </div>
                                        
                                    </div>
                                  </td>
                                <?}?>
                                <? sqlsrv_free_stmt( $stmt);?>
                                </tr>

                                <!--
                                <tr class="unread">
                                  <td>
                                    <div class="ckbox ckbox-success">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"></label>
                                    </div>
                                  </td>
                                  <td>
                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                  </td>
                                  <td>
                                    <div class="media">
                                        <a href="email.html#" class="pull-left">
                                          <img alt="" src="images/photos/user2.png" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <span class="media-meta pull-right">Yesterday at 1:30am</span>
                                            <h4 class="text-primary">Nusja Nawancali</h4>
                                            <small class="text-muted"></small>
                                            <p class="email-summary"><strong>Meeting Reminder</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td>
                                    <div class="ckbox ckbox-success">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"></label>
                                    </div>
                                  </td>
                                  <td>
                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                  </td>
                                  <td>
                                    <div class="media">
                                        <a href="email.html#" class="pull-left">
                                          <img alt="" src="images/photos/user1.png" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                            <h4 class="text-primary">Weno Carasbong</h4>
                                            <small class="text-muted"></small>
                                            <p class="email-summary"><strong>User Interface Conference</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                              -->
                              </tbody>
                            </table>
                        </div><!-- table-responsive -->
                        
                    </div><!-- panel-body -->
                </div>