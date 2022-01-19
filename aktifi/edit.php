<?php
$dt = $con->query("SELECT * FROM aktifitas_donor WHERE id='$_GET[id]'")->fetch_object();
?>

<form action="" method="post">
<div class="form-group">
	<label>pendonor</label>
	<select name="pendonor" class="form-control" required >
	<?php
	$sql = $con->query("SELECT * FROM pendonor");
	
	while($row = $sql->fetch_object()) {
		
		echo "<option value='{$row->id}' ";
		
		echo $dt->id_pendonor == $row->id? "selected ":"";
		
		echo ">{$row->nama}</option>";
	}
	?>
	</select>
</div>
<div class="form-group">
	<label>durasi</label>
	<input type="time" class="form-control" name="durasi" value="<?= $dt->durasi ?>" required  />
</div>
<div class="form-group">
	<label>volume darah</label>
	<input type="text" class="form-control" name="volume" value="<?= $dt->volume_darah ?>" required  />
</div>
<div class="d-block">
	<button class="btn btn-primary float-right" name="st">Simpan</button>
</div>
</form>
<?php
if(isset($_POST['st'])) {
	
	$data = "id_pendonor='$_POST[pendonor]', durasi='$_POST[durasi]',volume_darah='$_POST[volume]'";
	
	$con->query("UPDATE aktifitas_donor SET {$data} WHERE id='$_GET[id]'")or die($con->error);
	
	header('location:?act=aktifi/view');
}