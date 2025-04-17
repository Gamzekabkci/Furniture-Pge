<?php
require_once "fonksiyon.php";
$baglanti=baglan();
$sorgu = "SELECT * FROM `mobilya`";
$sonuc = mysqli_query($baglanti,$sorgu);
echo '<table border="1">
<tr><td>ID</td><td>İSİM</td><td>STOK KODU</td><td>TAKIM İÇERİĞİ</td>
<td>FİYAT 1</td><td>FİYAT 2</td><td>Resim</td><td>Düzenle</td><td>Sil</td>
</tr>
';
while($satir=mysqli_fetch_array($sonuc)){
    echo "
    <tr>
        <td>".$satir["id"]."</td>
        <td>".$satir["isim"]."</td>
        <td>".$satir["stok_kodu"]."</td>
        <td>".$satir["takım_içeriği"]."</td>
        <td>".$satir["fiyat1"]."</td>
        <td>".$satir["fiyat2"]."</td>
        <td>".$satir["resim"].'</td>
        
    
        <td><a href="düzenle.php?id='.$satir["id"].'">Düzenle</a></td>
        <td><a href="sil.php?id='.$satir["id"].'">Sil</a></td>
    </tr>';
}
echo "</table>";
?>