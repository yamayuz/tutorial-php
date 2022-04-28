<?php

// functionで関数を宣言
// 呼び出し箇所より後ろで宣言しても動く
function is_even($num) {
    if ($num % 2 == 0) {
        return True;
    } else {
        return False;
    }
}

// 関数の引数として、初期値の設定もできる
function display_string($string = "Hello World!!") {
    return $string . "\n";
}

$num = 14;
$is_even = is_even($num);
echo "result: " . var_export($is_even, true) . "\n";

echo display_string();
echo display_string('Good night!!');

