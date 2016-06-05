<table style="background-color:#EFFBFB;" class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Kod</th>
       <th>Ad-Soyad</th>
	    <th>Oto Markası</th>
	    <th>Plaka</th>
	    <th>Tarih</th>
	    <th>Masraf</th>
      <th>Yapılan İş</th>
	    <th>İşlem</th>
	  </tr>
	</thead>
	<tbody>
<?php
include "config.php";
$res = $conn->query("select * from ajaxtrap");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['kode']; ?></td>
      <td><?php echo $row['ad']; ?></td>
	    <td><?php echo $row['nama']; ?></td>
	    <td><?php echo $row['gender']; ?></td>
	    <td><?php echo $row['phone']; ?></td>
	    <td><?php echo $row['alamat']; ?></td>
      <td><?php echo $row['yis']; ?></td>
	    <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['kode']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Düzenle</a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['kode']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Sil</a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['kode']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['kode']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['kode']; ?>">Düzenle</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="as">Ad-Soyad</label>
    <input type="text" class="form-control" id="as<?php echo $row['kode']; ?>" value="<?php echo $row['ad']; ?>">
  </div>
  <div class="form-group">
    <label for="nm">Oto Markası</label>
    <input type="text" class="form-control" id="nm<?php echo $row['kode']; ?>" value="<?php echo $row['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="gd">Plaka</label>
    <input type="text" class="form-control" id="gd<?php echo $row['kode']; ?>" value="<?php echo $row['gender']; ?>">
  </div>
  <div class="form-group">
    <label for="pn">Tarih</label>
    <input type="text" class="form-control" id="pn<?php echo $row['kode']; ?>" value="<?php echo $row['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="al">Masraf</label>
    <input type="text" class="form-control" id="al<?php echo $row['kode']; ?>" value="<?php echo $row['alamat']; ?>">
  </div>
   <div class="form-group">
    <label for="yi">Yapılan İş</label>
    <input type="text" class="form-control" id="yi<?php echo $row['kode']; ?>" value="<?php echo $row['yis']; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        <button type="button" onclick="updatedata('<?php echo $row['kode']; ?>')" class="btn btn-primary">Kaydet</button>
      </div>
    </div>
  </div>
</div>
	    
	    </td>
	  </tr>
<?php
}
?>
	</tbody>
      </table>