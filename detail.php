<?php

    require "config.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM event WHERE id ='$id'";
    $sql = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Event | view</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="text-dark">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-dark" href="index.html">Himatek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i
                    class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="index.php">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="about.php">About</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="post.php">Event</a>
                    </li>
                    <a href="login.php">
                        <button type="button" class="btn btn-primary btn-lg-5 mt-3 btn-sm" rounded="100px"
                            style="height: 30px; border-radius: 50px;">Login</button>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="content">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center mt-lg-5">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="position-relative">
                        <h4 class="title mt-lg-5"><?php echo $data['nama_kegiatan'];?></h4>
                        <small><?php echo $data['tanggal']?></small>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p><?php echo $data['deskripsi'];?></p>
                </div>
                <div class="container">
                    <hr>
                    <p>Lampiran:</p>
                    <a class="link" href="file/<?php echo $data['file_lampiran'];?>"><p><?php echo $data['file_lampiran'];?></p></a>
                </div>
            </div>
        </div>
    </article>
    <!-- Footer-->
    <footer class="border-top bg-secondary">
        <div class="col-lg-3 col-md-6 footer-contact ms-5">
            <h3>Contact Us</h3>
            <p>Sitoluama, kecamatan Laguboti, kabupaten Toba Samosir (Tobasa), Sumatera Utara<br>
                <strong>Phone:</strong> +62843243454<br>
                <strong>Email:</strong> himatekjaya@example.com<br>
                <strong>Instagram:</strong><a href="https://www.instagram.com/himatek.itdel/?utm_medium=copy_link"> himatek.itdel</a><br>
            </p>
        </div>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>