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
    <style>
    table { table-layout: fixed; }
    table th, table td { overflow: hidden; }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <link rel="shortcut icon" href="">
</head>
<body>
    <!-- main -->
    <div class="section">
        <div class="container">
            <div class="jumbotron mt-4">
                <h2 class="disply-4">商品一覧</h2>
                <hr clas="my-4">
                <div class="row my-5">
                    <div class="col">
                        <h3><a class="btn btn-primary btn-lg w-100" href="#" role="button">QRコード読み込み</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3><a class="btn btn-primary btn-lg" href="./index.php" role="button">TOP</a></h3>
                        <h3><a class="btn btn-primary btn-lg" href="#" role="button">商品入力</a></h3>
                    </div>
                    <div class="col">
                        <h3><a class="btn btn-warning " href="#" role="button">在庫確認</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <caption>カートの中身</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">商品名</th>
                                <th>価格</th>
                                <th>個数</th>
                                <th>小計</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>テーブルのセル</td>
                                <td>123</td>
                                <td>123</td>
                                <td>123</td>
                            </tr>
                            <tr class="table-info">
                                <td colspan="3"></td>
                                <td>税額</td>
                            </tr>
                            <tr >
                                <td colspan="3"></td>
                                <td class="table-info">合計金額</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="table-info">お預かり金額</td>
                                <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">￥</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="table-info">お釣り</td>
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