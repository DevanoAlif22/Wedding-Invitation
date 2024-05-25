<?php
if (isset($_POST['submit-rsvp'])) {
    $name = $_POST['nama-rsvp'];
    $jumlah = $_POST['jumlah'];
    $konfirmasi = $_POST['konfirmasi'];
    $noWA = $_POST['noWA'];
    header("Location:https://wa.me/62895366141915?text=Hai%2C%20saya%20$name%20ingin%20konfirmasi%20kehadiran%20pada%20undangan%20pernikahan%20digital%20bahwa%20$konfirmasi%20bersama$jumlah%20Terima%20kasih%20ya");
} else {
    echo
    "
    <script>
        window.location=history.go(-1)
    </script>
    ";
}
