<?php
if(session_status() === PHP_SESSION_NONE) {
    session_start(); // Memulai sesi jika belum aktif
}

if(isset($_SESSION['ID_PETUGAS_DEFILIA']) && $_SESSION['ID_PETUGAS_DEFILIA'] != "") { // Periksa apakah sesi telah terdefinisi dan tidak kosong
?>
<center><fieldset style="border-color:#FFFFFF; width:800px;">
    <legend align="center" style="color:#FFFFFF; font-size:18px; width:270px;"><b>INPUT DATA SURAT MASUK</b></legend>
    <form name="form1" action="input_suratmasuk_defilia.php" method="post" enctype="multipart/form-data">
    <table width="751" border="0" align="center" cellpadding="0" bgcolor="#66FF99">
    <input type="hidden" name="ID_PETUGAS_DEFILIA" value= <?php echo $_SESSION['ID_PETUGAS_DEFILIA']; ?> >
    <tr>
      <th width="381" scope="col">NO SURAT MASUK</th>
      <td width="356" scope="col"><label>
        <input type="text" name="NO_SURATMASUK_DEFILIA" id="nosuratmasuk">
      </label></td>
    </tr>
    <tr>
      <th>JENIS SURAT MASUK</th>
      <td><label>
        <select name="JENIS_SURATMASUK_DEFILIA" id="jenissuratmasuk">
        <option>--PILIH JENIS SURAT MASUK--</option>
        <option value="SURAT PRIBADI">SURAT PRIBADI</option> 
        <option value="SURAT DINAS">SURAT DINAS</option>
        <option value="SURAT NIAGA">SURAT NIAGA</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <th>TANGGAL KIRIM SURAT MASUK </th>
      <td><label><input type="date" name="TANGGAL_KIRIM_SURATMASUK_DEFILIA" id="tks"></label></td>
    </tr>
    <tr>
      <th>TANGGAL TERIMA SURAT MASUK </th>
      <td><label><input type="date" name="TANGGAL_TERIMA_SURATMASUK_DEFILIA" id="tts"></label></td>
    </tr>
    <tr>
      <th>PENGIRIM SURAT MASUK</th>
      <td><label>
        <input type="text" name="PENGIRIM_SURATMASUK_DEFILIA" id="pengirimsuratmasuk">
      </label></td>
    </tr>
    <tr>
      <th>PERIHAL SURAT MASUK</th>
      <td><label>
        <input type="text" name="PERIHAL_SURATMASUK_DEFILIA" id="perihalsuratmasuk">
      </label></td>
    </tr>
    <tr>
    <th></th>
    <td><label>
    <input type="submit" name="button" id="button" value="SIMPAN"></label></td>
    </tr>
  </table>
    </form><br>
    </fieldset></center></br>
<fieldset style="border-color:#FFFFFF;">
    <legend align="center" style="color:#FFFFFF; font-size:18px; width:220px;"><b>DATA SURAT MASUK</b></legend>
    
    <form action="index_suratmasuk_defilia.php?page=suratmasuk" method="post">
    <table width="400" border="0" align="center">
    <tr bgcolor="#00CC00">
      <td width="148"><div align="center"><strong>CARI DATA SURAT MASUK</strong></div></td>
      <td width="153"><label>
    <input type="text" name="?page=suratmasuk">
    </label></td>
    </tr>
    <tr bgcolor="#FFFF00">
      <td bgcolor="#00FF00"></td>
      <td bgcolor="#00FF00"><label>
    <input type="submit" value="Cari">
     </label></td>
    </tr>
  </table>
</form>

<table align="center" width="1150" border="1" bgcolor="#00CC00">
          <tr height="50px">
    <th width="300" scope="col">NO SURAT MASUK</th>
    <th width="300" scope="col">NAMA PETUGAS</th>
    <th width="300" scope="col">JENIS SURAT MASUK</th>
    <th width="500" scope="col">TANGGAL KIRIM SURAT MASUK</th>
    <th width="400" scope="col">TANGGAL TERIMA SURAT MASUK</th>
    <th width="500" scope="col">PENGIRIM SURAT MASUK</th>
    <th width="600" scope="col">PERIHAL SURAT MASUK</th>
    <th width="300" scope="col">EDIT</th>
    <th width="300" scope="col">DELETE</th>
         </tr>
</fieldset>

     <?php
        include'koneksi_defilia.php';
        if(isset($_POST['?page=suratmasuk'])){
        $cari = $_POST['?page=suratmasuk'];
        $ambil = mysqli_query($conn, "select * from surat_masuk_defilia where NO_SURATMASUK_DEFILIA like '%".$cari."%'");              
    }else{
        $ambil=mysqli_query($conn, "SELECT * From surat_masuk_defilia");
    }
        while($array=mysqli_fetch_array($ambil))
        {
        ?>
        
  <tr bgcolor="#66FF99" height="5px">
  <td><div align="center"><?php echo"$array[NO_SURATMASUK_DEFILIA]";?></div></td>
    
    <td><div align="center"><?php 
            $amb=mysqli_query($conn, "SELECT * From petugas_defilia where ID_PETUGAS_DEFILIA='$array[ID_PETUGAS_DEFILIA]'");
            $arr=mysqli_fetch_array($amb);
            echo "$arr[NAMA_PETUGAS_DEFILIA]";
    ?></div></td>
    
    <td><div align="center"><?php echo"$array[JENIS_SURATMASUK_DEFILIA]";?></div></td>
    <td><div align="center"><?php echo"$array[TANGGAL_KIRIM_SURATMASUK_DEFILIA]";?></div></td>
    <td><div align="center"><?php echo"$array[TANGGAL_TERIMA_SURATMASUK_DEFILIA]";?></div></td>
    <td><div align="center"><?php echo"$array[PENGIRIM_SURATMASUK_DEFILIA]";?></div></td>
    <td><div align="center"><?php echo"$array[PERIHAL_SURATMASUK_DEFILIA]";?></div></td>
    <td width="50"><div align="center"><a href="form_edit_suratmasuk_defilia.php?NO_SURATMASUK_DEFILIA=<?php echo $array['NO_SURATMASUK_DEFILIA']; ?>"><img src="user.png" style="width:20px; height:20px;"/></a></div></td>
    <td width="56"><div align="center"><a href="delete_suratmasuk_defilia.php?NO_SURATMASUK_DEFILIA=<?php echo $array['NO_SURATMASUK_DEFILIA']; ?>"><img src="delete.png" style="width:20px; height:20px;"/></a></div></td>
  </tr>
<?php
  }
  ?>
</table>
<?php
} else {
    echo "Anda harus login untuk mengakses halaman ini."; // Tampilkan pesan jika pengguna belum login
}
?>
