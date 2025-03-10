<?php

    // Yeni TXT Dökümanı Oluştur
    // touch('web-tasarimi.txt');

    // // Dosya İçerisinde Dosya Oluştur
    // touch("dosya/yeni-dosya.txt");
    
    // Öğrenci.txt Dosyasında Metin Yazma
    // touch("ogrenci.txt");
    // $belge = fopen("ogrenci.txt", "w+");
    // fwrite($belge, "Ad Soyad: ABDULKADİR KAYA\nOkul: GELİŞİM MESLEKİ YÜKSEK OKULU\nProgramlama Dilleri: PHP");
    // echo "Belge üzerine metin eklendi";
    // fclose($belge);

    $dosya = fopen("ogrenci.txt", "r");
    while(!feof($dosya)) {
        echo fgets($dosya)."<br>";
    }

?>