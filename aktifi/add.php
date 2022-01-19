<form action="" method="post">
<div class="form-group">
	<label>pendonor</label>
	<select name="pendonor" class="form-control" required >
	<?php
	$sql = $con->query("SELECT * FROM pendonor");
	
	while($row = $sql->fetch_object()) {
		echo "<option value='{$row->id}'>{$row->nama}</option>";
	}
	?>
	</select>
</div>
<div class="form-group">
	<label>durasi</label>
	<input type="time" class="form-control" name="durasi" required  />
</div>
<div class="form-group">
	<label>volume darah</label>
	<input type="text" class="form-control" name="volume" required  />
</div>
<div class="d-block">
	<button class="btn btn-primary float-right" name="st">Simpan</button>
</div>
</form>
<?php
if(isset($_POST['st'])) {
	
	$time = date('Y-m-d H:i:s',strtotime('now'));
	
	$data = "NULL,'$_POST[pendonor]','{$time}','$_POST[durasi]','$_POST[volume]'";
	
	$con->query("INSERT INTO aktifitas_donor VALUES ({$data})")or die($con->error);
	
	header('location:?act=aktifi/view');
}