<?php 

    $veri = simplexml_load_file("personel.xml");
    // echo "<pre>";
    // print_r($veri);
    // echo "</pre>";

    // foreach($veri->personel as $item) {
    //     echo "Personelin Adı: ".$item->adsoyad. "<br>".
    //     "Görevi: ".$item->gorevi."<br>"."<hr>";
    // }

    $personel = $veri->addChild("personel");
    $personel->addChild("adsoyad", "Arda Özeskici");
    $personel->addChild("gorevi", "Game Developer");
    // echo $veri-> asXML();
    foreach ($veri->personel as $item) {
        echo "Personelin Adı: " . $item->adsoyad . "<br>" .
             "Görevi: " . $item->gorevi . "<br><hr>";
    }

?>