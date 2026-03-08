<?php

class Kalkulasi
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

    function hasil_tambah($x, $y)
    {
        return $this->cek_data($x) + $this->cek_data($y);
    }

    function kurang($x, $y)
    {
        return $this->cek_data($x) - $this->cek_data($y);
    }

    function kali($x, $y)
    {
        return $this->cek_data($x) * $this->cek_data($y);
    }

    function bagi($x, $y)
    {
        return $this->cek_data($x) / $this->cek_data($y);
    }
}

// instansiasi
$hasil = NULL;
$ObjKal = new Kalkulasi;

?>