<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Linked.in/Adhly</title>
</head>

<body>
    <div class="container">
        <div class="mother_flex">
            <div class="side_left">
                <div class="header_image"></div>
                <div class="profile_image"></div>
                <div class="name_header">
                    <div class="name_header_left">
                        <h2>Adhly Hasbi F</h2>
                        <p class="job">Computer Engineering</p>
                        <div class="address_connect">
                            <p>Malang, Jawa Timur</p>
                            <p style="margin: 0 12px;">&#183</p>
                            <p style="font-weight: bold; color: rgb(16, 98, 190);">666 Connection</p>
                        </div>
                    </div>
                    <div class="name_header_right">
                        <div class="school_container">
                            <img class="thumb" src="logo-ub.png" alt="">
                            <p style="margin-left: 8px;">Universitas Brawijaya</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side_right">
                <div class="fill_side_right">
                    <div class="right_image"></div>
                    <h2 style="margin-left: 24px; margin-top: -52px; color :darkcyan">Tentang Saya</h2>
                    <p style="margin-left: 24px; color:gray">
                        Saya adalah seorang mahasiswa tingkat akhir. Saya sangat menyukai banyak hal,
                        mulai dari bermain badminton, membaca buku, hingga berjalan-jalan ke alam.
                        Saya berusia 20 tahun dan selama saya hidup, saya selalu mengalir seperti air.
                        Bukannya berarti saya tak punya tujuan, tapi bagi saya untuk mencapai tujuan
                        banyak yang harus dilakukan. Sadar dengan diri saya saat ini, saya hanya bisa
                        mengikuti alurnya sembari mempersiapkan segala sumber daya yang saya butuhkan.
                        saya percaya akan takdir membawa apa yang saya inginkan, tapi akan ada saatnya
                        saya harus melawan arus untuk berbelok ke aliran yang lainnya.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="mother_flex2">
            <div class="side_left2">
                <h2 style="margin-top: 8px; margin-left: 280px; color: crimson;">Pesanan Anda</h2>
                <div class="php" style="margin-left: 24px;">
                    <?php
                $harga = 0;
                if (isset($_POST['berat'])) {

                $berat=$_POST['berat'];
                echo "<br>";
                for ($i=0; $i < count($berat) ; $i++){
                    echo "Berat Mie : " , $berat[$i]."<br>";
                        if ($berat[$i]=="100g"){
                            $harga=$harga+10000;
                        }
                        if ($berat[$i]=="250g"){
                            $harga=$harga+13000;
                        }
                        if ($berat[$i]=="500g"){
                            $harga=$harga+18000;
                        }
                }
                }
                if (isset($_POST['kuah'])) {

                    $kuah=$_POST['kuah'];
                    echo "<br>";
                    for ($i=0; $i < count($kuah) ; $i++){
                        echo "Jenis Kuah : " , $kuah[$i]."<br>";
                        $harga=$harga+15000;
                    }
                }
                if (isset($_POST['bawang'])) {

                    $bawang=$_POST['bawang'];
                    echo "<br>";
                    for ($i=0; $i < count($bawang) ; $i++){
                        echo "Banyaknya Bawang Daun : " , $bawang[$i]."<br>";
                    }
                }
                if (isset($_POST['topping'])) {

                    $topping=$_POST['topping'];
                    echo "<br>";
                    echo " Topping : ";
                    for ($i=0; $i < count($topping) ; $i++){
                        echo  $topping[$i].",";
                        if ($topping[$i]=="Tamago"){
                            $harga=$harga+5000;
                        }
                        if ($topping[$i]=="Tempura"){
                            $harga=$harga+10000;
                        }
                        if ($topping[$i]=="Smoke Beef"){
                            $harga=$harga+20000;
                        }
                        if ($topping[$i]=="Vegetables"){
                            $harga=$harga+10000;
                        }
                    }
                    echo "<br>";
                }
                if (isset($_POST['desert'])) {

                    $desert=$_POST['desert'];
                    echo "<br>";
                    for ($i=0; $i < count($desert) ; $i++){
                        echo "Menu Desert : " , $desert[$i]."<br>";
                        if ($desert[$i]=="Pudding"){
                            $harga=$harga+8000;
                        }
                        if ($desert[$i]=="Ice Cream"){
                            $harga=$harga+10000;
                        }
                    }
                }
                echo "<br>Jumlah Harga : ",$harga;
                echo "<br><br>";
                setcookie("hrg", $harga, time()+60);
                ?>
                </div>
            </div>
            <div class="side_right2">
                <div class="fill_side_right">
                    <form action="bayar.php" method="POST">
                        <h2 style="margin-left: 24px; color :darkcyan">Masukkan Jumlah Uang Anda</h2>
                        <h2 style="margin-left: 24px;"><input type="number" name="bayar"><br></h2>
                        <h2 style="margin-left: 24px;"><input type="submit" name="submit" value="Pesan" /></h2>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>