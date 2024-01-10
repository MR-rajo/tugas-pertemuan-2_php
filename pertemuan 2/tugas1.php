<?php 

$hargaBarang = 150000;
$jumlahBarang = 3;
$status = "Sudah Bayar";

if($hargaBarang > 100000){
    $totalHarga = $hargaBarang * $jumlahBarang - 50000;
} else{
    $totalHarga = $hargaBarang * $jumlahBarang;
}

echo "Nama Barang : Printer Laserjet <br/>";
echo "Nama Barang : P001 <br/>";
echo "Kategori : Elektronik <br/>";
echo "Harga Barang : $hargaBarang  <br/>";
echo "Jumlah Barang : $jumlahBarang  <br/>";
echo "Total Harga : $totalHarga  <br/>";

if($status == "Proses"){
    echo "Status : <span style='color: orange;'>$status</span>";
} else if($status == "Sudah Bayar"){
    echo "Status : <span style='color: green;'>$status</span>";
} else{
    echo "anda tidak memiliki transaksi";
}
?>