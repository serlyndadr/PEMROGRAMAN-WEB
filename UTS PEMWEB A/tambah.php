<?php 
require 'functions.php';
if(isset($_POST["submit"])) {

	//cek data
	if(tambah($_POST) > 0) {
		echo "
			<script>
			alert('Data Berhasil Ditambahkan!');
			document.location.href = 'list.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal Ditambahkan!');
			document.location.href = 'list.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Barokah Minimarket</title>
	<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body><center>
        <h3>Tambah Data Barang</h3>
	<form action="" method="post">
        <p>
            <label for="SKU">SKU: </label>
            <input type="text" name="SKU" placeholder="SKU" />
        </p>
        <p>
            <label for="nama_barang">NAMA BARANG: </label>
            <input type="text" name="nama_barang" placeholder="nama barang" />
        </p>
        <p>
            <label for="kategori">KATEGORI: </label>
            <select name="kategori">
                <option>MAKANAN</option>
                <option>MINUMAN</option>
                <option>ATK</option>                
            </select>
        </p>
        <p>
            <label for="jumlah_stok">JUMLAH STOK: </label>
            <textarea name="jumlah_stok"></textarea>
        </p>
        <p>
            <label for="harga_satuan">HARGA BARANG: </label>
            <input type="text" name="harga_satuan" placeholder="Rp" />            
        </p>
        
        <p>
        <input type="submit" name="Insert" value="Insert">

        </p>

    </form>

    </body></center>
</html>