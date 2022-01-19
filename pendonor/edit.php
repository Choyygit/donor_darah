<?php
$row = $con->query("SELECT * FROM pendonor WHERE id='$_GET[id]'")->fetch_object();
?>
<form action="" method="post">
<div class="form-group">
	<label>nama</label>
	<input type="text" class="form-control" name="nama" value="<?= $row->nama ?>" required />
</div>
<div class="form-group">
	<label>gender</label><br>
	<label>
		<input type="radio" name="gender" value="1" <?= $row->jenis_kelamin==1?"checked":"" ?> required > Laki</label><br>
	<label>
		<input type="radio" name="gender" value="0" <?= $row->jenis_kelamin==0?"checked":"" ?> required > Perampuan
	</label>
</div>
<div class="form-group">
	<label>no telp</label>
	<input type="text" class="form-control" name="telp" value="<?= $row->nomor_hp ?>" required  />
</div>
<div class="form-group">
	<label>golongan darah</label>
	<input type="text" class="form-control" name="darah" value="<?= $row->golongan_darah ?>" required  />
</div>
<div class="form-group row">
	<div class="col-sm-6">
		<label>Tempat lahir</label>
		<input type="text" class="form-control" name="tmpt" value="<?= $row->tempat_lahir ?>" required  />
	</div>
	<div class="col-sm-6">
		<label>Tanggal lahir</label>
		<input type="date" class="form-control" name="tgl" value="<?= $row->tanggal_lahir ?>" required  />
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-4">
		<label>Alamat</label>
		<input type="text" class="form-control" name="almt" value="<?= $row->alamat ?>" required  />
	</div>
	<div class="col-sm-4">
		<label>Kecamatan</label>
		<input type="text" class="form-control" name="kec" value="<?= $row->kecamatan ?>" required  />
	</div>
	<div class="col-sm-4">
		<label>Desa</label>
		<input type="text" class="form-control" name="desa" value="<?= $row->desa ?>" required  />
	</div>
</div>
<div class="d-block">
	<button class="btn btn-primary float-right" name="st">Simpan</button>
</div>
</form>
<?php
if(isset($_POST['st'])) {
	
	$tmp = "nama='$_POST[nama]',";
	$tmp.= "tempat_lahir='$_POST[tmpt]',";
	$tmp.= "tanggal_lahir='$_POST[tgl]',";
	$tmp.= "jenis_kelamin='$_POST[gender]',";
	$tmp.= "golongan_darah='$_POST[darah]',";
	$tmp.= "nomor_hp='$_POST[telp]',";
	$tmp.= "alamat='$_POST[almt]',";
	$tmp.= "kecamatan='$_POST[kec]',";
	$tmp.= "desa='$_POST[desa]'";
	
	$con->query("UPDATE pendonor SET {$tmp} WHERE id='$_GET[id]'")or die($con->error);
	
	header('location:?act=pendonor/view');
}