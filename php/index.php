<?php

echo "OK";

class Mobil {
    public $merek;
    public $warna;
    public $harga;

    public function mobil($merek, $warna, $harga) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "Merek {$this->merek}, Warna {$this->warna}, Harga {$this->harga}";
    }
}

$obj = new mobil;
echo $obj->getLabel("Avanza", "Merah", "10000");