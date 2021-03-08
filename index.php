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
                <h2 style=" margin-left: 280px; color: crimson;">Pemesanan Mie</h2>
                <form action="mesen.php" method="POST">
                    <h3 style="margin-left: 24px;"><label>Berat Mie</label> </h3>
                    <div class="pilih">
                        <div class="g1">
                            <p><input type="checkbox" name="berat[]" value="100g" /> 100g</p>
                        </div>
                        <div class="g2">
                            <p><input type="checkbox" name="berat[]" value="250g" /> 250g</p>
                        </div>
                        <div class="g3">
                            <p><input type="checkbox" name="berat[]" value="500g" /> 500g</p>
                        </div>
                    </div>
                    <h3 style="margin-left: 24px;"><label>Jenis Kuah</label> </h3>
                    <div class="pilih">
                        <div class="g1">
                            <p><input type="checkbox" name="kuah[]" value="Miso" /> Miso</p>
                        </div>
                        <div class="g2">
                            <p><input type="checkbox" name="kuah[]" value="Pedas" /> Pedas</p>
                        </div>
                        <div class="g3">
                            <p><input type="checkbox" name="kuah[]" value="Soyu" /> Soyu</p>
                        </div>
                        <div class="g4">
                            <p><input type="checkbox" name="kuah[]" value="Spesial" /> Spesial</p>
                        </div>
                    </div>
                    <h3 style="margin-left: 24px;"><label>Bawang Daun</label></h3>
                    <div class="pilih">
                        <div class="g1">
                            <p><input type="checkbox" name="bawang[]" value="1/4 genggam" /> 1/4 genggam</p>
                        </div>
                        <div class="g2">
                            <p><input type="checkbox" name="bawang[]" value="1/2 genggam" /> 1/2 genggam</p>
                        </div>
                        <div class="g3">
                            <p><input type="checkbox" name="bawang[]" value="1 genggam" /> 1 genggam</p>
                        </div>
                        <div class="g4">
                            <p><input type="checkbox" name="bawang[]" value="2 genggam" /> 2 genggam</p>
                        </div>
                    </div>
                    <h3 style="margin-left: 24px;"><label>Topping Tambahan</label></h3>
                    <div class="pilih">
                        <div class="g1">
                            <p><input type="checkbox" name="topping[]" value="Tamago" /> Tamago</p>
                        </div>
                        <div class="g2">
                            <p><input type="checkbox" name="topping[]" value="Tempura" /> Tempura</p>
                        </div>
                        <div class="g3">
                            <p><input type="checkbox" name="topping[]" value="Smoke Beef" /> Smoke Beef</p>
                        </div>
                        <div class="g4">
                            <p><input type="checkbox" name="topping[]" value="Vegetables" /> Vegetables</p>
                        </div>
                    </div>
                    <h3 style="margin-left: 24px;"><label>Desert</label></h3>
                    <div class="pilih">
                        <div class="g1">
                            <p><input type="checkbox" name="desert[]" value="Pudding" /> Pudding</p>
                        </div>
                        <div class="g2">
                            <p><input type="checkbox" name="desert[]" value="Ice Cream" /> Ice Cream</p>
                        </div>
                    </div>
                    <h2 style="margin-left: 24px;"><input type="submit" name="submit" value="bayar" /></h2>
                </form>
            </div>
            <div class="side_right2">
                <div class="fill_side_right">
                    <div class="right_image"></div>
                    <h2 style="margin-left: 24px; margin-top: -52px; color :darkcyan">Tugas 2</h2>
                    <p style="margin-left: 24px; color:gray">
                        Pada tugas ini saya membuat sebuah aplikasi untuk memesan mie. Pelanggan dapat memesan
                        mie sesuai dengan seleranya. Pada halaman selanjutnya akan ada rekapan pemesananan dan
                        total harga yang harus dibayarkan. Setelah memasukkan jumlah uang yang dibayarkan
                        pelanggan akan mendapatkan jumlah uang kembaliannya dan pesesanan selesai.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>