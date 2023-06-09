<?php
$id    = $_GET['id'];
include "koneksi.php";

$delete = mysqli_query($koneksi,"DELETE FROM pengaduan WHERE id_pengaduan='$id'");

if ($delete){
    $status = "berhasil";
} else{
    $status = "gagal";
}
header("location:masyarakat.php?status".$status);
