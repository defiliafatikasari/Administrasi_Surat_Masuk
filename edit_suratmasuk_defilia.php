<?php
include 'koneksi_defilia.php';

// Periksa apakah kunci array terdefinisi
if(isset($_POST['JENIS_SURATMASUK_DEFILIA']) && isset($_POST['NO_SURATMASUK_DEFILIA']) && isset($_POST['TANGGAL_KIRIM_SURATMASUK_DEFILIA']) && isset($_POST['TANGGAL_TERIMA_SURATMASUK_DEFILIA']) && isset($_POST['PENGIRIM_SURATMASUK_DEFILIA']) && isset($_POST['PERIHAL_SURATMASUK_DEFILIA'])) {
    $jenissuratmasuk = $_POST['JENIS_SURATMASUK_DEFILIA'];
    $nosuratmasuk = $_POST['NO_SURATMASUK_DEFILIA'];
    $tks = $_POST['TANGGAL_KIRIM_SURATMASUK_DEFILIA'];
    $tts = $_POST['TANGGAL_TERIMA_SURATMASUK_DEFILIA'];
    $pengirimsuratmasuk = $_POST['PENGIRIM_SURATMASUK_DEFILIA'];
    $perihalsuratmasuk = $_POST['PERIHAL_SURATMASUK_DEFILIA'];

    // Lakukan update data menggunakan mysqli_query()
    $query = "UPDATE surat_masuk_defilia SET JENIS_SURATMASUK_DEFILIA='$jenissuratmasuk', TANGGAL_KIRIM_SURATMASUK_DEFILIA='$tks', TANGGAL_TERIMA_SURATMASUK_DEFILIA='$tts', PENGIRIM_SURATMASUK_DEFILIA='$pengirimsuratmasuk', PERIHAL_SURATMASUK_DEFILIA='$perihalsuratmasuk' where NO_SURATMASUK_DEFILIA='$nosuratmasuk'";
    if(mysqli_query($conn, $query)) {
        header('location:index_suratmasuk_defilia.php?page=suratmasuk');
    } else {
        echo "Gagal melakukan update data: " . mysqli_error($conn);
    }
} else {
    echo "Ada masalah dengan data yang dikirim.";
}
?>
