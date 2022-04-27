<?php

// 変数は先頭に「$」をつけて宣言
$num = 1;
$str = "test\n";

// 定数はdefineで宣言
// define("定数名", 定数値);
define("NUM_CONST", 123);
define("STR_CONST", "string const\n");

// 定数はconstでも宣言できる
// 処理速度が速いのでconstを使ったほうが良いらしい
const NUM_CONST2 = 456;
const STR_CONST2 = "string const2\n";

echo $num;
echo $str;

echo NUM_CONST;
echo "\n";
echo STR_CONST;

echo NUM_CONST2;
echo "\n";
echo STR_CONST2;