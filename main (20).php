<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniveristesi

*******************************************************************************/
// PHP FONKSIYONLARA GIRIS
// ENDIREK OZYINELEMELI FONKSIYONLAR

function islem($sayi=1) {
    echo($sayi);
    islemiki($sayi);
    return;
}
function islemiki ($gelen) {
    $gelen++;
    if ($gelen <= 10) {
        islem($gelen);
    }
    return;
    
}
islem();





?>
