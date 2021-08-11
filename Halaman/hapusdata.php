<?php
    include 'koneksi.php';

    $id_warga = $_GET['id_warga'];

    $queryhapus = mysqli_query($conn, "DELETE FROM tbl_datawarga WHERE id_warga = '$id_warga' ");

    if($queryhapus){
        header("Location:datawarga.php");
    }
    else{
        echo "ERROR, Data gagal dihapus". mysqli_error($conn);
    }
    
?>