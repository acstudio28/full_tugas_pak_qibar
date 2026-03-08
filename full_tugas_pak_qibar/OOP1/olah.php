<?php

class Ambil
{
    function cek_data($data)
    {
        if (isset($_GET[$data]) == true) {
            if ($_GET[$data] == NULL) {
                return 0;
            } else {
                return $_GET[$data];
            }
        } else {
            return 0;
        }
    }

    function tampil_nama($nama)
    {
        // $this = merefer methods utama di dalam class yang sama
        return $this->cek_data($nama);
    }

    function tampil_tanggal($tgl)
    {
        return $this->cek_data($tgl);
    }

    function tampil_hobi($hobi)
    {
        return $this->cek_data($hobi);
    }

}

?>