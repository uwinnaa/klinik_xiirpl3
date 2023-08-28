<?php
include_once '../controllers/c_login.php';

$login = new c_login();


    if ($_GET['aksi'] == 'register') {
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $role = $_POST['role'];

        //memanggil method/fungsi register ke dalam r_login
        $login->register($id,$nama,$email,$pass,$role);
    }
    elseif ($_GET['aksi']) == 'login') {

        $email = $_POST ['email'];
        $pass = $_POST ['Password'];
        
    }
?>