<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <ol>
        <?php
        foreach ($data as $nama) {
            echo "<li>$nama</li>";
            # code...
        }
        ?>
    </ol>
</body>
</html>