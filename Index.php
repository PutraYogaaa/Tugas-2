<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>INPY</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/index.js"></script>

</head>

<body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: yellowgreen;">
        <div class="container">
            <a class="navbar-brand" href="#">INPY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./fibonacci.php">Fibonacci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aritmatika.php">Aritmatika</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Bibit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pupuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peptisida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Masuk</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir nav -->

    <!-- Section -->
    <section class="jumbotron text-center">
        <img src="./media/bibit.png" alt="logo" width="200" />
        <h1 class="display-4">Sistem Informasi Pertanian</h1>
        <p class="lead">Bibit | Pupuk | Peptisida</p>
    </section>

    <!-- akhir sction -->

    <!-- About -->
    <section id="about" style="background-color:honeydew">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <br>
                    <h2>Tentang</h2>
                    <p>
                        Halaman Website ini membahas mengenai sektor dibidang pertanian yaitu Bibit, Pupuk, dan Peptidida.
                        Mulai dari jenis bibit maupun yang lain, cara penggunaan, tips dan trik, dan lain sebagainya yang akan dikembangkan.
                    </p>
                    <br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">
                    <h3>Bibit</h3>
                    <p>
                        Bibit adalah bahan tanam yang berasal dari benih yang disemai dan telah berkecambah untuk
                        menuju proses pertumbuhan dan perkembangan tanam selanjutnya. Ciri dari bibit adalah sudah
                        tumbuhnya akar, daun dan batang.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3>Pupuk</h3>
                    <p>Pupuk adalah material yang ditambahkan pada media tanam atau tanaman
                        untuk mencukupi kebutuhan hara yang diperlukan tanaman sehingga mampu
                        berproduksi dengan baik. Material pupuk dapat berupa bahan organik ataupun
                        non-organik (mineral). Pupuk berbeda dari suplemen. Pupuk mengandung bahan baku yang
                        diperlukan pertumbuhan dan perkembangan tanaman, sementara suplemen seperti hormon
                        tumbuhan membantu kelancaran proses metabolisme. Meskipun demikian, ke dalam pupuk,
                        khususnya pupuk buatan, dapat ditambahkan sejumlah material suplemen.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3>Peptisida</h3>
                    <p>Pestisida atau pembasmi hama adalah bahan yang digunakan untuk mengendalikan, menolak,
                        atau membasmi organisme pengganggu. Nama ini berasal dari pest yang diberi akhiran -cide.
                        Sasarannya bermacam-macam, seperti serangga, tikus, gulma, burung, mamalia, ikan, atau mikrobia
                        yang dianggap mengganggu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- end about -->


    <!-- ISI -->
    <!-- End Isi -->


    <!-- Registrasi -->
    <section id="form">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <br>
                    <h2>Form Pendaftaran</h2>
                    <p>Kamu dapat mendaftar/membuat akun untuk website ini.</p>
                    <br>
                </div>

                <div class="col-12">
                    <button type="button" class="btn btn-success" id="flip">Daftar</button>
                </div>
                <div id="panel">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="email" class="form-control" id="inputNama" required placeholder="Masukan Nama Anda">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmai" required placeholder="Masukan Email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="inputPassword" required placeholder="Masukan kata sandi">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress" required placeholder="Jl Batu-Putih">
                        </div>
                        <div class="col-12">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select id="inputState" class="form-select">
                                <option selected>Pilih</option>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Profesi</label>
                            <input type="text" class="form-control" id="inputAddress2" required placeholder="PNS, Swasta, atau Petani">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-success">Sign In</button>
                        </div>
                    </div>
                </div>
    </section>

    <!-- End Regestrasi -->



    <!-- footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>copyrigth 2021 | built by Putra Yoga</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>