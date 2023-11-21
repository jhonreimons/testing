<?php
    require "config.php";


    $sql1 = "SELECT * FROM organisasi";

    $query1 = mysqli_query($conn,$sql1);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About</title>
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

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">HIMATEK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i
                    class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php">Event</a></li>
                    <a href="login.php">
                        <button type="button" class="btn btn-primary btn-lg-5 mt-3 btn-sm" rounded="100px"
                            style="height: 30px; border-radius: 50px;">Login</button>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead row justify-content-center" style="background-image: url('assets/img/background.jpg')">
    <h2 class="masthead-title text-light text-center">Data Pengurus</h2>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container">
        <div class="table-lg" data-aos="fade-up">
                <table class="table">
                    <thead class="table-dark ">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">No.HP</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; while($anggota = mysqli_fetch_assoc($query1)):?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $anggota['nama'];?></td>
                            <td><?php echo $anggota['jabatan'];?></td>
                            <td><?php echo $anggota['no_hp'];?></td>
                            <td><?php echo $anggota['email'];?></td>
                        </tr>
                        <?php $i++; endwhile;?>
                    </tbody>
                </table>
                <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <h5>Tugas Per Divisi</h5>
                    <h6>Divisi Pendidikan</h6>
                    <p class="post-subtitle">berfokus pada program-program yang dapat menanamkan, menumbuhkan, dan mengembangkan segala hal yang berkaitan dengan ranah pendidikan, baik itu penumbuhan jiwa entrepreneur, penumbuhan daya saing antar mahasiswa, maupun melatih kepakaan mahasiswa terhadap masalah sosial yang ada di sekeliling kehidupan kita</p>
                    <h6>Divisi Sosial</h6>
                    <p class="post-subtitle">Mengkoordinasikan dan mengkomunikasikan yang berkaitan dengan kebijakan dan seluruh program kerja serta kegiatan-kegiatan yang berhubungan dengan divisi sosial masyarakat kepada Ketua Umum dan Wakil Ketua Umum melalui Kepala Departemen</p>
                    <h6>Divisi HUMAS</h6>
                    <p class="post-subtitle">Dengan adanya divisi humas pada suatu perusahaan maka berbagai informasi yang ingin disampaikan oleh pihak mahasiswa kepada para konsumen bisa terlaksana dengan baik</p>
                    <h6>Divisi kompetisi</h6>
                    <p class="post-subtitle">Meningkatkan prestasi anggota melalui peran serta pada kompetisi baik tingkat regional, nasional, maupun internasional</p>
                    <h6>Divisi KOMINFO</h6>
                    <p class="post-subtitle"> Pembuatan Majalah Dinding (Mading) ini memiliki tujuan Sebagai sarana pembagian informasi dari program kerja yang telah terlaksana dan perkembangan IPTEK</p>
                    <h6>Divisi SARPRAS</h6>
                    <p class="post-subtitle"> Merencanakan dan melaksanakan program pengembangan dan pemeliharaan sarana prasarana.</p>
                </div>
            </div>
        </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="border-top  bg-secondary">
        <div class="col-lg-3 col-md-6 footer-contact ms-5">
            <h3>Contact Us</h3>
            <p>Sitoluama, kecamatan Laguboti, kabupaten Toba Samosir (Tobasa), Sumatera Utara<br>
                <strong>Phone:</strong> +62843243454<br>
                <strong>Email:</strong> himatekjaya@example.com<br>
                <strong>Instagram:</strong> <a href="https://instagram.com/himatek.itdel?utm_medium=copy_link">himatek.itdel</a><br>
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