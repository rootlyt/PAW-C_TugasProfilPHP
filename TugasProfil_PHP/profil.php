<html>
    <head>
        <title>Profil Muhammad Naufal Aziz Huryansyah</title>
    </head>

    <script src="confirm.js"type="text/javascript"></script>

    <style>
        header {
            background-color: rgb(96, 143, 187);
            padding: 2px;
            text-align: center;
            font-size: 25px;
            color: white;
            max-width: 1400px
        }
        body{
            font-size: 25px;
            color: rgb(39, 39, 39);
            max-width: 1400px
        }

        article {
            padding: 20px;
            background-color: rgb(96, 143, 187);
            font-size: 25px;
            color: white;
            max-width: 1400px
        }

    </style>


            <img src="https://media-exp1.licdn.com/dms/image/C5603AQEAJwqTt_rLYw/profile-displayphoto-shrink_800_800/0/1598922051166?e=1619654400&v=beta&t=ryKju7Y7IoPR1USVGuFyW2EHwAkIckHD5I536k4Xpvs" 
            width="250x250" style="position: absolute;
            left: 8px;
            top: 237px;">
            <picture>
                <img src="https://media-exp1.licdn.com/dms/image/C5616AQHNMvFf_AhaSQ/profile-displaybackgroundimage-shrink_350_1400/0/1605605757236?e=1619654400&v=beta&t=cUAogieT6uNfiWaFvBJewmI_KlZRZ9-pz7ga53N9k4c" style="width:auto;">
            </picture>


    <header>
        <h1>Muhammad Naufal Aziz Huryansyah</h1>
    </header>
    
    <body>
        <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQF39HHlC_CDBg/company-logo_100_100/0/1519910280375?e=1622678400&v=beta&t=ivAUoQn6KfzQ_DWAK7NPdtQSEQy1ekSjig38ppTwJE8"
        width="40x40" style="position: absolute;
            left: 530px;
            top: 510px;">
        <p style="text-align: center;">University of Brawijaya</p>
        <p style="text-align: center;">Student ID Number: 175150307111020</p>
    </body>

    <article>
        <h1>Academic and Achievement</h1>
        <p><pre>    Computer Engineering student at University of Brawijaya. Interested in IoT, 
Computer Networking and Visual Art's. On 2019, winning the 2nd position in 
Smart Device National competition, Hology 2.0. On 2020, Finished Database and 
Application Development Training on Hoping Corporation, Japan  </pre></p>

        <nav>
            <ul>
                <button onclick="sample()" value="CallJavaScriptfunction from confirm.js">
                    <a href="https://www.linkedin.com/in/aziznaufal1999/">Linkedin Profile</a></button>

            </ul>
        </nav>
        <h2>Interest</h2>
        <p>Right to Repair Act, Digital Art, Pop-Culture, Photography, Audio-Enthusiast </p>
        <nav>
            <ul>
                <button onclick="sample()" value="CallJavaScriptfunction from confirm.js">
                    <a href="https://www.instagram.com/fullbridgerectifier/">Instagram Profile</a></button>

            </ul>
        </nav>
        
    </article>
    
    <?php
    $manufakturErr = $kecepatanErr = $waktuErr = "";
    $manufaktur = $kecepatan = $waktu = "0";
    
    
    class mobil {
      public $manufaktur;
      public $kecepatan;
      public $waktu;
    
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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    
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
    
    echo "<h2>Hasil Perhitungan:</h2>";
    
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

</html>


