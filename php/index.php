<?php
require 'functions.php';
$wedding = query("SELECT * FROM wish");


if (isset($_POST["submit-ucapan"])) {
    $orang = htmlspecialchars($_POST["orang"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
    $conn = mysqli_connect("localhost", "root", "", "project1wedding");

    $query = "INSERT INTO wish VALUES
    ('','$orang','$pesan')";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo " 
            <script>
                alert('Data Anda Berhasil Di Tambahkan!')
            </script> ";
        header("location:index.php?nama=Selamat%20datang%20kembali");
    } else {
        echo " 
            <script>
                alert('Data Anda Gagal Di Tambahkan!')
            </script> ";
    }
}

?>

<!DOCTYPE html>
<html lang=”en”>

<head>
    <meta charset=”UTF-8″>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caroline & Alfian</title>
    <link rel="stylesheet" href="../css/bagus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inconsolata:wght@200&family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <!-- bagian 1 awal - menu utama -->
    <div class="start">
        <div class="invit" data-aos="flip-right" data-aos-duration="2000">
            <h2>Caroline & Alfian</h2>
            <p>Dear</p>
            <form action="index.php" method="get">
                <h4><?php echo $_GET["nama"] ?></h4>
            </form>
            <button class="open-invit">OPEN INVITATION</button>
            <div class="date">
                <div>
                    <h1 id="hari"></h1>
                </div>
                <div>
                    <h1 id="jam"></h1>
                </div>
                <div>
                    <h1 id="menit"></h1>
                </div>
                <div>
                    <h1 id="detik"></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- bagian 1 awkhir - menu utama -->

    <!-- bagian 2 awal - menu utama -->

    <div class="button-musik">
        <img class="player" src="../img/play-button.png" alt="">
        <img class="pauser" src="../img/pause.png" alt="">
    </div>
    <audio class="lagu" controls>
        <source src="../mp3/beutiful2.mp3" type="audio/mpeg">

    </audio>
    <div class="bagian2">
        <div class="start2">
            <p>THE WEDDING CEREMONY OF</p>
            <h1>Caroline</h1>
            <h1>&</h1>
            <h1>Alfian</h1>
            <p>Oct/02/2022</p>
        </div>
    </div>
    <!-- bagian 2 akhir - menu utama -->

    <!-- bagian 3 awal - menu utama -->
    <div class="bagian3">

        <div class="start3" data-aos="zoom-in" data-aos-duration="2000">
            <img src="../img/bunga1.png" alt="">
            <p>Dan di antara tanda-tanda (kebesaran)-Nya ialah
                Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri,
                agar kamu cenderung dan merasa tenteram kepadanya,
                dan Dia menjadikan di antaramu rasa kasih dan sayang</p>
            <h2>Ar-Rum Ayat 21</h2>
        </div>
        <div class="start3-2" data-aos="zoom-in" data-aos-duration="2000">
            <img src="../img/foto4.jpg" alt="">
        </div>

    </div>
    <!-- bagian 3 akhir - menu utama -->
    <!-- bagian 4 awal - menu utama -->
    <div class="bagian4">
        <h3 class="judul">The Honor of your presence is requested.<br>At the mariage of</h3>
        <div class="isibagian4">
            <div data-aos="fade-left" data-aos-duration="2000" class="bagian4-baris1">
                <img class="foto-bagian4" src="../img/mau foto 5.png" alt="">
                <h1>Caroline Shelina S.M</h1>
                <p>Putri Ketiga Dari</p>
                <p>Bapak Abdul Haris S.H & Ibu Irma Ariani S.Pd</p>
                <button>
                    <a class="ig-name" href="https://www.instagram.com/devanoalif_/"> <img class="ig" style="width: 10%; margin-right:20px" src="../img/instagram.png" alt="">Caroline_</a>


                </button>
            </div>
            <div data-aos="fade-right" data-aos-duration="2000" class="bagian4-baris2">
                <img class="foto-bagian4" src="../img/mau foto 6.png" alt="">
                <h1>Alfian Ardi Pramadana S.T</h1>
                <p>Putra Pertam Dari</p>
                <p>Bapak Muhammad Ali S.H & Ibu Ardianti Sari S.Pd</p>
                <button>
                    <a class="ig-name" href="https://www.instagram.com/devanoalif_/"> <img class="ig" style="width: 10%; margin-right:20px" src="../img/instagram.png" alt="">Alfiandana_</a>


                </button>
            </div>
        </div>

    </div>
    <!-- bagian 4 akhir - menu utama -->

    <!-- bagian 5 awal - menu utama -->
    <div class="bagian5">
        <div class="date2" data-aos="zoom-in" data-aos-duration="2000">
            <h1>SAVE</h1>
            <p>The</p>
            <h1>DATE</h1>
        </div>
        <div class="date3" data-aos="zoom-in" data-aos-duration="2000">
            <h1>OCT</h1>
            <div class="garis">.</div>
            <h1>02</h1>
            <div class="garis">.</div>
            <h1>2022</h1>
        </div>
        <div class="date4" data-aos="zoom-in" data-aos-duration="2000">
            <img src="../img/bunga2.png" alt="">
        </div>
        <div class="date5" data-aos="zoom-in" data-aos-duration="2000">
            <p>In The arithmetic of love, one plus one equals everything,<br> and two minus one equals nothing.</p>
        </div>
        <div class="date6" data-aos="zoom-in" data-aos-duration="2000">
            <div class="waktu">
                <h1 id="hari2"></h1>
                <h1 id="jam2"></h1>
                <h1 id="menit2"></h1>
                <h1 id="detik2"></h1>
            </div>
            <div class="waktu2">
                <h1>HARI</h1>
                <h1>JAM</h1>
                <h1>MENIT</h1>
                <h1>DETIK</h1>
            </div>
        </div>
    </div>
    <!-- bagian 5 akhir - menu utama -->
    <!-- bagian 6 awal - menu utama -->

    <div class="halaman6">
        <div class="hal6-1">
            <img data-aos="flip-right" data-aos-duration="3000" src="../img/bukitmas1.jpg" alt="">
            <div data-aos="flip-left" data-aos-duration="3000" class="akad">
                <h1>Akad Nikah</h1>
                <h3>MINGGU, 02 OKTOBER 2022</h3>
                <div class="garis2"></div>
                <p>PUKUL : 08.00 WIB S/D SELESAI</p>
                <h3>GEDUNG NOTREDAME WISATA BUKIT MAS 2,<br> LIDAH WETAN, SURABAYA</h3>
                <button class="map"><a href="https://goo.gl/maps/WWDc8eWsbUEaWmLb6">Google Maps</a></button>
            </div>
        </div>
        <div class="hal6-1">
            <div data-aos="flip-right" data-aos-duration="3000" class="akad">
                <h1>Resepsi</h1>
                <h3>MINGGU, 02 OKTOBER 2022</h3>
                <div class="garis2"></div>
                <p>PUKUL : 08.00 WIB S/D SELESAI</p>
                <h3>GEDUNG NOTREDAME WISATA BUKIT MAS 2,<br> LIDAH WETAN, SURABAYA</h3>
                <button class="map"><a href="https://goo.gl/maps/WWDc8eWsbUEaWmLb6">Google Maps</a></button>
            </div>
            <img data-aos="flip-left" data-aos-duration="3000" src="../img/bukitmase.jpg" alt="">
        </div>
    </div>
    <!-- bagian 6 akhir - menu utama -->

    <!-- bagian 7 awal - menu utama -->
    <div class="halaman7">

        <div class="hal7-1" data-aos="zoom-in-down" data-aos-duration="2000">
            <h1>WE FOUND A LOVE</h1>
            <p>What counts in making a happy marriage is not so much how compatible you are, but how you deal with incompatibility.A great marriage is not when the perfect couple comes together. it is when imperfect couple learn to enjoy their difference.</p>
        </div>
        <div id="yt" class="contenyt" data-aos="zoom-in-down" data-aos-duration="2000">
            <!-- <iframe class="vid" src="https://www.youtube-nocookie.com/embed/eru_H6-7CSw?autoplay=1&rel=0&fs=0" width="560" height="315" title="Cinematic Prewedding, Dina & Aceng | ZH Picture" frameborder="0"></iframe> -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/eru_H6-7CSw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="hal7-2" data-aos="zoom-in-down" data-aos-duration="2000">
            <div class="hal7-img">
                <img src="../img/bukitmasss.jpg" alt="">
                <img src="../img/foto1.jpg" alt="">
                <img src="../img/story4.jpg" alt="">
                <img src="../img/foto8.jpg" alt="">
                <img src="../img/stori1.jpg" alt="">
                <img src="../img/story3.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- bagian 7 akhir - menu utama -->

    <!-- bagian 8 awal - menu utama -->

    <div class="halaman8">
        <div class="kata" data-aos="fade-down" data-aos-duration="2000">
            <h1>STORY OF LOVE</h1>
            <p>Marriage is the golden ring in <br> a chain whose beginning <br> is a glanne and whose ending is eternity </p>
        </div>

        <div class="containerstory" data-aos="fade-down" data-aos-duration="2000">
            <div class="story">
                <img src="../img/story4.jpg" alt="">
                <h2>First Meet</h2>
                <p>Kisah ini berawal dari pertemuankita dibulan mei tahun 2018.</p>
            </div>
            <div class="story">
                <img src="../img/story3.jpg" alt="">
                <h2>Relationship</h2>
                <p>Setelah menjalani hubungan selama 3 tahun, kita berkomitmen untuk masa depan hubungan kita</p>

            </div>
            <div class="story">
                <img src="../img/stori1.jpg" alt="">
                <h2>Engagement</h2>
                <p>Pada tanggal 02 Januari 2022 Alfian memberanikan diri membawa keluarganya bersilahturahmi ke rumah saya, dan meminta saya untuk menikah dengannya.</p>

            </div>
        </div>
    </div>
    <!-- bagian 8 akhir - menu utama -->

    <!-- bagian 10 awal - menu utama -->

    <div class="halaman10">
        <div class="wish" data-aos="flip-right" data-aos-duration="2000">
            <h1>Wedding Wish</h1>
            <p>Kirimkan Doa & Ucapan Kepada Kedua Mempelai</p>
            <div class="wish2">
                <form method="POST" action="">
                    <input type="text" class="nama" placeholder="Nama" name="orang">
                    <input type="text" class="pesan" placeholder="pesan" name="pesan" maxlength="35">
                    <button class="wish-button" name="submit-ucapan"> Kirimkan Ucapan</button>
                    <div class="batas"></div>
                </form>
                <div class="semua-pesan">
                    <?php foreach ($wedding as $ws) : ?>
                        <div class="pesan2">
                            <img src="../img/wa1.jpeg" alt="">
                            <div class="isi-pesan">
                                <h5><?php echo $ws["orang"]; ?></h5>
                                <p><?php echo $ws["pesan"]; ?></p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div class="rsvp" data-aos="flip-left" data-aos-duration="2000">
            <h1>RSVP</h1>
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi
                kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir
                untuk memberikan doa restu kepada kedua mempelai
                atas kehadiran serta doa restu, kami ucapkan terimakasih</p>
            <div class="rsvp2">
                <form action="send.php" method="post" target="_blank">
                    <input type="text" class="nama" placeholder="Nama contoh:'Devano'" name="nama-rsvp" autocomplete="off">
                    <input type="text" class="jumlah" placeholder="jumlah contoh:'3 Orang'" name="jumlah" autocomplete="off">
                    <input type="text" class="konfirmasi" placeholder="konfirmasi contoh:'Ya, saya akan hadir'" name="konfirmasi" autocomplete="off">
                    <input type="hidden" name="noWA" value="62895366141915">
                    <button class="rsvp-button" name="submit-rsvp"> Reservasi Via Whatsapp</button>
                </form>
            </div>
        </div>
    </div>
    <!-- bagian 10 akhir - menu utama -->


    <!-- bagian 9 awal - menu utama -->
    <div class="halaman9">
        <div class="judul">
            <h1>Our Gallery</h1>
        </div>

        <div class="bungkus-gallery">
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img1">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img2">
                <div>
                    <p href="">Judul foto</p>
                </div>


            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img3">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img4">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img5">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img6">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img7">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" class="gallery img8">
                <div>
                    <p href="">Judul foto</p>
                </div>

            </div>

            <div class="end" data-aos="zoom-in" data-aos-duration="1000">
                <p>Kesan Yang mendalam akan terukir dihati kami,serta diiringi ucapan terima kasih yang tulus,Kepada Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan Doa restu</p>
                <h1>Terima Kasih</h1>
            </div>
        </div>
    </div>
    <!-- bagian 9 akhir - menu utama -->

    <!-- bagian 10 awal - menu utama -->
    <div class="halaman11">
        <div class="start4" data-aos="zoom-in" data-aos-duration="1000">
            <p>JOIN OUR WEDDING</p>
            <h1>Caroline</h1>
            <h1>&</h1>
            <h1>Alfian</h1>
            <p>Oct/02/2022</p>
        </div>
    </div>
    <div class="halaman12">
        <div class="copyright">
            <p>Create Website BY DEVANO ALIF </p>
            <a href="https://www.instagram.com/devanoalif_/"><img src="../img/ig.png" alt=""></a>
            <a href="https://wa.me/62895366141915?text=Hai"><img src="../img//whatsapp.png" alt=""></a>
        </div>
    </div>
    <!-- bagian 10 akhir - menu utama -->


    <!-- js liblary -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="../js/script2.js"></script>
</body>

</html>