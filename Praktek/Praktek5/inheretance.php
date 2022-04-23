<!-- <?php

//Buat class induk
class Buah{
    public $nama;
    public $warna;

    //fungsi construct
    public function __construct($name, $color)
    {
        $this->nama = $name;
        $this->warna = $color;
    }

    public function intro(){
        "Buah ini namanya : {$this->nama} , warna nya ; {$this->warna}";
    }
}

class Mangga extends Buah{
    public function biji(){
        echo "Ini Buah dengan 1 Biji";
    }
}

$mangga_indramayu = new Mangga("Mangga Indramayu", "Hijau");
$mangga_indramayu->intro();
$mangga_indramayu->biji();


?> -->


<?php

$x = 1;

do {
  echo $x." ";
  $x++;
} while ($x > 2);


?>