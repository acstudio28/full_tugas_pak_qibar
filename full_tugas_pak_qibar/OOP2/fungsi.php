<?php
// ternary nested
class Zodiac{
    public function cek_data($data){
        return (isset($_GET[$data])) ? ($_GET[$data] == NULL) ? 0 : $_GET[$data] : 0;
    }   
}

function cek_zodiac($tgl,$bulan){
    //capricon = 21 s.d 31 Desember - 1 s.d 19 Januari
    if(($tgl >= 21 && $tgl <= 31) && $bulan == 12){
        return "Capricon";
    }else if(($tgl >= 1 && $tgl <= 19) && $bulan == 1){
        return "Capricon";
    }else if(($tgl >= 20 && $tgl <= 31) && $bulan == 1){
        return "Aquarius";
    }else if(($tgl >= 1 && $tgl <= 18) && $bulan == 2){
        return "Aquarius";
    }else if(($tgl >= 19 && $tgl <= 29) && $bulan == 2){
        return "Pisces";
    }else if(($tgl >= 1 && $tgl <= 20) && $bulan == 3){
        return "Pisces";
    }else if(($tgl >= 21 && $tgl <= 31) && $bulan == 3){
        return "Aries";
    }else if(($tgl >= 1 && $tgl <= 19) && $bulan == 4){
        return "Aries";
    }else if(($tgl >= 20 && $tgl <= 30) && $bulan == 4){
        return "Taurus";
    }else if(($tgl >= 1 && $tgl <= 20) && $bulan == 5){
        return "Taurus";
    }
    {

    }
    //instansiasi
    $x = new Zodiac();
}
?>