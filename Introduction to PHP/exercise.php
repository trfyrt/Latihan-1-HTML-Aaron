<?php
    echo "<b>Exercise PHP - Aaron Kongdoh - 0806022310014</b><br>
    1. tampilkan text 'Hello World'<br>
    2. tampilkan 10 baris text 'Hello World'<br>
    3. tampilkan 10 baris text 'Hello World', tapi setiap baris genap ditambah text 'Hello World - [no baris]'<br>
    4. buat array berisi nama bulan dari Januari hingga Desember, dan tampilkan<br>
    5. buat array 2 dimensi, dimana index pertama menyimpan nama bulan dan index kedua menyimpan hari libur nasional di bulan tersebut. Lalu tampilkan. Misal: Januari - Tahun Baru, Februari - Imlek, dst<br>
    6. buat 4 functions untuk membuat pengurangan, perkalian, pembagian dan penjumlahan. Lalu panggil function tersebut dengan untuk melakukan operasi aritmatika. Berikut contoh hasilnya: Hasil perkalian 23 dan 2 adalah 46.<br>
";

    echo "<br><br>";

// nomor 1
    echo "Nomor 1<br>";
    echo "Hello World";

    echo "<br><br>";

// nomor 2
    echo "Nomor 2<br>";
    $i = 1;
    while ($i<=10){
        echo "Hello World<br>";
        $i++;
    };

    echo "<br><br>";

// nomor 3
    echo "Nomor 3<br>";
    $i = 1;
    while ($i<=10){
        if ($i%2 == 1){
            echo "Hello World<br>";
        }
        elseif ($i%2 == 0){
            echo "Hello World - baris $i<br>";
        };
        $i++;
    };

    echo "<br><br>";

// nomor 4
    echo "Nomor 4<br>";
    $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    foreach($bulan as $x){
        echo "$x<br>";
    };

    echo "<br><br>";

// nomor 5
    echo "Nomor 5<br>";
    $hariNasional = ["Tahun baru","Imlek","Paskah","Idul Fitri","Waisak","Idul Adha","Tahun Baru Islam","Hari Kemerdekaan RI","Maulid Nabi Muhammad SAW","Halloween","Thanksgiving","Natal"];
    $bulanDanLibur =[];

    for($i = 0; $i < count($bulan); $i++) {
        $bulanDanLibur[$i] = [$bulan[$i], $hariNasional[$i]];
    };

    foreach($bulanDanLibur as $y){
        echo $y[0]." - ".$y[1]."<br>";
    };

    echo "<br><br>";

// nomor 6
    echo "Nomor 6<br>";

    // pengurangan
    function pengurangan($a,$b){
        return "Hasil pengurangan $a dan $b adalah ".($a-$b);    
    }
    // perkalian
    function perkalian($a,$b){
        return "Hasil perkalian $a dan $b adalah ".($a*$b);    
    }
    // pembagian
    function pembagian($a,$b){
        return "Hasil pembagian $a dan $b adalah ".($a/$b);
    }
    // penjumlahan
    function penjumlahan($a,$b){
        return "Hasil penjumlahan $a dan $b adalah ".($a+$b);
    }

    $a=23;
    $b=2;
    echo pengurangan($a,$b)."<br>";
    echo perkalian($a,$b)."<br>";
    echo pembagian($a,$b)."<br>";
    echo penjumlahan($a,$b)."<br>";
?>