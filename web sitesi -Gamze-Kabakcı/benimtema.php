<?php 
function head_ustkisim($title) {
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
     integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Anasayfa</title>
</head> 
<body>';
}
function navbar_ustkısım(){
    echo '
    <div class="slogan">
        <img src="resimler/logo.png" width="1000" height="90" style="margin-left: 220px;">
    </div>      
    <div class="navbar">
        <ul>
            <li><a href="sayfa.php"><i class="fa-solid fa-house-chimney"></i>Anasayfa</a></li>
            <li><a href="#"><i class="fa-solid fa-tags"></i></i>Kampanyalar</a></li>
            <li><a href="#"><i class="fa-solid fa-shop"></i>Mağazalarımız</a></li>
            <li><a href="http://127.0.0.1:5500/ileti%C5%9Fimsayfas%C4%B1.html"><i class="fa-regular fa-address-book"></i>İletişim</a></li>
            <li><a href="http://127.0.0.1:5500/hakk%C4%B1m%C4%B1zda.html"><i class="fa-regular fa-address-card"></i>Hakkımızda</a></li>
            <li><a href="http://127.0.0.1:5500/%C5%9Fipari%C5%9Ftakip.html#"><i class="fa-solid fa-truck-arrow-right"></i>Sipariş Takip</a></li>
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Sepetim</a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i>Üye Girişi</a></li>
        
        </ul>
    </div> ';
}
function gruplar(){
    echo '
    <div class="gruplar">
        <ul>
            <li><a href="#">OTURMA GRUPLARI</a></li>
            <li><a href="#">ÇOCUK VE GENÇ ODASI</a></li>
            <li><a href="#">YEMEK ODASI</a></li>
            <li><a href="#">YATAK ODASI</a></li>
            <li><a href="#">YATAK VE BAZA</a></li>
            <li><a href="#">BAHÇE TAKIMLARI</a></li>
            <li><a href="#">TAMAMLAYICI ÜRÜNLER</a></li>
        </ul>

    </div>
    <hr style="margin:0px 0px 0px 0px; color: #082338;">
    
        <br> ';
}
function footer(){
    echo '
    <div class="footer">
        <div class="footerkategori">
            <div class="kategori1">
                <p>OTURMA GRUPLARI</p>
                <ul>
                    <li><a href="#">Koltuk Takımları</a></li>
                    <li><a href="#">Köşe Takımları</a></li>
                    <li><a href="#">Kanepe/Koltuk</a></li>
                    <li><a href="#">İkili Koltuk</a></li>
                    <li><a href="#">Tekli Koltuk</a></li>
                    <li><a href="#">Sehpa Takımları</a></li>
                    <li><a href="#">TV Ünitesi</a></li>
                </ul>
            </div>
            <div class="kategori1">
                <p>ÇOCUK VE GENÇ ODASI</p>
                <ul>
                    <li><a href="#">Genç Odası Takımı</a></li>
                    <li><a href="#">Genç Odası Dolap</a></li>
                    <li><a href="#">Bebek Odası Takımı</a></li>
                    <li><a href="#">Çalışma Masası</a></li>
                    <li><a href="#">Ranza</a></li>
                    <li><a href="#">Genç Odası Komodin</a></li>
                    <li><a href="#">Genç Odası Şifonyer</a></li>
                    
                </ul>    
                
            </div>
            <div class="kategori1">
                <p>YEMEK ODASI</p>
                <ul>
                    <li><a href="#">Yemek Odası Takımı</a></li>
                    <li><a href="#">Mutfak Masa Takımı</a></li>
                    <li><a href="#">Yemek Masası</a></li>
                    <li><a href="#">Sandalye</a></li>
                    <li><a href="#">Konsol</a></li>
                    <li><a href="#">Konsol Aynası</a></li>
                    <li><a href="#">Vitrin</a></li>
                </ul>

            </div>
            <div class="kategori1">
                <p>BAHÇE MOBİLYALARI</p>
                <ul>
                    <li><a href="#">Mini Bahçe Takımı</a></li>
                    <li><a href="#">Bahçe Masa Takımları</a></li>
                    <li><a href="#">Bahçe Köşe Takımları</a></li>
                    <li><a href="#">Bahçe Masaları</a></li>
                    <li><a href="#">Bahçe Sehpaları</a></li> 
                    <li><a href="#">Bahçe Koltukları</a></li>
                    
                </ul>    
            </div>
            <div class="kategori1">
                <p>YATAK VE BAZA </p>
                <ul>
                    <li><a href="#">Yataklar</a></li>
                    <li><a href="#">Bebek Yatakları</a></li>
                    <li><a href="#">Bebek Beşikleri</a></li>
                    <li><a href="#">Baza</a></li>
                    <li><a href="#">Yatak Başlığı</a></li>
                    <li><a href="#">Yatak Başlığı</a></li>
                </ul>

            </div>
            <div class="kategori1">
                <p>TAMAMLAYICI ÜRÜNLER</p>
                <ul>
                    <li><a href="#">Portmanto</a></li>
                    <li><a href="#">TV Sehpası</a></li>
                    <li><a href="#">Orta Sehpası</a></li>
                    <li><a href="#">Zigon Sehpa</a></li>
                    <li><a href="#">Yan Sehpa</a></li>
                    <li><a href="#">Puf&Puf Koltuk</a></li>
                    
                </ul>

            </div>
            
        </div>
        <div class="footerlogo">
            <h3 style="color:white;">Adres  <i class="fa-solid fa-location-dot"></i></h3>
            <p>Gamze Mobilya Sanayi ve Ticaret A.Ş. Organize Sanayi Bölgesi 16.Cadde No: 2B 38070 Melikgazi Kayseri / TÜRKİYE</p>
            <br><br>
            <h4 style="color: white;">Sosyal Medya <i class="fa-solid fa-share-nodes"></i></h4><br>
            <a href="#" style="color:white;"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" style="color:white;"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" style="color:white;"><i class="fa-brands fa-facebook"></i></i></a>
            <a href="#" style="color:white;"><i class="fa-brands fa-twitter"></i></a> 
            <a href="#" style="color:white;"><i class="fa-brands fa-youtube"></i></a><br><br><br>
            <h4 style="color: white;">Çağrı Merkezi <i class="fa-solid fa-phone"></i></h4>
            <p>0546 577 34 54</p>
            <p>0546 975 34 67</p>

        </div>
        
        
       

     </div>';
}
function reklam_1(){
    echo '
        <div class="resim1">
                <a href="#"><img src="resimler/entry_slider_image_4.webp" width="100%"></a>
            </div><br><br> ';
            
}
function kaydırma(){
    echo '
    <div class="kaydırma">
        <div class="w3-content w3-display-container">
            <img class="mySlides" src="resimler/anasayfa5.webp" style="height: 500px; width: 1000px;">
            <img class="mySlides" src="resimler/anasayfa6.webp" style="height: 500px; width: 1000px;">
            <img class="mySlides" src="resimler/anasayfa7.webp" style="height: 500px; width: 1000px;">
          
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div></div>
          
          <script>
          var slideIndex = 1;
          showDivs(slideIndex);
          
          function plusDivs(n) {
            showDivs(slideIndex += n);
          }
          
          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
          }
          </script>
        <br> ';
            
}
function reklam_2(){
    echo '
     <div class="resim2">
        <a href="#"><img src="resimler/deneme.png" width="100%"></a>
    </div><br><br><br> ';
}
function yeni_ürünler(){
    require_once "admin/fonksiyon.php";
    $baglanti=baglan();
    //$id=$_POST["id"];
    $sorgu="SELECT * FROM `mobilya`";
    $sonuc=mysqli_query($baglanti,$sorgu);
    
    echo '
    <div class="yeniürünler">
            <center><p class="yeniürünyazı">YENİ ÜRÜNLER</p></center><br><br>';
            while($satir=mysqli_fetch_array($sonuc)){
            echo '
            <div class="yeniürünresim">
                <a href="altsayfam.php?id='.$satir["id"].'"><img src="resimler/'.$satir["resim"].'"  height="230" width="100%"></a>
                <p class="fiyat">'.$satir["fiyat1"].'</p>
                <label style="display: inline;">den başlayan fiyatlarla</label>
            </div> '; 
           
        }
        echo '
        </div>';
}

