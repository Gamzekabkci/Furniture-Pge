<?php
function baglan(){
$baglanti = mysqli_connect("localhost","root","","mobilya");
if (!$baglanti) {
    die("Connection failed: " . mysqli_connect_error());
}
return $baglanti;
}
?>