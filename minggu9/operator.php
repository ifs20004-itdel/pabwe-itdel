<?php
    $minuman = "Teh Sosro";
    $satuan = "Botol";
    $harga = 7500;
    define("DISCOUNT", 20);
    $harga_diskon = $harga * (1-(DISCOUNT/100));
?>
<html>
<head><title>Variables</title></head>
<body><h4>Data Barang Jualan: </h4>
    <?php
        echo("Minuman : " . $minuman . '<br>');
        echo("Satuan : " . $satuan . '<br>');
        echo("Harga Jual : Rp." . $harga . '<br>');
        echo("Diskon : " . DISCOUNT . "%" . '<br>');
        echo("Harga Diskon : Rp." . $harga_diskon . '<br>');
    ?>
</body>
</html>
