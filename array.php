<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: pink;">
    <h1 class="text-center my-2 fw-bold">Array</h1>
    <div class="card p-4 m-4">
        <table class="table bg-light">
            <thead>
                <tr>
                    <th scope="col">Buah dengan array Associative</th>
                    <th scope="col">Buah dengan array Numeric</th>
                    <th scope="col">Array pop</th>
                    <th scope="col">Array push</th>
                    <th scope="col">Array shift</th>
                    <th scope="col">Array unshift</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        $ar_buah = ["p" => "Pisang", "a" => "Apel", "r" => "Rambutan", "L" => "Lemon"];
                        echo "<ol>";
                        foreach ($ar_buah as $k => $v) {
                            echo "<li>" . $k . "-" . $v . "</li>";
                        }
                        echo "<ol>";
                        ?>
                    </td>
                    <td>
                        <?php
                        sort($ar_buah);
                        echo "<ol>";
                        foreach ($ar_buah as $k => $v) {
                            echo "<li>" . $k . "-" . $v . "</li>";
                        }
                        echo '</ol>';
                        ?>
                    </td>
                    <td>
                        <?php
                        $tims = ["rara", "gaga", "lala", "nana"];
                        array_pop($tims);
                        foreach ($tims as $person) {
                            echo $person . "<br>";
                        }

                        ?>
                    </td>
                    <td>
                        <?php
                        $tims = ["rara", "gaga", "lala", "nana"];
                        array_push($tims);
                        foreach ($tims as $person) {
                            echo $person . "<br>";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $tims = ["Rara", "Gaga", "Lala", "Nana"];
                        array_shift($tims);
                        foreach ($tims as $person) {
                            echo $person . "<br>";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $tims = ["Rara", "Gaga", "Lala", "Nana"];
                        array_unshift($tims, "Yaya", "Caca");
                        foreach ($tims as $person) {
                            echo $person . "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>