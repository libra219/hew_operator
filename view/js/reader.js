function openQRCamera(node) {
  var reader = new FileReader();
  reader.onload = function () {
    node.value = "";
    qrcode.callback = function (res) {
      if (res instanceof Error) {
        alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
      } else {
        node.parentNode.previousElementSibling.value = res;
      }
    };
    qrcode.decode(reader.result);
  };
  reader.readAsDataURL(node.files[0]);
  //PHPに送るデータをJSON形式で記述
  qr = node.parentNode.previousElementSibling.value;
  //ajaxで読み出し
  $.ajax({
    type: 'GET',
    url: './cart.php',
    data: { "item": qr },
    // success: function(html){
    //   成功したらページ遷移
    //   window.location.href = './send.php';
    // }
  });
}
function checkText() {
  var x = document.myform.elements['cn'];
  x.value = qr;
  document.myform.action = "./?page=pcart";
}
function showQRIntro() {
  return confirm("Use your camera to take a picture of a QR code.");
}
