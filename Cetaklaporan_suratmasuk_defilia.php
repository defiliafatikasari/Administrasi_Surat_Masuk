<html>
<head>
<title>REPORT/CETAK DATA SURAT MASUK</title>
</head>
<body background="bg.jpg">
<fieldset>
    <legend align="center" style="font-size:18px;"><b>DATA SURAT MASUK</b></legend>
    <table align="center" width="1150" border="1" bgcolor="#00FF66">
        <tr>
            <th width="400" scope="col">NO SURAT MASUK</th>
            <th width="300" scope="col">JENIS SURAT MASUK</th>
            <th width="500" scope="col">TANGGAL KIRIM SURAT MASUK</th>
            <th width="400" scope="col">TANGGAL TERIMA SURAT MASUK</th>
            <th width="500" scope="col">PENGIRIM SURAT MASUK</th>
            <th width="600" scope="col">PERIHAL SURAT MASUK</th>
        </tr>
    <?php
    include 'koneksi_defilia.php';
    $ambil = mysqli_query($conn, "SELECT * FROM surat_masuk_defilia");
    while ($array = mysqli_fetch_array($ambil)) {
    ?>
        <tr>
            <td><div align="center"><?php echo $array['NO_SURATMASUK_DEFILIA']; ?></div></td>
            <td><div align="center"><?php echo $array['JENIS_SURATMASUK_DEFILIA']; ?></div></td>
            <td><div align="center"><?php echo $array['TANGGAL_KIRIM_SURATMASUK_DEFILIA']; ?></div></td>
            <td><div align="center"><?php echo $array['TANGGAL_TERIMA_SURATMASUK_DEFILIA']; ?></div></td>
            <td><div align="center"><?php echo $array['PENGIRIM_SURATMASUK_DEFILIA']; ?></div></td>
            <td><div align="center"><?php echo $array['PERIHAL_SURATMASUK_DEFILIA']; ?></div></td>
        </tr>
    <?php
    }
    ?>
    </table>
</fieldset>
<script>
    window.onload = function() {
        window.print();
    }
</script>
</body>
</html>
