<?php
require_once "benimtema.php";
$title = "Tema Parçalama";
head_ustkisim($title);
navbar_ustkısım();
gruplar();
reklam_1();
kaydırma();
/*$resim_dizi=array("resimler/YENİ_1.png","resimler/yeniürünler2.png","resimler/yeniürünler3.png","resimler/yeniürünler4.png","resimler/yeniürünler5.png","resimler/yeniürünler6.png");
$fiyat1=array("30.161,00₺","23,899,00₺","27.490,00₺","30.900,00₺","43.500,00₺","33.700,00₺");*/
yeni_ürünler();
reklam_2();
favoriler();
footer();
?>