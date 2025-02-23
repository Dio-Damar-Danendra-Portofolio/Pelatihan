<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="tugas_pak_tri.css">
</head>
<body>
    <header class="bg-primary p-3 text-white">
        <?php require_once "navigasi.php"; ?>
    </header>
    <main class="display-info bg-white">
        <div class="container-fluid">
            <div class="identitas">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-4">
                        <div class="row align-items-center justify-content-center pt-2">
                            <div class="col-lg-4">
                                <img src="Foto/Dio_Damar_Danendra.jpg" width="100%" height="100%" alt="Ini saya">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4">
                                <h2>Dio Damar Danendra</h2>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4">
                                <p class="jabatan">Application Developer / Product Owner at PT Spesial Karya Mandiri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="overview">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4">
                            <h2>Overview</h2>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4">
                            <p>Saya adalah calon <i>web developer</i>, tetapi saya juga bekerja sebagai <i>application developer</i> dan <i>product owner</i> di PT Spesial Karya Mandiri</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="display-info bg-white mt-2">
                <div class="container-fluid">
                    <div class="row text-center mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="card text-center">
                                <div class="card-header align-items-center justify-content-center">
                                    <h2 id="skill">Skills</h2>
                                </div>
                                <div class="card-body align-items-center justify-content-center">
                                    <ul style="list-style-type: none; padding: 0px 10px 0px 10px;">
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>JavaScript</li>
                                        <li>C</li>
                                        <li>Multimedia Skills</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card text-center">
                                <div class="card-header align-items-center justify-content-center">
                                    <h2 id="skill">Experience</h2>
                                </div>
                                <div class="card-body align-items-center justify-content-center">
                                    <ul style="list-style-type: none; padding: 0px 10px 0px 10px;">
                                        <li>Pengalaman Kerja 1</li>
                                        <li>Pengalaman Kerja 2</li>
                                        <li>Pengalaman Kerja 3</li>
                                        <li>Pengalaman Kerja 4</li>
                                        <li>Pengalaman Kerja 5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once "copyright.php"; ?>
</body>
</html>