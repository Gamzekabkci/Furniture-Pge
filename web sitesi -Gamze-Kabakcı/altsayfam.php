<?php
require_once "benimtema.php";
$title = "Tema Parçalama";
$id=$_GET["id"];
head_ustkisim($title);
navbar_ustkısım();
gruplar();
ürün_içerik();
footer();

?>
            