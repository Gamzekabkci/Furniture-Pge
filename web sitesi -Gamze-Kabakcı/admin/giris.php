<?php
$baglanti = mysqli_connect("localhost","root","","mobilya");

$gercek_ad="gamze";
$gercek_sifre="3467";


$kullanici_adi = mysqli_real_escape_string($baglanti,$_POST["kullanici_adi"]);
$şifre = mysqli_real_escape_string($baglanti,$_POST["şifre"]);

$sorgu = "SELECT * FROM oturum WHERE kullanici_adi='$kullanici_adi' AND şifre ='$şifre' ";
//echo $sorgu;
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    $count = mysqli_num_rows($sonuc);
}
if($count>0){
//if(($gercek_ad==$kullanici_adi)&&($gercek_sifre==$şifre)){
    //ob_start();
    session_start();
    $_SESSION["kullanici_adi"]=$kullanici_adi;
    header("location:index.php");
}else{
    echo "Eksik ya da hatalı bilgi";
}

?>