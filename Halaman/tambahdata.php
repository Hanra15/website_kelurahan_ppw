<?php
include 'koneksi.php';
$id_warga = $_POST['id_warga'];
$nama_warga = $_POST['nama_warga'];
$umur_warga = $_POST['umur_warga'];
$alamat = $_POST['alamat'];
$pekerjaan_warga = $_POST['pekerjaan_warga'];
$status_nikah = $_POST['status_nikah'];

$querytambah = mysqli_query($conn, "INSERT INTO tbl_datawarga VALUES ('$id_warga','$nama_warga','$umur_warga','$alamat','$pekerjaan_warga','$status_nikah')");

if($querytambah){
    header("Location:datawarga.php");
}
else{
    echo "ERROR, Tidak berhasil menambah data". mysqli_error($conn);
}
?>
