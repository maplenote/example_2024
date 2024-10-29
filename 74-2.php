<?php
require_once('action/Common.php');

use Common\Common;

Common::echoHeader("74-2 設計一程式計算一文字檔內的字元個數");
?>
<h3>版本二: 給予一個 textarea，onblur 後用 JQuery 計算 textarea 已輸入幾個字</h3>
<textarea name="inputText" id="inputText" cols="100" rows="5"></textarea>
<div class="red" id="msgBox1"></div>
  <div class="red" id="msgBox2"></div>
<?php
Common::echoFooter('script/74-2.js');
?>