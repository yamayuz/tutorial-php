<?php
// クラスの継承について

// 車クラス（親クラス）
// 「$this」は自インスタンス、「self::」は自クラス
class BaseCar
{
    const MANUFACTURER = "○○自動車";
    protected $price;

    function __construct($price) {
        $this->price = $price;
    }

    public function displayCar() {
        echo '製造元は' . self::MANUFACTURER . "\n";
        echo '販売価格は' . $this->price . "円\n";
    }
}

// 新車クラス
class NewCar extends BaseCar
{
    public function displayNewCar() {
        echo "新車です\n";
        $this->displayCar();
    }
}

// 中古車クラス
class OldCar extends BaseCar
{
    public function displayOldCar() {
        echo "中古車です\n";
        $this->displayCar();
    }
}


$newcar = new NewCar(5000);
$newcar->displayNewCar();

echo "-------------------\n";

$oldcar = new OldCar(300);
$oldcar->displayOldCar();
