<?php
// GET['page']取得
$GET = h((!empty($_GET["page"])) ? $_GET["page"]: '');

// TODO:関数多けりゃまとめることね
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

// 処理記述



// 表示するpage処理
switch ($GET) {
    case 'cart':
        include_once './view/cart.php';
        break;

    default:
        include_once './view/top.php';
        break;
}
