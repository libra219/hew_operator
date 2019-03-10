<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>index</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://cdn.rawgit.com/maechabin/bootstrap-material-button-color/master/dist/cb-materialbtn.0.5.5.min.css">

    <style>
    table { table-layout: fixed; }
    table th, table td { overflow: hidden; }
    </style>

</head>
<body>
    <!-- main -->
    <div class="section">
        <div class="container">
            <div class="jumbotron mt-4">
                <h2 class="disply-4">清算</h2>
                <hr clas="my-4">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-warning " href="./index.php" role="button">QRコード読み取りに戻る</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-info pt-3">ご購入ありがとうございました。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 40px" scope="col">#</th>
                                <th scope="col">商品名</th>
                                <th style="width: 80px"scope="col">価格</th>
                                <th style="width: 10%" scope="col">個数</th>
                                <th style="width: 35%"scope="col">小計</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $c=1;
                            $sum=0;
                            foreach ($list as $li):
                          ?>
                            <tr>
                                <th scope="row"><?php echo $c++;?></th>
                                <td><?=$li["item_name"] ?></td>
                                <td><?=$li["price"] ?></td>
                                <td><?=$li["cnt"] ?></td>
                                <td>￥<?php
                                      echo intval($li["price"])*intval($li["cnt"]);
                                      $sum+=intval($li["price"])*intval($li["cnt"]);
                                    ?></td>
                            </tr>
                          <?php endforeach; ?>
                            <tr >
                                <td colspan="2"></td>
                                <td colspan="2" class="table-info">税額</td>
                                <td>￥<?php echo intval($sum*0.08); ?></td>
                            </tr>
                            <tr >
                                <td colspan="2"></td>
                                <td colspan="2" class="table-info">合計金額</td>
                                <td>￥<?php echo intval($sum*1.08); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2" class="table-info">お預かり金額</td>
                                 <td>￥<?php echo $liq; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2" class="table-info ">お釣り</td>
                                 <td>￥<?php echo $cha; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