function favoriler(){
    echo '
    <div class="favoriler">
        <center><p class="favoribaşlık">FAVORİLER</p></center>
        <div class="favresim">
            <a href="#" class="resim"><img src="resimler/favori1.png"  height="200" width="100%"></a>
            <p class="fiyat">38.999,00 TL</p>
            <label style="display: inline;">den başlayan fiyatlarla</label>
        </div>
        <div class ="favresim">
            <a href="#" class = "resim"><img src="resimler/favori2.png"  height="200" width="100%"></a>
            <p class="fiyat">28.999,00 TL</p>
            <label style="display: inline;">den başlayan fiyatlarla</label>
        </div>
        <div class="favresim">
            <a href="#" class="resim"><img src="resimler/favori3.png"  height="200" width="100%"></a>
            <p class="fiyat">49.999,00 TL</p>
            <label style="display: inline;">den başlayan fiyatlarla</label>
        </div>
        <div class="favresim">
            <a href="#" class="resim"><img src="resimler/favori4.png"  height="200" width="100%"></a>
            <p class="fiyat">45.999,00 TL</p>
            <label style="display: inline;">den başlayan fiyatlarla</label>
        </div>
        <div class="favresim">
            <a href="#" class="resim"><img src="resimler/favori5.png"  height="200" width="100%"></a>
            <p class="fiyat">23.999,00 TL</p>
            <label style="display: inline;">den başlayan fiyatlarla</label>
        </div>
        <div class="favresim">
            <a href="#" class="resim"><img src="resimler/favori6.png" height="200" width="100%"></a>
            <p class="fiyat">50.999,00 TL</p>
            <label style="display: inline;">den başlayan fiyatlarla</label>
        </div>  
    </div>
    <br> ';
}
function ürün_içerik(){
    require_once "admin/fonksiyon.php";
    $baglanti=baglan();
    $id=$_GET["id"];
    $sorgu="SELECT * FROM `mobilya` WHERE id=$id";
    $sonuc=mysqli_query($baglanti,$sorgu);
    
    
    while($satir=mysqli_fetch_array($sonuc)){
        echo ' 
     <div class="altsayfa_resim">
        <img src="resimler/'.$satir["resim"].'" style="height: 450px; width: 750px;">
    </div>
    <div class="fiyat_bilgi">
        <h3 class="ürün_isim">'.$satir["isim"].'</h3>
        <hr style=" margin:0px 0px 20px 0px; color: #08141f;"><br>
        <table>
            <tr>
                <td class="ürün_tablo">Stok Kodu:</td>
                <td style="font-size: small;">'.$satir["stok_kodu"].'</td>
            </tr>
            <tr>
                <td class="ürün_tablo">Takım İçeriği:</td>
                <td  class="ürün_tablo2"> '.$satir["takım_içeriği"].'</td>
            </tr>
            <tr>
                <td class="ürün_tablo">Garanti Süresi:</td>
                <td style="font-size: small;">24 Ay</td>
            </tr>
        </table><br><hr style="margin:20px 0px 20px 0px; color: #c1c7cc;">
        <p class="fiyat_1">'.$satir["fiyat1"].'</p>
        <p class="fiyat_2">'.$satir["fiyat2"].'</p><br><br>
        <button  class="button_sepeteekle" type="submit">Sepete Ekle</button><br><br>
        <center><p style="font-family:Arial, Helvetica, sans-serif; font-size:medium;">Tahmini Teslimat Tarihi</p></center>
        <center><p style="font-family:Arial, Helvetica, sans-serif; font-size: small;">18 Şubat 2025 - 25 Şubat 2025</p></center>
        
    </div> ';}
}





?>

