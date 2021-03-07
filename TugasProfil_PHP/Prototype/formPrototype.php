<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$manufakturErr = $kecepatanErr = $waktuErr = ""; //define variable
$manufaktur = $kecepatan = $waktu = "0";


class mobil {

  public $manufaktur;
  public $kecepatan;
  public $waktu;

  function set_manufaktur($manufaktur) { //kumpulan method
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

if ($_SERVER["REQUEST_METHOD"] == "POST") { //disini buat nerima input
  if (empty($_POST["manufaktur"])) {
    $manufakturErr = "isikan manufaktur";
  } else {
    $manufaktur = test_input($_POST["manufaktur"]);
  }
  
  if (empty($_POST["kecepatan"])) {
    $kecepatanErr = "Masukkan angka";
  } else {
    $kecepatan = test_input($_POST["kecepatan"]);
  }

  if (empty($_POST["waktu"])) {
    $waktuErr = "Masukkan waktu tempuh";
  } else {
    $waktu = test_input($_POST["waktu"]);
  }

}

function test_input($data) { //kurang begitu paham (masih memahami tapi ini mcm library buat php nya bisa terima input)
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//disini akhir dari tag php pertama dan diikuti html untuk text output dan dilanjut php lagi dibawahnya
?>

<h2>=======PROGRAM PERHITUNGAN JARAK TEMPUH MOBIL======</h2> 
<p><span class="error">* Isikan Manufaktur Mobil</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Manufaktur: <input type="text" name="manufaktur" value="<?php echo $manufaktur;?>">
  <span class="error">* <?php echo $manufakturErr;?></span>
  <br><br>
  Kecepatan: <input type="text" name="kecepatan" value="<?php echo $kecepatan;?>">
  <br><br>
  Waktu: <input type="text" name="waktu" value="<?php echo $waktu;?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>=======================================================</h2>";

echo "<h2>Hasil Perhitungan:</h2>";//pemanggilan dan operasi dari projek c++ diubah ke PHP

$toyota = new mobil();
$honda = new mobil();

$toyota->set_manufaktur($manufaktur);
$toyota->set_kecepatan($kecepatan);
$toyota->set_waktu($waktu);

$honda->set_manufaktur('Honda Type(NSX)');
$honda->set_kecepatan(272);
$honda->set_waktu(2);

echo "=====================================" . "<br>";
echo "Mobil manufaktur " . $toyota->get_manufaktur() . "<br>";
echo "Memiliki kecepatan " . $toyota->get_kecepatan() . "km/h atau ";
echo $toyota->get_percepatan() . " m/s" .  "<br>";
echo "Waktu tempuh " . $toyota->get_waktu() . " detik" ."atau " . $toyota->waktu . " jam<br>";
echo "Menempuh jarak " . $toyota->kecepatan*$toyota->waktu . " km" . "atau " . $toyota->kecepatan*$toyota->waktu*1000 . " meter". "<br>" ;

echo "<br>" . "========  Sebagai Info   ============" . "<br>";
        
echo "Mobil manufaktur " . $honda->get_manufaktur() . "<br>";
echo "Memiliki kecepatan " . $honda->get_kecepatan() . "km/h atau ";
echo $honda->get_percepatan() . " m/s" .  "<br>";
echo "Waktu tempuh " . $honda->get_waktu() . " detik" ."atau " . $honda->waktu . " jam<br>";
echo "Menempuh jarak " . $honda->kecepatan*$honda->waktu . " km" . "atau " . $honda->kecepatan*$honda->waktu*1000 . " meter" . "<br>" ;

?>


</body>
</html>