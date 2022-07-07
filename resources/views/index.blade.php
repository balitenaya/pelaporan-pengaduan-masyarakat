<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPEMADES</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="30"
                        class="d-inline-block align-text-top">
                    SIPEMADES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    </ul>
                    <div class="dropdown text-end">
                        {{-- <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a> --}}
                    </div>
                </div>
        </nav>
        </headers>

        <main>

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            src="https://media-exp1.licdn.com/dms/image/C561BAQG_GUuiko1g4w/company-background_10000/0/1556257676589?e=2159024400&v=beta&t=qGCjpoBZMRUqwtlLKnJeh_q75OztEEbXsPmV7oVGdt8">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 id="caption">SIPEMADES</h1>
                                <h4>Sistem Informasi Pengaduan Masyarakat Desa Samsam</h4>
                                <a class="btn btn-lg btn-success mt-10" class="btn btn-primary"
                                    href="{{ route('login') }}">Adukan Sekarang!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Marketing messaging and featurettes
  ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">
                <h1 class="text-center">CARA <span class="text-muted">PENGADUAN</span></h1>
                <hr style="width: 150px; text-align: center; position: relative; height: 4px; margin: auto;">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="150" height="130"
                            src="img/kenali.jpg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                        <h2 class="text-muted">Kenali Masalah</h2>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="150" height="130" src="img/buat.jpg"
                            role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                            focusable="false">

                        <h2 class="text-muted">Buat Pengaduan</h2>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="150" height="130"
                            src="img/proses.jpg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                        <h2 class="text-muted">Tinjau Pengaduan</h2>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">
                <h1 class="text-center">SEKILAS SIPEMADES</h1>
                <hr style="width: 150px; text-align: center; position: relative; height: 4px; margin: auto;">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Tentang <span class="text-muted">SIPEMADES</span>
                        </h2>
                        <p class="lead">Merupakan sarana pengaduan masalah dan permintaan informasi
                            yang mempunyai
                            beberapa media penyampaian untuk mencakup semua kalangan masyarakat.<br>Secara
                            akuntabel dan transparan masyarakat dapat meninjau kemajuan dari laporan yang
                            dikirimkan.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500"
                            src="https://image.freepik.com/free-vector/site-stats-concept-illustration_114360-1434.jpg"
                            role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
                            focusable="false">

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Manfaat <span class="text-muted">SIPEMADES</span>
                        </h2>
                        <p class="lead">Dengan memanfaatkan berbagai media penyampaian informasi,
                            masyarakat
                            menjadi lebih dekat dan mudah untuk menyampaikan aspirasi.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500"
                            src="https://image.freepik.com/free-vector/social-dashboard-concept-illustration_114360-1568.jpg"
                            role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
                            focusable="false">

                    </div>
                </div>
                <hr class="featurette-divider">


            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>
