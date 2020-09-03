<?php
$diskon = '52%';
$harga = 10;
$persen = preg_match('/%/i',$diskon);
$diskon = intVal($diskon);

//check persen
if($persen){
echo 'ini persen hasil nya ' . (($diskon / 100) * $harga) ;
}else{
echo 'ini bukan persen hasilnya ' . ($harga - $diskon) ;
}
?>
