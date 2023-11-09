<?php
$stmt->bind_result($id_barang, $nama_barang, $jumlah_barang, $harga_barang, $tanggal_update);
$stmt->fetch();

echo $id_barang;		echo "	|	";
echo $nama_barang;		echo "	|	";
echo $jumlah_barang;	echo "	|	";
echo $harga_barang;		echo "	|	";
echo $tanggal_update;	