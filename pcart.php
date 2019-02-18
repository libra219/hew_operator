<?php
$post_list="huto/3,gomi/2,jijii/5,mikku/11,";
$product_list=array();
$item_list =explode(",",$post_list);
foreach ($item_list as $a) {
  if(strcmp($a, "") == 0){
    break;
  }
  $list[]=explode("/",$a);
}

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
    if($d["item_name"]==$l[0]){
      $product_list[$i]=$d;
      $product_list[$i]["cnt"]=$l[1];
    }
  }
  $i++;
}
// foreach ($d as $da) {
//   $product_list[][]=$da;
// }
// $product_list[][]=$l[1];
mysqli_close($link);
var_dump($product_list);
require_once 'view/cart.php';
?>
