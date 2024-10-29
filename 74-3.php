<?php
require_once('action/Common.php');

use Common\Common;

function calTextLength($text, $noSpaceFlag = false)
{
    if ($noSpaceFlag)
    {
        $spaceList = ["\r", "\n", "\t"];
        $text = str_replace($spaceList, "", trim($text));
    }
    return mb_strlen($text, 'UTF-8');
}

$maxLen = (isset($_GET['maxLen']) && intval($_GET['maxLen']) > 0) ? intval($_GET['maxLen']) : 100;
Common::echoHeader("74-3 設計一程式計算一文字檔內的字元個數");
$errFlag = false;
$type = 0;
$calLen = 0;
if (isset($_POST['checkType1']))
{
    $type = 1;
    $calLen = calTextLength($_POST['inputText']);
    if ($calLen > $maxLen)
    {
        $errFlag = true;
    }
}
elseif (isset($_POST['checkType2']))
{
    $type = 2;
    $calLen = calTextLength($_POST['inputText'], true);
    if ($calLen > $maxLen)
    {
        $errFlag = true;
    }
}
?>
  <form method="get">
    <h3>版本三: 限制 textarea 輸入上限為 <input name="maxLen" class="width60px" type="number"
                                                value="<?php echo $maxLen; ?>" step="1" /> 個字，送出後 PHP 驗證超過字數就跳警告
    </h3>
  </form>
  <form action="" method="post" class="width700px clearfix">
  <textarea name="inputText" rows="5" class="width100p"><?php
      if ($errFlag)
      {
          echo htmlspecialchars($_POST['inputText']);
      }
      ?></textarea>
    <div class="floatLeft">
      <div>(限輸入<?php echo $maxLen; ?> 個字，含空白符)</div>
      <div class="red"><?php echo(($errFlag && $type === 1)
              ? "已超過".($calLen - $maxLen)."個字數"
              : ""); ?></div>
      <input type="submit" name="checkType1" value="送出並驗證" />
    </div>
    <div class="floatRight textRight">
      <div>(限輸入<?php echo $maxLen; ?> 個字，不含空白符)</div>
      <div class="red"><?php echo(($errFlag && $type === 2)
              ? "已超過".($calLen - $maxLen)."個字數"
              : ""); ?></div>
      <input type="submit" name="checkType2" value="送出並驗證" />
    </div>
  </form>
<?php
if (!$errFlag && $type > 0)
{
    echo "<h4>您所輸入的內容 (".(($type === 2) ? "不" : "")."含空白符)，共 ".$calLen." 個字</h4>";
    echo nl2br(htmlspecialchars($_POST['inputText']));
}
Common::echoFooter();
?>