<html>

<head>
    <title>Tugas 1 PHP Ali Rosi</title>
    <!-- Memodifikasi program praktik 7 untuk menampilkan informasi tanggal dan waktu. -->
    <!-- Ali Rosi NIM 2170231033 -->
</head>

<body>
    <?php
    $tanggal = mktime(date("m"), date("d"), date("Y"));
    echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
    date_default_timezone_set('Asia/Jakarta');
    $jam = date("H:i:s");
    echo "| Pukul : <b>" . $jam . " " . "</b>";
    $a = date("H");
    if (($a >= 6) && ($a <= 11)) {
        echo "<b>, Selamat Pagi !!</b>";
    } else if (($a > 11) && ($a <= 15)) {
        echo ", Selamat Siang !!";
    } else if (($a > 15) && ($a <= 18)) {
        echo ", Selamat Sore !!";
    } else {
        echo ", <b> Selamat Malam </b>";
    }
    ?>
</body>

</html>