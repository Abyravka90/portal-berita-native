<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Portal - Berita</title>
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .img-thumbnail:hover {
        transform: translateY(-5px);
        border: none;
      }
    </style>

    
    </head>
  <body>
    
<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="<?= "http://localhost/portal-berita" ?>" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Portal Berita</strong>
      </a>
      <div class="pull-right">
        <a href="<?php echo "http://localhost/portal-berita/modul/auth"; ?>" class="btn btn-primary">login</a>
      </div>
    </div>
  </div>
</header>

<main role="main">  
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <?php 
                include('config/database.php');
                include('config/functions.php');
                $data_berita = detail_berita($koneksi, $_GET['id']);
                foreach($data_berita as $data){ ?>           
                <div class="col-md-8 offset-md-2">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top img-fluid rounded" style="height: 400px; object-fit:cover;" src="assets/img/<?= htmlspecialchars($data['image']) ?>" alt="<?= htmlspecialchars($data['judul']) ?>">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-3"><?= $data['judul'] ?></h2>
                            <div class="mb-3 text-center text-muted">
                                <small>
                                    <i class="bi bi-calendar"></i>
                                    <?= date('d M Y, H:i', strtotime($data['tanggal'])) ?> &nbsp; | &nbsp;
                                    <i class="bi bi-person"></i> <?= $data['username'] ?>
                                </small>
                            </div>
                            <hr>
                            <p class="card-text" style="font-size: 1.15rem; line-height:1.7;"><?= nl2br(htmlspecialchars($data['content'])) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <hr>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p> &copy; Asep Cahya Nugraha 2025</p>
    </div>
</footer>    
  </body>
</html>
