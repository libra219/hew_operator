<?php
  session_start();
  $list=$_SESSION['p'];
  $sum=intval($_SESSION['sum']);
  $_SESSION=array();
  if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-42000);
  }
  session_destroy();
  $liq=intval($_POST['Liq']);
  if($sum>$liq){
    session_start();
    $_SESSION['pro']=$list;

    header('location:?page=pcart');
    exit;
  }
  $cha=$liq-$sum;

  $link = mysqli_connect('localhost','root','','hew');
  if(!$link){
    exit;
  }

    mysqli_set_charset($link,'utf8');

    $sql="SELECT * FROM item";
    $result=mysqli_query($link,$sql);
    if(!$result){
      exit;
    }

    while($data=mysqli_fetch_assoc($result)){
      $data_list[]=$data;
    }
    $i=0;
    foreach($list as $l){
      $a=intval($data_list[$i]['reserve'])-intval($l['cnt']);
      $b=intval($data_list[$i]['stock'])-intval($l['cnt']);
      $sql="UPDATE item SET reserve = ".$a." WHERE item.id = ".++$i.";";
      $result=mysqli_query($link,$sql);
      if(!$result){
        exit;
      }
      $sql="UPDATE item SET stock = ".$b." WHERE item.id = ".$i.";";
      $result=mysqli_query($link,$sql);
      if(!$result){
        exit;
      }
   }

    mysqli_close($link);
  require_once 'view/cart2.php';
?>
