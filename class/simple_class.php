<?php

class SimpleClass
{
    // プロパティの宣言
    public $var = "a default value\n";

    // メソッドの宣言
    public function displayVar() {
        echo $this->var;
    }
}

// インスタンスを生成
$instance = new SimpleClass();

// メンバへのアクセスは「アロー演算子」を使う
$instance->displayVar();
$temp = $instance->var;
echo $temp;