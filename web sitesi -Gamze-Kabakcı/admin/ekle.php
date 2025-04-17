<!DOCTYPE html>
<html>
<head>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form method="post" action="islem.php">
İsim<input type="text" name="isim" id="isim"><br><br><br><br><br>
Stok Kodu<input type="text" name="stok_kodu"><br><br><br><br>
Takım İçeriği<input type="text" name="takım_içeriği" id="takım_içeriği"><br><br><br>
Fiyat 1<input type="text" name="fiyat1"><br><br><br>
Fiyat 2<input type="text" name="fiyat2"><br><br><br>
Resim<input type="text" name="resim"><br><br><br><br>
<script>
    CKEDITOR.replace("isim");
    CKEDITOR.replace("takım_içeriği");
</script>

<br>
<input type="submit" value="Kaydet">
</form>    
</body>
</html>