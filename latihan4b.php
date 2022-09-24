<?php

$asean = ["Indonesia", "Singapura", "Malaysia", "Brunai", "Thailand"];

?>

<!DOCTYPE html>
<head>
    <title> Negara Asean </title>
</head>
<body>
    <P>
        <h1> <b> Daftar Negara ASEAN awal : </b></h1>

    <?php

    for ($i = 0; $i < count($asean); $i++) {// count berguna untuk menentukan jumlah elemnt pada array.
                                            // sehingga looping akan berhenti ketika isi array sudah tampil semua.
    echo "<li>$asean[$i]</li>";
    }

    ?>
     <P>
        <h1> <b> Daftar Negara ASEAN baru : </b></h1>

    <?php
    $hasil = array_push($asean, "Laos","Filipina", "Myanmar"); // menambahkan beberapa element pada akhir arrray
    for ($i = 0; $i < count($asean); $i++) {
    echo "<li>$asean[$i]</li>";
    }
    
    ?>
</body>
</html>
