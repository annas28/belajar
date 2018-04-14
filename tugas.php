<form method="get">
angka1 : <input type="number" name="angka1">
angka 2 : <input type="number" name="angka2">
<input type="submit" name="jumlah"> 
</br
 <?php
$nom = $_GET['angka1'];
$nam = $_GET['angka2'];
if($angka2 < $angka1){
    echo "gabisa";
}
else{
    for($i=1 ; $i<=$angka2 ; $i++){
    $hasil= $angka1 + $i;
    echo $angka1 "+" $i "=" $hasil "</br>";
    }
}
?>