<?php
include 'koneksi_defilia.php';

// Periksa apakah data terkirim dengan benar
if(isset($_POST['ID_PETUGAS_DEFILIA']) && isset($_POST['NO_SURATMASUK_DEFILIA']) && isset($_POST['JENIS_SURATMASUK_DEFILIA']) && isset($_POST['TANGGAL_KIRIM_SURATMASUK_DEFILIA']) && isset($_POST['TANGGAL_TERIMA_SURATMASUK_DEFILIA']) && isset($_POST['PENGIRIM_SURATMASUK_DEFILIA']) && isset($_POST['PERIHAL_SURATMASUK_DEFILIA'])) {

    // Ambil data dari $_POST
    $idpetugas = $_POST['ID_PETUGAS_DEFILIA'];
    $nosuratmasuk = $_POST['NO_SURATMASUK_DEFILIA'];
    $jenissuratmasuk = $_POST['JENIS_SURATMASUK_DEFILIA'];
    $tks = $_POST['TANGGAL_KIRIM_SURATMASUK_DEFILIA'];
    $tts = $_POST['TANGGAL_TERIMA_SURATMASUK_DEFILIA'];
    $pengirimsuratmasuk = $_POST['PENGIRIM_SURATMASUK_DEFILIA'];
    $perihalsuratmasuk = $_POST['PERIHAL_SURATMASUK_DEFILIA'];

    // Lakukan query untuk menyimpan data
    $simpan = mysqli_query($conn, "INSERT INTO surat_masuk_defilia(ID_PETUGAS_DEFILIA, NO_SURATMASUK_DEFILIA, JENIS_SURATMASUK_DEFILIA, TANGGAL_KIRIM_SURATMASUK_DEFILIA, TANGGAL_TERIMA_SURATMASUK_DEFILIA, PENGIRIM_SURATMASUK_DEFILIA, PERIHAL_SURATMASUK_DEFILIA) VALUES('$idpetugas', '$nosuratmasuk', '$jenissuratmasuk', '$tks', '$tts', '$pengirimsuratmasuk', '$perihalsuratmasuk')");

    if($simpan) {
        header('location:index_suratmasuk_defilia.php?page=suratmasuk');
    } else {
        echo "Gagal menyimpan data!";
    }

} else {
    echo "Data tidak lengkap atau tidak terkirim dengan benar!";
}
?>
