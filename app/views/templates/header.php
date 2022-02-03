<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
	        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
	        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
<!-- 	        <a class="nav-link" href="#">Pricing</a>
	        <a class="nav-link disabled">Disabled</a> -->
	      </div>
	    </div>
	  </div>
  </div>
</nav>