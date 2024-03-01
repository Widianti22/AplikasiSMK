<?php 
require 'function.php';
$siswa = query("SELECT * FROM swa");

//tambah
   if( isset($_POST["submit"]) ) {
                      
   if (tambah_siswa($_POST) > 0) {
  echo "
    <script>
    document.location.href = 'siswa.php';
    </script>";
 } else {
   echo "
   <script>
    alert('data gagal ditambahkan!');
     </script>";
    }
    }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <title>Dashboard</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
         <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark text-white bg-dark my-2 my-sm-0" type="submit">Search</button>
         </form>
        <div class="icon mr-4">
          <h5> 
            <i class="fas fa-envelope ml-3" data-togle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell ml-3" data-togle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt ml-3" data-togle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
      </nav>
      <div class="row no-gutter mt-5 ">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active text-white" href="index.html"><i class="fas fa-tachometer-alt mr-2" ></i>Dashboard</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Siswa</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="guru.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="pelajaran.php"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Pelajaran</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="nilai_siswa.php"><i class="fas fa-paper-plane mr-2"></i>Nilai Siswa</a> <hr class="bg-secondary">
            </li>
          </ul>

      </div>
      <div class="col-md-10 p-5 pl-2">
        <h3><i class="fas fa-user-graduate mr-2" ></i>DAFTAR SISWA</h3><hr>
        <div class="row text-white">
          <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-primary">Tambah Data Siswa</h5>
                      <form action="" method="post">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="" method="post">
                    <div class="modal-body text-primary">
                        <div class="form-group">
                          <label for="nis">Nomor Induk Siswa</label>
                          <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan Nomor Induk Siswa" required>
                        
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                        
                          <label for="jk">Jenis Kelamin</label>
                          <input type="text" class="form-control" id="jk" name="jk" placeholder="Masukan Jenis Kelamin">
                        
                          <label for="kelas">Kelas</label>
                          <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas">
                        
                          <label for="jurusan">Jurusan</label>
                          <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="batal" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
          <nav class="navbar navbar-light bg-light">
             <form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus="" autocomplete="off" placeholder="search">
    <button type="submit" name="cari"> cari</button>
  </form>
          </nav>
          <table class="table table-striped table-bordered" >
            <thead>
              <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">Nomor Induk Siswa</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">JK</th>
                <th class="text-center" scope="col">Kelas</th>
                <th class="text-center" scope="col">Jurusan</th>
                 <th colspan="3" scope="col" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
       <tr>
      <th scope="row">1</th>
      <td>172072022</td>
      <td>Ai fitriani</td>
      <td class="text-center">p</td>
      <td class="text-center">XII</td>
      <td class="text-center">RPL</td>
         <td <a href=""class="btn btn-primary mt-3 p-6">Detail</a></td>
      <td><i class="fas fa-edit  mt-3 p-6 text-success rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt  mt-3 p-6 text-danger rounded" data-toggle="tooltip" title="Delete"></i></td>
       </tr>
    <tr>
      <th scope="row">2</th>
      <td>126774888</td>
      <td>Dina haryanti</td>
      <td class="text-center">p</td> 
      <td class="text-center">XII</td>
      <td class="text-center">RPL</td>
         <td <a href=""class="btn btn-primary mt-3 p-6">Detail</a></td>
      <td><i class="fas fa-edit  mt-3 p-6 text-success rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt  mt-3 p-6 text-danger rounded" data-toggle="tooltip" title="Delete"></i></td>

      

      
     

      


      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="fontawesome/js/all.min.js"></script>
    
  </body>
</html>