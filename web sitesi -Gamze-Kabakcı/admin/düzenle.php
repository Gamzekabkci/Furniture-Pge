<?php
$id = $_GET["id"];
require_once "fonksiyon.php";
$baglanti=baglan();
$sorgu = "SELECT * FROM `mobilya` WHERE id=$id";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    $satir=mysqli_fetch_array($sonuc);
    echo $satir["isim"]."  --   ".$satir["stok_kodu"]."  --   ".$satir["takım_içeriği"]."  --   ".$satir["fiyat1"]."  --   ".$satir["fiyat2"]."  --   ".$satir["resim"];
    
    echo'<br><br><form method="post" action="update.php">
 <input type="hidden" name="id" value='.$id.'><br>
İsim<input type="text" name="isim" value="'.$satir["isim"].'"><br>
Stok Kodu<input type="text" name="stok_kodu" value="'.$satir["stok_kodu"].'"><br>
Takım İçeriği<input type="text" name="takım_içeriği" value="'.$satir["takım_içeriği"].'"><br>
Fiyat 1<input type="text" name="fiyat1" value="'.$satir["fiyat1"].'"><br>
Fiyat 2<input type="text" name="fiyat2" value="'.$satir["fiyat2"].'"><br>
Resim<input type="text" name="resim" value="'.$satir["resim"].'"><br>

<br>
<input type="submit" value="Kaydet">
</form>       ';
}
?>