
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>SUKSES</title>
  </head>
  <body>
    <form action="register_aksi.php" method="post" class="kotak_login">
  <fieldset>
    <div id="legend">
      <legend class="tulisan_login">Register</legend>
    </div>
    <div class="control-group">
      <!-- NIK -->
      <label class="control-label"  for="nik" >Nik</label>
      <div class="controls">
        <input type="text" id="nik" name="nik" placeholder="" class="input-xlarge">
        <p class="help-block">Please Input Your NIK</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Nama -->
      <label class="control-label" for="nama">Nama</label>
      <div class="controls">
        <input type="text" id="nama" name="nama" placeholder="" class="input-xlarge">
        <p class="help-block">Please Input Your Name</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Username-->
      <label class="control-label" for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Please Input Your Username</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Please Input Your Password</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Password -->
      <label class="control-label" for="level" >Level</label>
      <div class="controls">
        <select class="input-xlarge" id="level" name="id_level">
          <option>Pilih Level</option>
          <option>1. Admin</option>
          <option>2. Calon Pegawai</option>
        </select>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type="register" class="btn btn-success" name="register">Register</button>
        <a href="index.php" class="btn btn-primary">Login</a>
      </div>
    </div>
  </fieldset>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>