<?php

$asean = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientine",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"];

?>

<!DOCTYPE html>
<head>
    <title> Latihan 3 c </title>
</head>
<body>
<P>
        <h1> <b> Daftar Negara ASEAN dan Ibukota : </b></h1>

    <?php foreach ($asean as $nrp => $ibukota): ?>
        <li><?php echo "$nrp : $ibukota"?> </li>
    <?php endforeach ?>

</body>
</html>