<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Kelurahan Hambalang - Data Warga</title>
  </head>
  <body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../image/logo-kabupaten.png" alt="logo" width="25" height="30"> Kelurahan Hambalang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item text-center">
          <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light list" href="struktur.php">Struktur Organisasi</a></li>
            <li><a class="dropdown-item text-light list" href="visimisi.php">Visi & Misi</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light" href="#">Data Warga</a></li>
            <li><a class="dropdown-item text-light" href="potensi.php">Potensi Daerah</a></li>        
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
<!-- end navbar -->

<!-- breadcrumb -->
<div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="bc-home">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Warga</li>
  </ol>
</nav>
</div>
<!-- end breadcrumb -->

<!-- content -->
<div class="container">
  
  <?php
    include 'koneksi.php';
  ?>

  <div class="jumbotron">
    <h1 class="display-4">Data Warga</h1>
    <hr class="my-4">
  </div>

  <div class="conten">
  <!-- triger modal tambah -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
      Tambah Data
    </button>
 
    <br><br>
    <table id="datatable" class="table table-bordered table-striped table-hover shadow">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama Warga</th>
          <th>Umur</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
        
      <tbody>
        <?php 
        $no = 1;
        $data = mysqli_query($conn,"SELECT * FROM tbl_datawarga");
        while ($row = mysqli_fetch_array($data)) 
        {
          
        ?>
        <tr>
        <td style="width:10px;"><?= $no++;?></td>
        <td ><?= $row['nama_warga'];?></td>
        <td style="width:10px;"><?= $row['umur_warga'];?></td>
        <td style="width:300px;"><?= $row['alamat'];?></td>
        <td style="width:110px;"><?= $row['pekerjaan_warga'];?></td>
        <td><?= $row['status_nikah'];?></td>
        <td style="width:150px;">
          <!-- trigger modal edit -->
          <a href="<?php echo $no; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editdata<?php echo $no;?>">
          Edit
          </a>
          <!-- trigger modal hapus -->
          <a href="<?php echo $no; ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusdata<?php echo $no;?>">
          Hapus
          </a>

          <!-- modal hapus data -->
          <div class="modal fade" id="hapusdata<?php echo $no;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header shadow">
                  <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <?php 
                    $id_warga = $row['id_warga'];
                  ?>
                  <h4 class="text-center" >Apakah anda yakin ingin menghapus data warga <?php echo $row['nama_warga'];?><strong><span class="grt"></span></strong> ?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                  <a href="hapusdata.php?id_warga=<?php echo $row['id_warga']; ?>" class="btn btn-primary">Hapus</a>
                </div>
              </div>
            </div>
          </div>

          <!-- modal edit data -->
          <div class="modal fade" id="editdata<?php echo $no;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header shadow">
                  <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <?php
                    $id_warga = $row['id_warga'];
                  ?>
                  <form action="ubahdata.php?id_warga=<?php echo $row['id_warga']; ?>" method="post">
                  
                  
                  <div class="form-group">
                      <div class="row">
                        <label for="nama" class=" control-label">Nama <span class="text-danger">*</span></label>
                        <input type="hidden" id="id_warga" name="id_warga" value="<?php echo $row['id_warga']; ?>">
                        <input type="text" class="form-control" id="nama" name="nama_warga" placeholder="Masukan Nama" value="<?php echo $row['nama_warga']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="umur" class=" control-label">Umur <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="umur" name="umur_warga" placeholder="Masukan Umur" value="<?php echo $row['umur_warga']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="alamat" class=" control-label">Alamat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $row['alamat']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="pekerjaan" class=" control-label">Pekerjaan <span class="text-danger">*</span></label>
                        <select name="pekerjaan_warga" class="form-select" id="pekerjaan">     
                          <option selected><?php echo $row['pekerjaan_warga']; ?></option>
                          <option value="Pegawai Negeri">Pegawai Negeri</option>
                          <option value="Pegawai Swasta">Pegawai Swasta</option>
                          <option value="Guru">Guru</option>
                          <option value="Karyawan">Karyawan</option>
                          <option value="Pelajar">Pelajar</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option value="Buruh">Buruh</option>
                          <option value="IRT">Ibu Rumah Tangga</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="status" class=" control-label">Status Nikah <span class="text-danger">*</span></label>
                        <select name="status_nikah" class="form-select" id="status">     
                          <option selected><?php echo $row['status_nikah']; ?></option>
                          <option value="Kawin">Kawin</option>
                          <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                      <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          </td>
          </tr>
        <?php 
          } 
        ?>
      </tbody>   
    </table>
    
    <!-- modal tambah data -->
          <div class="modal fade" id="tambahdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header shadow">
                  <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Warga</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="tambahdata.php" method="post">
                    <div class="form-group">
                      <div class="row">
                        <label for="nama" class=" control-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama_warga" placeholder="Masukan Nama" value="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="umur" class=" control-label">Umur <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="umur" name="umur_warga" placeholder="Masukan Umur" value="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="alamat" class=" control-label">Alamat <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value=""></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="pekerjaan" class=" control-label">Pekerjaan <span class="text-danger">*</span></label>
                        <select name="pekerjaan_warga" class="form-select" id="pekerjaan">     
                          <option selected>Pilih Pekerjaan</option>
                          <option value="Pegawai Negeri">Pegawai Negeri</option>
                          <option value="Pegawai Swasta">Pegawai Swasta</option>
                          <option value="Guru">Guru</option>
                          <option value="Karyawan">Karyawan</option>
                          <option value="Pelajar">Pelajar</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option value="Buruh">Buruh</option>
                          <option value="IRT">Ibu Rumah Tangga</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label for="status" class=" control-label">Status Nikah <span class="text-danger">*</span></label>
                        <select name="status_nikah" class="form-select" id="status">     
                          <option selected>Pilih status</option>
                          <option value="Kawin">Kawin</option>
                          <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary" value="tambah">Tambah Data</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
  </div>
</div>

<!-- end content -->
<!-- footer -->
<br>
<footer class="bd-footer py-5 mt-5 bg-dark text-light ">
  <div class="container">
    
    <h4><img src="../image/logo-kabupaten.png" alt="" width="20" heigth="30" style="margin:10px;">Kelurahan Hambalang</h4>
    <br>
    <i>Kelurahan Hambalang Copyright 2021 - Kelompok 1 PPW</i>
  </div>
</footer>
<!-- end footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>