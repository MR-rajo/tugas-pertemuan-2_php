<?php 

$nilaiHarian = 95 * 30 / 100;
$nilaiUts = 80 * 30 / 100;
$nilaiUas = 98 * 40 / 100;
$nilaiAkhir = + $nilaiHarian + $nilaiUts + $nilaiUas;

echo "Nama : Dimas Putra Agustav <br/>";
echo "Kelas : X RPL 2 <br/>";
echo "Nilai Harian : $nilaiHarian <br/>";
echo "Nilai Uts : $nilaiUts <br/>";
echo "Nilai Uas : $nilaiUas <br/>";
echo "Nilai Akhir : $nilaiAkhir <br/>";

if($nilaiAkhir >= 90 && $nilaiAkhir <= 100){
    echo "Predikat : (A+)";
} else if($nilaiAkhir >= 85 && $nilaiAkhir <= 89){
    echo "Predikat : (A)";
} else if($nilaiAkhir >= 80 && $nilaiAkhir <= 84){
    echo "Predikat : (B+)";
} else if($nilaiAkhir >= 76 && $nilaiAkhir <= 79){
    echo "Predikat : (B)";
} else if($nilaiAkhir >= 60 && $nilaiAkhir <= 75){
    echo "Predikat : (C)";
} else if($nilaiAkhir >= 40 && $nilaiAkhir <= 59){
    echo "Predikat : (D)";
} else {
    echo "Predikat : (E)";
}
?>