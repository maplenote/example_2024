$(function () {
  $("#inputText").on('blur', function () {
    let $msg = $("#msgBox1");
    $msg.text('onBlur事件: 共 ' + checkTextLeng() + ' 個字 (含空白符) / '
      + '共 ' + checkTextLeng(true) + ' 個字 (不含空白符)');
  });
  $("#inputText").on('keyup', function () {
    let $msg = $("#msgBox2");
    $msg.text('onKeyup事件: 共 ' + checkTextLeng() + ' 個字 (含空白符) / '
      + '共 ' + checkTextLeng(true) + ' 個字 (不含空白符)');
  });
});

function checkTextLeng(noSpaceFlag = false) {
  let inputText = $("#inputText").val();
  if (noSpaceFlag) {
    inputText = inputText.trim().replaceAll(/[\r\n\t]/g, "");
  }
  return inputText.length
}