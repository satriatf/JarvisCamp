<?php 
// function menampilkan angka ganjil
function tampilkanAngkaGanjil($angkaPertama,$angkaTerakhir){
    for ($angkaPertama;$angkaPertama<$angkaTerakhir ; $angkaPertama++) { 
        if ($angkaPertama%2 != 0) {
            echo $angkaPertama;
        }
    }
}
tampilkanAngkaGanjil(1,10);
echo "</br>";

// function menampilkan angka genap
function tampilkanAngkaGenap($angkaPertama,$angkaTerakhir){
    for ($angkaPertama;$angkaPertama<$angkaTerakhir ; $angkaPertama++) { 
        if ($angkaPertama%2 == 0) {
            echo $angkaPertama;
        }
    }
}
tampilkanAngkaGenap(1,10);
echo "</br>";
function hitungAritmatika($angkaPertama,$angkaKedua){
    echo "$angkaPertama + $angkaKedua = " . $angkaPertama+$angkaKedua;
    echo "</br>";
    echo "$angkaPertama - $angkaKedua = " . $angkaPertama-$angkaKedua;
    echo "</br>";
    echo "$angkaPertama / $angkaKedua = " . $angkaPertama/$angkaKedua;
    echo "</br>";
    echo "$angkaPertama * $angkaKedua = " . $angkaPertama*$angkaKedua;
}
hitungAritmatika(100,50);