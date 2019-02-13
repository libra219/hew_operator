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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <script type="text/javascript" src="../reader.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="../reader.css">

</head>
<body>
    <!-- main -->
    <div class="section">
        <div class="container">
            <div class="jumbotron mt-4">
                <h1 class="disply-4">POS</h1>
                <hr clas="my-4">
                <div class="row my-5">
                    <div class="col">
                        <form name="myform" onsubmit="return checkText()" method="post">
                        <input type=text size=50 placeholder="Tracking Code" class="qrcode-text">
                            <label class=qrcode-text-btn for="file_upload">
                                <p>QRコード読み込み</p>
                                <input id="file_upload" type=file accept="image/*" capture=environment onclick="return showQRIntro();" onchange="openQRCamera(this);" tabindex=-1>
                            </label>
                            <input class="hidden" type=text name="cn">
                        <input type="submit" value="QR読み取り" class="btn btn-primary btn-lg w-100" role="button">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3><a class="btn btn-primary btn-lg" href="#" role="button">商品入力</a></h3>
                        <h3><a class="btn btn-primary btn-lg" href="?page=cart" role="button">カート</a></h3>
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
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>