<?php
//variabel user
$nama = "azkiya";
$nama = "zahra";

//variabel konstan
define("Nama", "azkiya");
const jenis_kelamin = "perempuan";
const umur = 18;

//latihan variabel
//hitungan nangun datar
//luas persegi 
$sisi = 8;
$luas_persegi = $sisi * $sisi;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Variabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: pink;">
    <h1 class="text-center my-2 fw-bold">Variabel</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4 m-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Variabel Server : </label>
                        <input type="text" class="form-control" value="<?php echo $_SERVER['SERVER_NAME']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Variabel User </label>
                        <input type="text" class="form-control" value="<?php echo $nama ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Variabel User </label>
                        <input type="text" class="form-control" value="<?php echo $nama ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Variabel Konstan Nama </label>
                        <input type="text" class="form-control" value="<?php echo Nama ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Variabel Konstan Jenis Kelamin </label>
                        <input type="text" class="form-control" value="<?php echo jenis_kelamin ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Variabel Konstan Umur </label>
                        <input type="text" class="form-control" value="<?php echo umur ?>" disabled>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 m-4">
                <h2>Luas Persegi</h2>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Sisi </label>
                        <input type="text" class="form-control" value="<?php echo $sisi ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hasil Perhitungan </label>
                        <input type="text" class="form-control" value="<?php echo $luas_persegi ?>" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>