<?php
    include "baglan.php";
    if (isset($_POST["giris"])) {
        $kullanici_adi = $_POST["kullanici_adi"];
        $sifre = $_POST["sifre"];
        $sorgu = $db->query("SELECT * FROM kullanicilar WHERE kullanici_adi='$kullanici_adi' and sifre='$sifre'", PDO::FETCH_ASSOC);
        if ($sorgu -> rowCount()>0) {
            session_start();
            $ad_soyad = $sorgu->fetch();
            $_SESSION["kullanici_adi"] = $kullanici_adi;
            $_SESSION["sifre"] = $sifre;
            echo "<h3>Hoşgeldiniz " . $ad_soyad["ad_soyad"] . " sayfamı ziyaret ettiğiniz için teşekkür ederim.</h3><br><a href='cikis.php'>Çıkış Yap</a>";
        } else {
            echo "<h3>Hatalı giriş yaptınız. Anasayfaya yönlendiriliyorsunuz.</h3>";
            header("refresh:4; url=index.php");
        }
    }
?>