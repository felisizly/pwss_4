<?php
    $query=mysql_query("
        SELECT tbl_nama.nama_depan, tbl_nama.nama_belakang, tbl_kota.nama_kota 
        FROM tbl_nama
        JOIN tbl_kota ON tbl_kota.id_nama = tbl_nama.id
    ");
?> 
   <table border="1">
      <tr>
         <td>Nama Depan</td>
         <td>Nama Belakang</td>
         <td>Kota</td>
       </tr>
       <?php
          while($data=mysql_fetch_array($query)){
       ?>
       <tr>
         <td><?php echo $data['nama_depan'];?></td>
         <td><?php echo $data['nama_belakang'];?></td>
         <td><?php echo $data['nama_kota'];?></td>
       </tr>
       <?php } ?>
    </table>