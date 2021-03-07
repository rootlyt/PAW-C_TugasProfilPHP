<?php
//hasil perubahan projek c++ ke PHP
$mnfk;//deklarasi variable
$wkt;
$kcp;

class mobil {
  public $manufaktur; //deklarasi variable dalam class
  public $kecepatan;
  public $waktu;

  // deklarasi method
  function set_manufaktur($manufaktur) {
    $this->manufaktur = $manufaktur;
  }
  function get_manufaktur() {
    return $this->manufaktur;
  }
  function set_kecepatan($kecepatan) {
    $this->kecepatan = $kecepatan;
  }
  function get_kecepatan() {
    return $this->kecepatan;
  }
  function get_percepatan() {
    return $this->kecepatan*10/36;
  }
  function set_waktu($waktu) {
    $this->waktu = $waktu;
  }
  function get_waktu() {
    return $this->waktu*3600;
  }

}

$toyota = new mobil();
$honda = new mobil();

$toyota->set_manufaktur($mnfk);
$toyota->set_kecepatan($kcp);
$toyota->set_waktu($wkt);

$honda->set_manufaktur('Honda');
$honda->set_kecepatan(110);
$honda->set_waktu(2);

echo "===========PROGRAM MOBIL=============" . "<br>";
echo "=====================================" . "<br>";
echo "Mobil manufaktur " . $toyota->get_manufaktur() . "<br>";
echo "Memiliki kecepatan " . $toyota->get_kecepatan() . "km/h atau ";
echo $toyota->get_percepatan() . " m/s" .  "<br>";
echo "Waktu tempuh " . $toyota->get_waktu() . " detik" ."atau " . $toyota->waktu . " jam<br>";
echo "Menempuh jarak " . $toyota->kecepatan*$toyota->waktu . " km" . "atau " . $toyota->kecepatan*$toyota->waktu*1000 . " meter". "<br>" ;

echo "=====================================" . "<br>";
        
echo "Mobil manufaktur " . $honda->get_manufaktur() . "<br>";
echo "Memiliki kecepatan " . $honda->get_kecepatan() . "km/h atau ";
echo $honda->get_percepatan() . " m/s" .  "<br>";
echo "Waktu tempuh " . $honda->get_waktu() . " detik" ."atau " . $honda->waktu . " jam<br>";
echo "Menempuh jarak " . $honda->kecepatan*$honda->waktu . " km" . "atau " . $honda->kecepatan*$honda->waktu*1000 . " meter" . "<br>" ;

?>