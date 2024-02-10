<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instruksi Awal</title>
    <meta name="description" content="Tes cfit">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="logo2.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form action="instruksi1.php" method="post">


        <div class="container">
            <div class="card p-4 m-3">
                <h1>Hai,
                    <span id="userName"></span>
                </h1>
                </h1>
                <h3>Berikut adalah petunjuk mengenai CFIT</h3>
                <p>Tes ini terdiri dari 4 subtes yang masing-masing memiliki durasi waktu tersendiri, jadi
                    harap anda mengerjakan secepat mungkin namun bukan berarti asal-asalan
                </p>
                <button type="submit" class="btn btn-warning text-light">lanjut</button>
            </div>
        </div>
    </form>
    <script>
         var data = localStorage.getItem('nama');
            var nama = data;
            document.getElementById('userName').innerText = nama;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>