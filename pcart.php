<?php
$post_list="huto/3,gomi/2,jijii/5,mikku/11,";
$item_list =explode(",",$post_list);
foreach ($item_list as $a) {
  var_dump($a);
  if(strcmp($a, "") == 0){
    break;
  }
  $list[]=explode("/",$a);
}
var_dump($list);





require_once 'view/cart.php';
?>
