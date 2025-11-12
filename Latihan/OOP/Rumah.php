<?php

class Rumah {

    public $warna;
    public $jumlahKamar;
    public $jumlahJendela;
    public $jumlahMotor;

    public function __construct($warna, $jumlahKamar, $jumlahJendela, $jumlahMotor) {
        $this->warna = $warna;
        $this->jumlahKamar = $jumlahKamar;
        $this->jumlahJendela = $jumlahJendela;
        $this->jumlahMotor = $jumlahMotor;
    }

    public function kunciPintu() {
        return "Pintu sudah dikunci!";
    }

    public function kunciMotor() {
        return "Motor sudah dikunci!";
    }
}

$rumahSaya = new Rumah("Biru", 3, 5, 2);
$rumahTetangga = new Rumah("Merah", 4, 6, 1);

echo "Warna rumah saya : " . $rumahSaya->warna;
echo "<br>";
echo "Jumlah kamar di rumah saya : " . $rumahSaya->jumlahKamar;
echo "<br>";
echo "Jumlah jendela di rumah saya : " . $rumahSaya->jumlahJendela;
echo "<br>";
echo "Jumlah motor di rumah saya : " . $rumahSaya->jumlahMotor;
echo "<br>";
echo $rumahSaya->kunciPintu();
echo "<br>";
echo $rumahSaya->kunciMotor();


?>
