<?php
    $input_number = fgets(STDIN);
    $input_words = fgets(STDIN);
    $array = explode(",", $input_words);
    foreach ($array as $word) {
        echo $word . PHP_EOL;
    }
?>