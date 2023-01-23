<?php
class Sekil{
    public $x, $y, $z;

    public function __construct($x, $y = null, $z = null){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class Kare extends Sekil{
    public function cevre(){
        return $this->x * 4;
    }
    public function alan(){
        return pow($this->x, 2);
    }
}

class Dikdortgen extends Sekil{
    public function alan(){
        return $this->x * $this->y;
    }
    public function cevre(){
        return ($this->x + $this->y) * 2;
    }
}
class Ucgen extends Sekil{
    public function alan(){
        return ($this->x * $this->y) / 2;
    }
    public function cevre(){
        return $this->x + $this->y + $this->z;
    }
}

$kare = new Kare(5);
$dikdortgen = new Dikdortgen(5, 10, 10);
$ucgen = new Ucgen(5, 10, 15);

echo "Kare Alanı: " . $kare->alan() . " - Kare Çevresi: " . $kare->cevre() . "<br>";
echo "Dikdörtgen Alanı: " . $dikdortgen->alan() . " - Dikdörtgen Çevresi: " . $dikdortgen->cevre() . "<br>";
echo "Üçgen Alanı: " . $ucgen->alan() . " - Üçgen Çevresi: " . $ucgen->cevre() . "<br>";