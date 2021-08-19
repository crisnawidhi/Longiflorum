
<?php 
    include "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tabelbarangs WHERE no='$_POST[no]'"));
    if ($cek_user > 0) {
        echo 'Nomor Barang Sudah Ada <a href="index.php">KEMBALI</a>';
              exit();
    }
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tabelbarangs WHERE name='$_POST[name]'"));
    if ($cek_user > 0) {
        echo 'Nama Barang ini sudah ada <a href="index.php">KEMBALI</a>';
              exit();
    }

    else {

        mysql_query("INSERT INTO tabelbarangs (no, name, warna, jml)
        VALUES (NULL, '$_POST[name]', '$_POST[warna]', '$_POST[jml]')");
    
        echo 'Barang Terdaftar, cek <a href="barang.php">DISINI</a>';
              exit();
    }
?>