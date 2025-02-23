<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
            <div class="row mb-10">
                <div class="col-md-6 pr-5 pt-4">
                    <h1>Contact</h1>
                </div>
                <div class="col-md-6 pr-5 pt-4"></div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <form action="" method="post">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <label for="Alamat_Email">Alamat E-mail:</label><br>
                        <input type="email" name="Alamat_Email" required id="Alamat_Email">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <label for="Pesan">Pesan: </label><br>
                        <textarea name="Pesan" id="Pesan" minlength="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <button type="submit" value="Kirim!" class="bg-success text-light p-4">Kirim! </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php require_once "copyright.php"; ?>
</body>
</html>