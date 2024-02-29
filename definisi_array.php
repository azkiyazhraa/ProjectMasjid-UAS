<?php
//Mendefinisikan Array
$ar_buah = ["Nangka", "Jambu", "Mangga", "Rambutan"];

$ar_buah[] = "Belimbing";
unset($ar_buah[1]);
$ar_buah[2] = "Leci";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Definisi Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: pink;">
    <h1 class="text-center my-2 fw-bold">Definisi Array</h1>
    <div class="card p-4 m-4">
        <h2><?php echo $ar_buah; ?></h2>
        <p>Jumlah buah : <?php echo count($ar_buah); ?></p>
        <table class="table bg-light">
            <thead>
                <tr>
                    <th scope="col">Buah</th>
                    <th scope="col">Menghitung Index Array</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        echo "<ol>";
                        foreach ($ar_buah as $buah) {
                            echo "<li>" . $buah . "</li>";
                        }
                        echo '</ol>';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo '<ul>';
                        foreach ($ar_buah as $k => $v) {
                            echo '<li> Buah index - ' . $k . ' adalah ' . $v . '</li>';
                        }
                        echo '</ul>';
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>