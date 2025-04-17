<?php
ob_start();
session_start();
    if(isset($_SESSION["kullanici_adi"])){

           echo'
    <a href="logout.php">Çıkış</a>
    <h3>İşlemler</h3>
    <a href="listele.php">--Listele</a><br>
    <a href="ekle.php">--Ürün Ekle</a><br><br>
    
    '; 
    }else{
        header("location:login.php");
    }

?>