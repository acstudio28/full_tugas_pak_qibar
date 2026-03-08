<?php
// class Fungsi {
//     function Db() {
//         return mysqli_connect(
//             "localhost",
//             "root",
//             "",
//             "negara"
//         );
//         // memastikan bahwa tidak ada error
//         if($connect->connect_error == 1){
//             return $connect->connect_error;
//         }else{
//             return $connect;
//         }
//     }
// }

class Fungsi {
    function Db() {

    }

    function tampil() {
        $query = "SELECT * FROM asia"; // perintah
        $data = mysqli_query($this->Db(), $query); // fungsi db sql
        return $data; // memberikan nilai hasil semuanya
    }
}

// instansiasi
$x = new Fungsi;

?>
?>
