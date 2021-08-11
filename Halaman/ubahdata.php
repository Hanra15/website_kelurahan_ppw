<?php
    include 'koneksi.php';
    $id_warga = $_POST['id_warga'];
    $nama_warga = $_POST['nama_warga'];
    $umur_warga = $_POST['umur_warga'];
    $alamat = $_POST['alamat'];
    $pekerjaan_warga = $_POST['pekerjaan_warga'];
    $status_nikah = $_POST['status_nikah'];

    $queryubah = mysqli_query($conn, "UPDATE tbl_datawarga SET nama_warga='$nama_warga', umur_warga='$umur_warga', alamat='$alamat', pekerjaan_warga='$pekerjaan_warga', status_nikah='$status_nikah' WHERE id_warga='$id_warga' ");
    
    // var_dump($queryubah);die;

    // $id_warga = $_GET['id_warga'];
    // $queryambil = mysqli_query($conn, "SELECT * FROM tbl_datawarga WHERE id_warga='$id_warga'");
    // $row = mysqli_fetch_assoc($queryambil);

    if($queryubah){
        header("Location:datawarga.php");
        
        
    }
    else{
        echo "ERROR, Tidak berhasil mengubah data". mysqli_error($conn);
    }

  
?>