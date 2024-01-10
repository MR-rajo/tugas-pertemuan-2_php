<?php 

$nilai = 80;

if($nilai <= 85 && $nilai == "80"){
    echo "Benar";
} else if($nilai == 85){
    echo "Nilainya adalah 85";
} else{
    echo "Salah";
}

$harga = 49000;
if($harga > 50000){
    echo "<h1 style='color: blue;'>Harganya di atas 50rb</h1>";
} else {
    echo  "<h1 style='color: red;'>Harganya dibawah 50rb</h1>";
}

?>