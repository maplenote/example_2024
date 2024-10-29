var timer = 0;
$(function () {
  $("#inputText").on('keyup', function (e) {
    let $msg = $("#msgBox");
    let calLen = checkTextLeng();
    $msg.text('您已輸入 ' + calLen + ' 個字 (含空白符)，可再輸入' + (maxLen - calLen) + ' 個字');
    if (maxLen <= calLen) {
      if(timer)
      {
        clearInterval(timer);
      }
      timer = setInterval(cutText,500);
    }
  });
});

function cutText() {
  let $inputText = $("#inputText");
  let inputText = $inputText.val();
  $inputText.val(inputText.slice(0, maxLen));
  let $msg = $("#msgBox");
  let calLen = checkTextLeng();
  $msg.text('您已輸入 ' + calLen + ' 個字 (含空白符)，可再輸入' + (maxLen - calLen) + ' 個字');
}

function checkTextLeng(noSpaceFlag = false) {
  let inputText = $("#inputText").val();
  if (noSpaceFlag) {
    inputText = inputText.trim().replaceAll(/[\r\n\t]/g, "");
  }
  return inputText.length
}