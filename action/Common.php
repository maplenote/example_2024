<?php
namespace Common;
class Common
{

    static function echoHeader($title)
    {
        echo '<!doctype html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport"
                    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
              <title>'.$title.' - Maple Example</title>
              <script
                      src="https://code.jquery.com/jquery-1.12.4.js"
                      integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
                      crossorigin="anonymous"></script>
              <link rel="stylesheet" href="style/main.css?'.filemtime("style/main.css").'" />
            </head>
            <body>
            <a href="index.php">[回目錄] </a>';
    }
    static function echoFooter($js=null)
    {
        if($js!==null)
        {
            echo '<script src="'.$js.'?'.filemtime($js).'" type="application/javascript"></script>';
        }
        echo '</body></html>';
    }
}
?>