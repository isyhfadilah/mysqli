<?php
$row = $stmt->get_result()->fetch_object();

echo $row->id_barang;			echo "	|	";
echo $row->nama_barang;			echo "	|	";
echo $row->jumlah_barang;		echo "	|	";
echo $row->harga_barang;		echo "	|	";
echo $row->tanggal_update;		
