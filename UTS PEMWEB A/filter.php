<?php
require 'functions.php';

$min = $_POST["harga_tertinggi"];
$max = $_POST["harga_terendah"];
$query = "SELECT * FROM barang WHERE harga_satuan BETWEEN $min AND $max";
$filter = mysqli_query(connect(), $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Filter Range Harga</title>
    <link rel="stylesheet" type="text/css" href="back.css">
</head>

<body>
        <h1>FILTER RANGE HARGA</h1></div>
            <tr>
                <th>SKU</th>
                <th>NAMA BARANG</th>
                <th>KATEGORI</th>
                <th>JUMLAH STOK</th>
                <th>HARGA SATUAN</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($filter)) : ?>
                <tr>
                    <td><?php echo $data['SKU']; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['jumlah_stok']; ?></td>
                    <td><?php echo $data['harga_satuan']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button onclick="window.location.href='http://localhost/UTSPEMWEB/'">Back</button>
    </div>
</body>

</html>
