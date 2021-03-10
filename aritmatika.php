<?php
//Form submitted
//set input hasil dan deret menjadi kosong
$suku1 = "";           //input1
$beda = "";            //input2
$suku_n = "";          //suku ke - n
$baris = "";           //baris yang akan disimpan
$baristampil = "";       //baris yang akan tampil
$hasil = "";           //hasil yang akan tampil


if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

    $suku1 = $_POST["suku1"];
    $beda = $_POST["beda"];
    $suku_n = $_POST["suku_n"];

    //aritmatika

    $a = $suku1;
    $b = $beda;
    $n = $suku_n;

    //suku ke n
    $hasil = $a + ($n - 1) * $b;

    //tampilan baris
    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $baristampil .= $baris . " ";
    }
}
?>

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
                        <a class="nav-link active" aria-current="page" href="./Index.php">Home</a>
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

    <!-- ISI -->
    <section id="aritmatika" style="background-color: honeydew;">
    <div class="container">
        <div class="row text-center">
            <div class="col ">
                <form method="POST" action="#" class="bg-honeydew form-container" id="forminput">
                    <br>
                    <h2>Baris Aritmatika</h2>
                    <br />
                    <div class="form-group">
                        <label for="input1">Suku Pertama / a</label>
                        <input type="text" class="form-control" value="<?php echo $suku1; ?>" id="input1"
                            placeholder="Masukkan Suku Pertama" name="suku1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Beda / b</label>
                        <input type="text" class="form-control" value="<?php echo $beda; ?>" id="input2"
                            placeholder="Masukkan Beda Dari Baris" name="beda" required />
                    </div>

                    <div class="form-group">
                        <label for="input2">Suku Yang Dicari / n </label>
                        <input type="text" class="form-control" value="<?php echo $suku_n; ?>" id="jmlderet"
                            placeholder="Masukkan Suku Yang Ingin Dicari" name="suku_n" required />
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">
                        Hitung
                    </button>

                    <br />
                    <div class="row">
                    <div class="col">
                        <h5> <b>Suku Ke-N (Un): </b> </h5>
                        <h4> <?php echo $hasil; ?> </h4>
                    </div>

                    <div class="col">
                        <h5> <b>Baris Aritmatika: </b> </h5>
                        <h4> <?php echo $baristampil; ?> </h4>
                    </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
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