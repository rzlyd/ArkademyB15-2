<?php
    $teks_asli = "Balonku ada lima, rupa-rupa warnanya";
    $ganti_huruf  = array('a','i','u','e','o');
    $hasil = str_replace($ganti_huruf,'o', $teks_asli);
    echo "Teks Asli = ".$teks_asli.'<br>';
    echo "hasil setelah diubah = ".$hasil;
?>