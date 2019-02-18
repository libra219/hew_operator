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
    case 'pcart':
        include_once './pcart.php';
        break;
    case 'scart':
            include_once './scart.php';
            break;

    default:
        include_once './view/top.php';
        break;
}
