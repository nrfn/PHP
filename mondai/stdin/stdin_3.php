<!-- 3つのデータの入力 -->
<?php
    $input_line = fgets(STDIN);
    $array = explode(" ", $input_line);
    foreach ($array as $input) {
        echo $input . PHP_EOL;
    }
?>