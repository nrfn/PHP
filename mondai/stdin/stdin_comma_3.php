<!-- カンマ区切りの3つのデータの入力 -->
<?php
    $input_line = fgets(STDIN);
    $array = explode(",", $input_line);
    foreach ($array as $word) {
        echo $word . PHP_EOL;
    }
?>