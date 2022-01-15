<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$sql="insert into tamu(nama,email,pesan) values('$nama','$email','$pesan')";
$hasil = mysqli_query($conn, $sql);
if(!$hasil){
    echo("Query Error");
}else{
    header("location:bukutamu.php");
}