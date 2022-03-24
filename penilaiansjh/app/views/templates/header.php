<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Halaman <?= $data['judul'];?></title>
   <!-- <link rel="stylesheet" href="http://localhost/penilaiansjh/public/css/style.css"> -->
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
</head>
<body>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>/home">Penilaian SJH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
        <a class="nav-link" href="<?= BASEURL; ?>/detailpengguna">Test SJH</a>
        <a class="nav-link" href="<?= BASEURL; ?>/hasil">Nilai</a>
        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswaCobaDB">Coba</a> --> <!-- untuk coba Database -->
        <!-- <a class="nav-link" href="<?= BASEURL; ?>/hasil">Login</a> -->
        <!-- <a class="nav-link disabled" href="#">About</a> -->
        <!-- <a class="nav-link disabled">Disabled</a> -->
      <!-- </div>
    </div>
  </div>
</nav><br> -->


<nav class="top-nav">
  <ul>
    <li>
      <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
    </li>
    <li>
      <a class="nav-link" href="<?= BASEURL; ?>/detailpengguna">Test SJH</a>
    </li>
    <li>
      <a class="nav-link" href="<?= BASEURL; ?>/hasil">Nilai</a>
    </li>
    <li>
      <a class="nav-link" href="<?= BASEURL; ?>/mahasiswaCobaDB">Coba</a> <!-- untuk coba Database -->
     </li>
   <li class="btn-login">
      <?php if(isset($_SESSION['user_id'])) :  ?>
        <a class="nav-link" href="<?= BASEURL; ?>/login">Logout</a>
      <?php else : ?>
        <a class="nav-link" href="<?= BASEURL; ?>/login">Login</a>
      <?php endif; ?>
    </li>
  </ul>
</nav>