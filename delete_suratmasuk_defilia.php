<?php
session_start();
include 'koneksi_defilia.php';
mysqli_query($conn, "DELETE FROM surat_masuk_defilia WHERE NO_SURATMASUK_DEFILIA='$_GET[NO_SURATMASUK_DEFILIA]'");
?>
<script language="JavaScript">
alert("ANDA YAKIN AKAN DIHAPUS");
document.location = "index_suratmasuk_defilia.php?page=suratmasuk";
</script>
