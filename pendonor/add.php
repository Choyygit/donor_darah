<form action="" method="post">
<div class="form-group">
	<label>nama</label>
	<input type="text" class="form-control" name="nama" required />
</div>
<div class="form-group">
	<label>gender</label><br>
	<label><input type="radio" name="gender" value="1" required > Laki-Laki</label><br>
	<label><input type="radio" name="gender" value="0" required > Perempuan</label>
</div>
<div class="form-group">
	<label>no telp</label>
	<input type="text" class="form-control" name="telp" required  />
</div>
<div class="form-group">
	<label>golongan darah</label>
	<input type="text" class="form-control" name="darah" required  />
</div>
<div class="form-group row">
	<div class="col-sm-6">
		<label>Tempat lahir</label>
		<input type="text" class="form-control" name="tmpt" required  />
	</div>
	<div class="col-sm-6">
		<label>Tanggal lahir</label>
		<input type="date" class="form-control" name="tgl" required  />
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-4">
		<label>Alamat</label>
		<input type="text" class="form-control" name="almt" required  />
	</div>
	<div class="col-sm-4">
		<label>Kecamatan</label>
		<input type="text" class="form-control" name="kec" required  />
	</div>
	<div class="col-sm-4">
		<label>Desa</label>
		<input type="text" class="form-control" name="desa" required  />
	</div>
</div>
<div class="d-block">
	<button class="btn btn-primary float-right" name="st">Simpan</button>
</div>
</form>
<?php
if(isset($_POST['st'])) {
	
	$data = "NULL,'$_POST[nama]','$_POST[tmpt]','$_POST[tgl]','$_POST[gender]','$_POST[darah]',";
	$data.= "'$_POST[telp]','$_POST[almt]','$_POST[kec]','$_POST[desa]',1";
	
	$con->query("INSERT INTO pendonor VALUES ({$data})")or die($con->error);
	header('location:?act=pendonor/view');
}