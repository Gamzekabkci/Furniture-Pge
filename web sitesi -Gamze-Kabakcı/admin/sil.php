<?php
require_once "fonksiyon.php";
$baglanti=baglan();
$id=$_GET["id"];
$sorgu="DELETE FROM `mobilya` WHERE id=$id";
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:listele.php");
}else{
    echo "Problem var"; 
}
?>