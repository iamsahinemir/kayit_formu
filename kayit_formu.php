<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = trim($_POST["ad"] ?? "");
    $tcKimlik = trim($_POST["tcKimlik"] ?? "");
    $sicil = trim($_POST["sicil"] ?? "");
    $tarih = trim($_POST["tarih"] ?? "");
    $grup = trim($_POST["grup"] ?? "");
    $görev = trim($_POST["görev"] ?? "");
    $no1 = trim($_POST["no1"] ?? "");
    $görev1 = trim($_POST["görev1"] ?? "");
    $görev2 = trim($_POST["görev2"] ?? "");
    $telOption = isset($_POST["tel"]) ? $_POST["tel"] : '';
    $noValue = isset($_POST["no"]) ? $_POST["no"] : '';
    $secenek = isset($_POST["secenek"]) ? $_POST["secenek"] : '';
    $secenek1 = isset($_POST["secenek1"]) ? $_POST["secenek1"] : '';
    $etki = isset($_POST["etki"]) ? $_POST["etki"] : '';
    $secenek4 = isset($_POST["secenek4"]) ? $_POST["secenek4"] : '';
    $secenek5 = isset($_POST["secenek5"]) ? $_POST["secenek5"] : '';
    $secenek7 = isset($_POST["secenek7"]) ? $_POST["secenek7"] : '';
    $secenek6 = isset($_POST["secenek6"]) ? $_POST["secenek6"] : '';
    $secenek8 = isset($_POST["secenek8"]) ? $_POST["secenek8"] : '';
    $secenek9 = isset($_POST["secenek9"]) ? $_POST["secenek9"] : '';
    $secenek10 = isset($_POST["secenek10"]) ? $_POST["secenek10"] : '';
    $secenek11 = isset($_POST["secenek11"]) ? $_POST["secenek11"] : '';
    $secenek12 = isset($_POST["secenek12"]) ? $_POST["secenek12"] : '';
    $secenek13 = isset($_POST["secenek13"]) ? $_POST["secenek13"] : '';
    

    $isEmpty = false;

    // Text inputs
    if (empty($ad) || empty($tcKimlik) || empty($sicil) || empty($tarih)
        || empty($grup) || empty($görev) || empty($no1)  || empty($görev1)  || empty($görev2) ) {
        $isEmpty = true;
    }

    // Radio inputs
    if (empty($secenek) || empty($secenek1) || empty($secenek4)  || empty($secenek5) || empty($secenek6) || empty($secenek7)
    || empty($secenek8) || empty($secenek9) || empty($secenek10) || empty($secenek11)
    || empty($secenek12) || empty($secenek13) || empty($etki) ) {
        $isEmpty = true;
    }

    // Alert if any input is empty
    if ($isEmpty) {
        echo 'Lütfen tüm alanları doldurun.';
    } else {
        // Form verileri işlenir veya veritabanına kaydedilir
        // İşlemlerinizi burada yapabilirsiniz
        echo 'Form başarıyla gönderildi.';
    }

    if ($telOption == "Var" && empty($noValue)) {
        echo "Eğer 'Var' seçeneği işaretliyse, 'no' kısmını doldurmanız gerekmektedir.";
        // Gerekirse hatayı işlemek veya yönlendirme yapmak için uygun işlemleri ekleyebilirsiniz
    }
}
$host="localhost";
$kullanici="root";
$parola="";
$vt="deneme";

$baglanti=mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti, "UTF8");
if($baglanti){
    echo "bağlandın, helal len";
    }


$ad = trim($_POST["ad"] ?? "");
$tcKimlik = trim($_POST["tcKimlik"] ?? "");
$sicil = trim($_POST["sicil"] ?? "");


$ekle="INSERT INTO deneme (Adı_Soyadı, Tc_Kimlik, Sicil_Numarası) VALUES ('$ad', '$tcKimlik', '$sicil')";
//$calistirekle=myqsli_query($baglanti, $ekle);

if ($baglanti->query($ekle) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  exit();

if($calistirekle){
    echo ' <div class="alert alert-success" role="alert">
    Başarıyla eklendi!
  </div>';
    }
else{
    echo ' <div class="alert alert-danger" role="alert">
    Hata!
  </div>';
    }
mysqli_close($baglanti);
?>
 



