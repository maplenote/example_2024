<?php
require_once('action/Common.php');

use Common\Common;

Common::echoHeader("74-4 設計一程式計算一文字檔內的字元個數");
$maxLen = (isset($_GET['maxLen']) && intval($_GET['maxLen']) > 0) ? intval($_GET['maxLen']) : 100;
?>
  <form method="get">
    <h3>版本四: 限制 textarea 輸入上限為 <input name="maxLen" class="width60px" type="number"
                                                value="<?php echo $maxLen; ?>"
                                                step="1" /> 個字，輸入當下就用 JS 計算 textarea 已輸入幾個字，並且超過字數就不給輸入任何文字
    </h3>
  </form>
  <textarea name="inputText" id="inputText" cols="100" rows="5"></textarea>
  <div>(限輸入<?php echo $maxLen; ?> 個字，含空白符)</div>
  <div class="red" id="msgBox"></div>
<?php
echo "<script>const maxLen=".intval($maxLen).";</script>";
Common::echoFooter('script/74-4.js');
?>