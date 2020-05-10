<!-- <?php 
  include ('koneksi.php');

  $query = mysqli_query($koneksi,"SELECT * FROM pegawai ORDER BY id DESC");
 ?>  -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <title>PT SUKSES</title>
  </head>
  <body>
    <?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }

  ?> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">SUKSES</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="pendaftaran.php">Pendafataran<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftar_file.php">Daftar File</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
      </ul>
      <span class="navbar-text">
          <a href="logout.php">Logout</a>
      </span>
    </div>
  </nav>

  <div class="card-header">
      <a href="pendaftaran.php"><i class="fas fa-plus"></i> Add New</a>
  </div>
  <div class="card">
    <div class="card-header bg-info">
      <center>
        <p>DAFTAR CALON PEGAWAI</p>
      </center>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <!-- <th>NO</th> -->
            <th>NIK</th>
            <th>NAMA</th>
            <th>TANGGAL LAHIR</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>PENDIDIKAN</th>
            <th>JURUSAN</th>
            <th>FOTO</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <?php 
          include 'koneksi.php';
          // $id_pegawai = 1;
          $data = mysqli_query($koneksi,"select * from pegawai");
          while($d = mysqli_fetch_array($data)){?>
          <tr>
             <!-- <th><?php echo $id_pegawai ?></th> -->
             <th><?php $data['nik']; ?></th>
             <th><?php $data['nama']; ?></th>
             <th><?php $data['tgl_lahir']; ?></th>
             <th><?php $data['email']; ?></th>
             <th><?php $data['alamat']; ?></th>
             <th><?php $data['pendidikan']; ?></th>
             <th><?php $data['jurusan']; ?></th>
             <th><?php $data['foto']; ?></th>
             <th>
               <a href="#">Edit</a>
               <a href="#">hapus</a>
             </th>
           </tr>
         <?php } ?>
      </table>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>