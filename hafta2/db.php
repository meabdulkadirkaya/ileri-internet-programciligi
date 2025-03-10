<?php

$db = new PDO("mysql:host=localhost; dbname=durum; charset=utf8","root", "");

if(isset($_POST["ekle"])) {
    $cilt_no = $_POST["cilt_no"];
    $yazar_adi = $_POST["yazar_adi"];
    $yayinevi = $_POST["yayinevi"];

    if($db) {
        $kaydet = $db->exec("INSERT INTO durum (cilt_no, yazar_adi, yayinevi) VALUES ('$cilt_no', '$yazar_adi', '$yayinevi')");
        if ($kaydet) {
            echo "Kayıt Ekleme Başarılı.";
        }
        else {
            echo "Kayıt Ekleme Başarısız.";
        }
    }
}

?>