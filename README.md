# PHP
PHP学習用のリポジトリです。

## PHPの使い方
- [公式ドキュメント](https://www.php.net/)
- 拡張子は`.php`
- phpを書くときは`<?php ?>`タグで囲む
- 変数宣言時は接頭辞に`$`をつける。
- 文字列の結合には`.`を使う。

## メソッド
- `echo`\
出力する。

- `exolode`
文字列を分割する。
```
$array = explode("区切る文字", "文字列");
```

- `for`
繰り返し処理。
条件を満たす限り繰り返し。
```
for(変数宣言; 条件式; インクリメント/デクリメント){
    $input_echo = fgets(STDIN);
    echo $input_echo;
}
```

- `foreach`
配列の要素数だけ繰り返す。
```
foreach ($配列 as $要素) {
  処理
}
```

- `PHP_EOL`\
改行する。