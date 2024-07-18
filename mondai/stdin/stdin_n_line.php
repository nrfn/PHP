<!-- N行のデータの入力 -->
<?php
    $input_line = fgets(STDIN);
    for($i = 0; $i < $input_line; $i++){
        $input_echo = fgets(STDIN);
        echo $input_echo;
    }
?>