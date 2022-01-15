<?php
include 'koneksi.php';
$idtamu = $_GET['idtamu'];
$sql = "delete from tamu where idtamu='$idtamu'";
$hasil = mysqli_query($conn, $sql);
if(!$hasil){
    echo("Query Error");
}else{
    header("location:bukutamu.php");
}