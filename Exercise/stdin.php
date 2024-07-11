<!-- 標準入力サンプル問題セット -->
<!-- 1つのデータの入力 -->
<!-- 1行のデータの入力 -->
<?php
    $input_line = fgets(STDIN);
    echo $input_line;
?>

<!-- 3行のデータの入力 -->
<?php
    $input_line1 = fgets(STDIN);
    $input_line2 = fgets(STDIN);
    $input_line3 = fgets(STDIN);
    echo $input_line1;
    echo $input_line2;
    echo $input_line3;
?>

<!-- N行のデータの入力 -->
<?php
    $input_line = fgets(STDIN);
    for($i = 0; $i < $input_line; $i++){
        $input_echo = fgets(STDIN);
        echo $input_echo;
    }
?>

<!-- 3つのデータの入力 -->
<?php
    $input_line = fgets(STDIN);
    $array = explode(" ", $input_line);
    foreach ($array as $input) {
        echo $input . PHP_EOL;
    }
?>