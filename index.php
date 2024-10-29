<?php
$list = [
    [
        "title" => "74.設計一程式計算一文字檔內的字元個數",
        "link"  => [
            [
                "title" => "版本一",
                "link"  => "74-1.php",
            ],
            [
                "title" => "版本二",
                "link"  => "74-2.php",
            ],
            [
                "title" => "版本三",
                "link"  => "74-3.php",
            ],
            [
                "title" => "版本四",
                "link"  => "74-4.php",
            ]
        ]
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Maple Example</title>
</head>
<body>
<ul>
    <?php
    foreach ($list as $item)
    {
        echo "<li>";
        if (!is_array($item['link']))
        {
            echo "<a href='".$item['link']."'>".$item['title']."</a>";
        }
        else
        {
            echo $item['title'];
        }
        echo "</li>";
        if (is_array($item['link']))
        {
            echo "<ul>";
            foreach ($item['link'] as $item2)
            {
                echo "<li>
                    <a href='".$item2['link']."'>".$item2['title']."</a>
                  </li>";
            }
            echo "</ul>";
        }
    }
    ?>
</ul>
</body>
</html>
