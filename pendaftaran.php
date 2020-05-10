<?php 
    if(isset($_POST['submit'])){
      include 'koneksi.php';
      $submit = mysqli_query($koneksi, "INSERT INTO pegawai VALUES (
        NULL,
        '".$_POST['nik']."',
        '".$_POST['nama']."',
        '".$_POST['tgl_lahir']."-".$_POST['tgl']."-".$_POST['bln']."-".$_POST['thn']."',
        '".$_POST['email']."',
        '".$_POST['alamat']."',
        '".$_POST['pendidikan']."',
        '".$_POST['jurusan']."',
        '".$_POST['foto']."')");
      if($submit){
        echo 'berhasil submit';
      }else{
        echo 'gagal submit';
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
  <!-- <div class="admin">
    <p class="tulisan_login">FORM PENDAFTARAN</p>
  </div> -->
  <div class="container contact">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">
        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
        <h2>PT SUKSES</h2>
        <p>Form Pendaftaran Calon Karyawan PT SUKSES</p>
      </div>
    </div>
    <div class="col-md-9">
      <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nik">NIK:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="nik" placeholder="Enter NIK" name="nik">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="nama">NAMA:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="nama">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm" for="tgl_lahir" name="tgl_lahir">TANGGAL LAHIR:</label>
          <div class="col-sm-10">
          <!-- <input type="text" class="form-control" id="tgl_lahir" placeholder="Enter Birth" name="tgl_lahir"> -->
          <select name="tgl">
            <option>Tanggal</option>
            <?php for($tgl = 1; $tgl<=31; $tgl++){ ?>
              <option value="<?php echo $tgl?>"><?php echo $tgl ?></option>
            <?php } ?>
          </select>
          <select name="bln">
            <option>Bulan</option>
            <?php 
              $bln = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
              foreach ($bln as $no => $array) { ?>
                <option value="<?php echo $array ?>"><?php echo $array ?></option>
              <?php } ?>
          </select>
          <select name="thn">
            <option>Tahun</option>
            <?php for($thn = 1980; $thn<=2020; $thn++){ ?>
              <option value="<?php echo $thn?>"><?php echo $thn ?></option>
            <?php } ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">EMAIL:</label>
          <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="alamat">ALAMAT:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="alamat" placeholder="Enter Address" name="alamat">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pendidikan">PENDIDIKAN:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="pendidikan" placeholder="Enter Education" name="pendidikan">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="jurusan">JURUSAN:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="jurusan" placeholder="Enter Majors" name="jurusan">
          </div>
        </div>
        <!-- <div class="form-group">
          <label class="control-label col-sm-2" for="comment">Comment:</label>
          <div class="col-sm-10">
          <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div> -->
        <div class='form-group'>
          <label class="control-label col-sm-2">FOTO:</label>
          <div class="col-sm-10">
          <input type='file' id="file" data-plugin="dropify" name='foto' required/>
        </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">DAFTAR</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


	
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>