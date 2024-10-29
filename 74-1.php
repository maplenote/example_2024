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

Common::echoHeader("74-1 設計一程式計算一文字檔內的字元個數");
?>
<h3>版本一: 給予一個 textarea，貼上後送出用 PHP 計算有幾個字</h3>
<form action="" method="post">
  <textarea name="inputText" cols="100" rows="5"><?php
      if (isset($_POST['inputText']))
      {
          echo htmlspecialchars($_POST['inputText']);
      }
      ?></textarea>
  <div class="red">
      <?php
      if (isset($_POST['inputText']))
      {
          echo "共 ".calTextLength($_POST['inputText'])." 個字 (含空白符)<br />";
          echo "共 ".calTextLength($_POST['inputText'], true)." 個字 (不含空白符)<br />";
      }
      ?></div>
  <input type="submit" value="計算字數" />

</form>
<?php
Common::echoFooter();
?>