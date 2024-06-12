<?php

// Penggunaaan Array Asosiatif untuk menampilkan data 
// mahaiswa 
$mobil = [
    ["jenis" => "metik", "merek" => "honda", "tahun" => "2024"],
    ["jenis" => "manual", "merek" => "wuling", "tahun" => "2020"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],
    ["jenis" => "manual", "merek" => "suzuki", "tahun" => "2022"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],
    ["jenis" => "metik", "merek" => "bario", "tahun" => "2023"],


];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data MOBIL </title>
</head>

<body>
    <h1>Data MOBIL</h1>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>jenis</th>
            <th>merek</th>
            <th>tahun</th>
        </tr>
        <?php $no = 1;
        foreach ($mobil as $mbl) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <!-- <td>
                    <a href="pertemuann3.php[?jenis=<?= $mbl["jenis"]; ?>&merek=<?= $mbl["merek"]; ?>&tahun=<?= $mbl["tahun"]; ?>">
                        <?= $mbl["jenis"]; ?>
                    </a>
                </td> -->

                <td><?= $mbl["jenis"]; ?></td>
                <td><?= $mbl["merek"]; ?></td>
                <td><?= $mbl["tahun"]; ?></td>
            </tr>
        <?php } ?>
</body>

</html>