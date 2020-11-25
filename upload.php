<?php 
    if (isset($_POST['upload'])){
        $dir_upload = "img/";
        $nama_file = $_FILES['file']['name'];
        //pengecekan upload 
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $cek = move_uploaded_file ($_FILES['file']['tmp_name'], $dir_upload.$nama_file);
            if ($cek) {
                die("File Berhasil diUpload");
            }
            else{
                die("File Gagal diUpload");
            }
        }
    }
?>