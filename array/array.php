<?php

// 配列はarray()、または、[]で宣言する
$family_name = array("田中", "高橋", "斉藤");
$farst_name = ["みなみ", "たけし", "清盛"];


// print_rで配列の中身をプリントできる
print_r($family_name);
print_r($farst_name);
echo "----------\n";


// forで配列の要素を取得
for ($i = 0; $i <= 2; $i++) {
    echo $family_name[$i]." ".$farst_name[$i];
    echo "\n";
}
echo "----------\n";


// foreachを使うと要素を1つづつ取り出せる
foreach ($family_name as $name) {
    echo $name."\n";
}
echo "----------\n";


// 下記で配列のindexも同時に取得できる
foreach ($family_name as $index => $value) {
    echo "index: ".$index."\n";
    echo "value: ".$value."\n";
}
echo "----------\n";