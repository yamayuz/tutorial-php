<?php

// 連想配列：phpの場合は、型としては配列と同じ
// キーが整数のインデックスか、文字列になるかの違い
$fruits = array('apple'=>'りんご', 'peach'=>'もも', 'pear'=>'なし');
print_r($fruits);

// []を用いて要素をappendできる
$fruits[] = 'バナナ';
print_r($fruits);

$fruits['mikan'] = 'みかん';
print_r($fruits);