<?php
require_once "fonksiyon.php";
$baglanti=baglan();

$isim=$_POST["isim"];
$stok_kodu=$_POST["stok_kodu"];
$takım_içeriği=$_POST["takım_içeriği"];
$fiyat1=$_POST["fiyat1"];
$fiyat2=$_POST["fiyat2"];
$resim=$_POST["resim"];
$id = $_POST["id"];

$sorgu="UPDATE `mobilya` SET 
`isim`='$isim',
`stok_kodu`='$stok_kodu',
`takım_içeriği`='$takım_içeriği',
`fiyat1`='$fiyat1',
`fiyat2`='$fiyat2',
 `resim`='resim' WHERE  id=$id";
$sonuc= mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("listele.php");
    //echo "Kayıt Başarıyla Güncellendi";
}else{
    echo "Problem var";
}
?>