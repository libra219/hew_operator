  <?php
  session_start();
  if(!empty($_POST['shine'])){
    $id_l=explode("_",$_POST['shine']);
    $post_list=$id_l[1];
    $item_list =explode(",",$post_list);
    foreach ($item_list as $a) {
      if(strcmp($a, "") == 0){
        break;
      }
      $list[]=explode("/",$a);
    }

    $product_list=array();
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
    foreach ($list as $l) {
      foreach ($data_list as $d){
        if($d["id"]==$l[0]){
          if(intval($d["stock"])-intval($d["reserve"])<$l[1]){
            $l[1]=intval($d["stock"])-intval($d["reserve"]);
          }
          $product_list[$i]=$d;
          $product_list[$i]["cnt"]=$l[1];
        }
     }
    $i++;
    }
    mysqli_close($link);
  }else{
   if(!empty($_POST['submid'])){
    header('location:?page=index');
    exit;
  }
    $product_list=$_SESSION['pro'];
  }



  require_once 'view/cart.php';
  ?>
