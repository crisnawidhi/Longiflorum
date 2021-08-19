<style>
    table, th, td {
  border: 1px solid black;
}
</style>
<?php

$hasil = mysql_fetch_array($query);
require("koneksi.php");
$unamex = $hasil['username'];
$tamvanz = mysql_query("SELECT * FROM tabelbarangs");
$beb = mysql_num_rows($tamvanz);
?>
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Warna</th>
                      <th>Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
while($row = mysql_fetch_array($tamvanz))
  { ?>
                    <tr>
                      <td><?php echo $row['no']; ?></td>
                      <td><span><?php echo $row['name']; ?></span></td>
                      <td><span><?php echo $row['warna']; ?></span></td>
                      <td><?php echo $row['jml']; ?></td>
                    </tr>
<?php  }
mysql_close;
?>
                    </tbody>
                  </table>
                  <a href="index.php"><button>Kembali atau Isi Data lagi</button></a>