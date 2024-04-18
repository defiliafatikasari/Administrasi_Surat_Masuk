<?php
include 'koneksi_defilia.php';

// Periksa apakah NO_SURATMASUK_DEFILIA terdefinisi dalam $_GET
if(isset($_GET['NO_SURATMASUK_DEFILIA'])) {
    $nosuratmasuk = $_GET['NO_SURATMASUK_DEFILIA'];
    $ambil = mysqli_query($conn, "SELECT * FROM surat_masuk_defilia WHERE NO_SURATMASUK_DEFILIA='$nosuratmasuk'");

    // Periksa apakah data ditemukan
    if(mysqli_num_rows($ambil) > 0) {
        $array = mysqli_fetch_array($ambil);
        $surat = array('SURAT PRIBADI','SURAT DINAS','SURAT NIAGA');
    } else {
        echo "Data tidak ditemukan!";
        exit; // Keluar dari skrip jika data tidak ditemukan
    }
} else {
    echo "NO_SURATMASUK_DEFILIA tidak terdefinisi!";
    exit; // Keluar dari skrip jika NO_SURATMASUK_DEFILIA tidak terdefinisi
}
?>
<head>
    <title>WEBSITE DEFILIA FATIKASARI</title>
</head>
<body background="bg.jpg">
<fieldset style="border-color:#FFFFFF;">
    <legend align="center" style="font-size:18px;"><b>EDIT DATA SURAT MASUK</b></legend>
    <form name="form1" method="post" action="edit_suratmasuk_defilia.php" enctype="multipart/form-data">
    <input type="hidden" name="NO_SURATMASUK_DEFILIA" value="<?php echo $nosuratmasuk; ?>" /> 
    
    <table width="984" border="0" align="center" cellpadding="0" bgcolor="#66FF99">
    <tr>
      <th width="490" scope="col">NO SURAT MASUK</th>
      <td width="488" scope="col"><label> 
        <input type="text" name="NO_SURATMASUK_DEFILIA" value="<?php echo $array['NO_SURATMASUK_DEFILIA']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <th>JENIS SURAT MASUK</th>
      <td><label>
        <select name="JENIS_SURATMASUK_DEFILIA">
        <?php
        foreach ($surat as $s){
            echo "<option value='$s'";
            if($array['JENIS_SURATMASUK_DEFILIA'] == $s){ echo " selected='selected'";}
            echo ">$s</option>"; 
        }
        ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <th>TANGGAL KIRIM SURAT MASUK </th>
      <td><label><input type="date" name="TANGGAL_KIRIM_SURATMASUK_DEFILIA" value="<?php echo $array['TANGGAL_KIRIM_SURATMASUK_DEFILIA']; ?>" /></label></td>
    </tr>
    <tr>
      <th>TANGGAL TERIMA SURAT MASUK </th>
      <td><label><input type="date" name="TANGGAL_TERIMA_SURATMASUK_DEFILIA" value="<?php echo $array['TANGGAL_TERIMA_SURATMASUK_DEFILIA']; ?>" /></label></td>
    </tr>
    <tr>
      <th>PENGIRIM SURAT MASUK </th>
      <td><label>
        <input type="text" name="PENGIRIM_SURATMASUK_DEFILIA" value="<?php echo $array['PENGIRIM_SURATMASUK_DEFILIA']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <th>PERIHAL SURAT MASUK </th>
      <td><label>
        <input type="text" name="PERIHAL_SURATMASUK_DEFILIA" value="<?php echo $array['PERIHAL_SURATMASUK_DEFILIA']; ?>"/>
      </label></td>
    </tr>
    <tr>
    <th></th>
    <td><label>
    <input type="submit" name="button" value="SIMPAN PERUBAHAN"></label></td>
    </tr>
  </table>
    </form>
</fieldset></body><br>
<div align="center">
  <a href="index_suratmasuk_defilia.php?page=suratmasuk"><img src="left.png" style="width:30px; height:30px;"/></a>
  </div>
