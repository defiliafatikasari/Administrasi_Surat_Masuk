<?php
include 'koneksi_defilia.php';

$nama = $_POST['NAMA_PETUGAS_DEFILIA'] ?? '';
$password = $_POST['PASSWORD_DEFILIA'] ?? '';

$ceklogin = $conn->query("SELECT * FROM petugas_defilia WHERE NAMA_PETUGAS_DEFILIA='$nama' AND PASSWORD_DEFILIA='$password'");

if ($ceklogin) {
    $cekdata = $ceklogin->fetch_assoc();
    $periksa = $ceklogin->num_rows;

    session_start();
    if ($periksa != 0) {
        $_SESSION['ID_PETUGAS_DEFILIA'] = $cekdata['ID_PETUGAS_DEFILIA'];
        $_SESSION['NAMA_PETUGAS_DEFILIA'] = $cekdata['NAMA_PETUGAS_DEFILIA'];
        $_SESSION['PASSWORD_DEFILIA'] = $cekdata['PASSWORD_DEFILIA'];
        header('location:index_suratmasuk_defilia.php?page=home');
        exit;
    } else {
        ?>
        <script language="javascript">
            alert('USERNAME/PASSWORD ANDA SALAH COBA LAGI !!!!');
            history.go(-1);
        </script>
        <?php
    }
} else {
    echo "Error: " . $conn->error;
}
?>
