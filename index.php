<?php

$nama = 'Azkiya Zahra';
$usia = 19;
$hobby = ['Menulis', 'Menonton Film', 'Mendengarkan Musik'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Variabel & Data array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: pink;">
    <h1 class="text-center my-2 fw-bold">Variabel & Data array</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4 m-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama : </label>
                        <input type="text" class="form-control" value="<?php echo $nama ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Usia </label>
                        <input type="text" class="form-control" value="<?php echo $usia ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hobi </label>
                        <?php
                        foreach ($hobby as $hobi) { ?>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" checked>
                                <label class="form-check-label"><?php echo $hobi ?></label>
                            </div>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>