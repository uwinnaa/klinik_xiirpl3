<?php
// - buatkan kelas sesuai dengan nama file
// - didalamnya terdapat sebuah fungsi yang bernama connection 

// ini adalah kelas, nama kelas harus sama persis dengan nama file 
class C_koneksi{

    // ini ada fungsi atau method yang bernama connection dan fungsi harus ada didalam kelas 
    public function connection(){
        // untuk isinya kita lanjutkan hari rabu 

        // membuat fungsi untuk terkoneksi kedalam database klinik_xiirpl3
        $conn = mysqli_connect('localhost','root','','klinik_xiirpl3');
        
        if (!$conn) {
            die("koneksi gagal dibuat : ".mysql_connect_error());
        }else{
            echo "koneksi berhasil dibuat";
        }


    }

}

//inisialisasi objek
$koneksi = new C_koneksi();
//memanggil method atau fungsi yang ada didalam kelas c_koneksi
$koneksi->connection();
?>


