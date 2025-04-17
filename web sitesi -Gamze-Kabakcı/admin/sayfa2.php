<?php
session_start();
if(isset($_SESSION["kullanici_adi"])){
        echo'
    <a href="logout.php">Çıkış</a>
    <h2>Alt Sayfa</h2>
    <p>Bu bir altsayfadır.'.$_SESSION["kullanici_adi"].'</p>
    <a href="index.php">Anasayfa</a>';
}else{
    header("location:login.php");
}

?>