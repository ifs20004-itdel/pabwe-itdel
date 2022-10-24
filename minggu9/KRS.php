<?php 
    $nim = "11S20004";
    $nama = "Samuel I. H. Sibuea";
    $kodeMK = array(
        "11S3109",
        "11S3101",
        "10S3109",
        "11S3116",
        "11S3112",
        "11S3105"
    );
    $mataKuliah = array(
        "Pengembangan Aplikasi Berbasis Web",
        "Analisis dan Perancangan Perangkat Lunak",
        "Kecerdasan Buatan",
        "Teori Bahasa Formal dan Automata",
        "Pengujian dan Penjaminan Mutu Perangkat Lunak",
        "Kriptografi dan Keamanan Informasi"

    );
    $SKS= array(
        4,3,3,3,3,3        
    ) ;
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>KRS</title>
 </head>
 <body>
    <h3 style='padding-left:40px'>Kartu Rencana Studi (KRS)</h3>
    <hr style='border: 4px gray solid; margin-left:40px; width: 60%'>
    <?php 
        echo("  <div style='display:flex; font-weight:bold;' >
                    <span style='width: 40px;'></span>
                    <span style='width: 300px;'>Nama</span>
                    <span style='width: 150px'>". $nama . "</span>
                </div>"
        );
        echo("<br>") ;
        echo("  <div style='display:flex; font-weight:bold;' >
                    <span style='width: 40px;'></span>
                    <span style='width: 300px;'>NIM</span>
                    <span style='width: 300px'>". $nim . "</span>
                </div>
                <br>
                <br>
                <br>"
        );
        echo("  <div style='display:flex; font-weight:bold;' >
                    <span style='width: 40px;'></span>
                    <span style='width: 300px;'>Kode Mata Kuliah</span>
                    <span style='width: 500px'> Nama Mata Kuliah </span>
                    <span style='width: 50px'> SKS </span>
                </div>"
        );
        function printKRS($kodeMK, $mataKuliah, $sks){
            echo("  <div style='display:flex;' >
                    <span style='width: 40px;'></span>
                    <span style='width: 300px;'>".$kodeMK."</span>
                    <span style='width: 510px'>".$mataKuliah."</span>
                    <span style='width: 50px'>".$sks."</span>
                    </div>"
            );
        }
        $total=0;
        for($x=0; $x<6; $x++){
            printKRS($kodeMK[$x], $mataKuliah[$x], $SKS[$x]);
            echo("<hr style='border: 1px gray solid; margin-left:40px; width: 60%'>");
            $total += $SKS[$x];
        }
        echo(" <div style='display:flex;' >
                <span style='width: 40px;'></span>
                <span style='width: 810px;'>TOTAL</span>
                <span style='width: 560px'> ".$total."</span>
            </div>"
        );

    ?>
 </body>
 </html>