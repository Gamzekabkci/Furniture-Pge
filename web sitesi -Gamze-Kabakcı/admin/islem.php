<?php
require_once "fonksiyon.php";
$baglanti = baglan();

$isim=$_POST["isim"];
$stok_kodu=$_POST["stok_kodu"];
$takım_içeriği=$_POST["takım_içeriği"];
$fiyat1=$_POST["fiyat1"];
$fiyat2=$_POST["fiyat2"];
$resim=$_POST["resim"];
$sorgu= "INSERT INTO `mobilya`( `isim`, `stok_kodu`, `takım_içeriği`,`fiyat1`,`fiyat2`,`resim`) 
VALUES ('$isim','$stok_kodu','$takım_içeriği','$fiyat1','$fiyat2','$resim')";
//echo $sorgu;
$sonuc =mysqli_query($baglanti,$sorgu);
if($sonuc){
    //echo "Kayıt başarıyla eklendi";
    header("location:listele.php");

}else{
    echo "Problem var";
}
?>