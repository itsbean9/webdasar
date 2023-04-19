<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
        $tipe_data = "Santai Saja"; // tipe data spring
        $tipe_data = 22; // tipe data integer
    ?>

    <h2><?=$tipe_data?></h2>

    <?php
        $pecahan = 5.85; //tipe data float/pecahan
    ?>

    <h2>Saya menampilkan nilai pecahan ini <?=$pecahan?></h2>

    <?php
        $perbandingan = true; //tipe data boolean
        echo $perbandingan;
    ?>

    <?php
        $provinsi[0] = "Jawa Tengah";
        $provinsi[1] = "Jawa Timur";
        $provinsi[2] = "Jawa Barat";

        echo var_dump($provinsi);

        echo "<br/>";

        $hasil = 5+10;
        echo $hasil;

        echo "<br/>";

        define("SATU", 1);
        echo SATU;

        echo "<br/>";
        if($perbandingan == true) {
            echo "ucapkan selamat pagi";
        } else {
            echo "ucapkan selamat";
        }

        echo "<br/>";

        $perbandingan = 1;
        switch($perbandingan) {
            case 1:
                $pesan = "soto ayam";
            break;
            case 2:
                $pesan = "ayam goreng";
            break;
            default:
                $pesan = "ice cream";
        }

        echo $pesan;
        echo "<br/>";

        $provinsi = array ("Jawa Timur", "Jawa Barat", "Jawa Tengah");
        foreach ($provinsi as $key) {
            echo $key;
            echo "<br/>";
        }
        $i=1; //perulangan
        while($i<5) {
            echo "topi bundar <br/>";
            $i++;
        }


    ?>
</body>
</html>