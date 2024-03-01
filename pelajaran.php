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
          <button class="btn bg-dark text-white my-2 my-sm-0" type="submit">Search</button>
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
        <h3><i class="fas fa-user-graduate mr-2" ></i>Jadwal Pelajaran</h3><hr>
        <div class="row text-white">
          <a class="btn btn-primary mb-2" href="tambah.php" role="button">Edit</a>
          <table class="table table-striped table-bordered" >
            <thead>
               <tr>
                <th class="text-center" scope="col">WAKTU</th>
                <th colspan="3" class="text-center" scope="col">SENIN</th>
                <th colspan="3" class="text-center" scope="col">SELASA</th>
                <th colspan="3" class="text-center" scope="col">RABU</th>
                <th colspan="3" class="text-center" scope="col">KAMIS</th>
                <th colspan="3" class="text-center" scope="col">JUM'AT</th>
                <th colspan="3" class="text-center" scope="col">SABTU</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center" scope="row"> </th>
                <td class="text-center">X</td>
                <td class="text-center">XI</td>
                <td class="text-center">XII</td>
                <td class="text-center">X</td>
                <td class="text-center">XI</td>
                <td class="text-center">XII</td>
                <td class="text-center">X</td>
                <td class="text-center">XI</td>
                <td class="text-center">XII</td>
                <td class="text-center">X</td>
                <td class="text-center">XI</td>
                <td class="text-center">XII</td>
                <td class="text-center">X</td>
                <td class="text-center">XI</td>
                <td class="text-center">XII</td>
                <td class="text-center">X</td>
                <td class="text-center">XI</td>
                <td class="text-center">XII</td>
              </tr>
            </tbody>
          </table>
            
    </div>

      </div>   

      


      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="fontawesome/js/all.min.js"></script>
  </body>
</html>