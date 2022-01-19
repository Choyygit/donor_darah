<a class="btn btn-primary" href="?act=aktifi/add">Add item</a>
<table class="table">
	<tr>
		<th>#</th>
		<th>pendonor</th>
		<th>waktu</th>
		<th>durasi</th>
		<th>volume</th>
		<th>Action</th>
	</tr>
<?php
$sql = $con->query("SELECT a.*,p.nama as pendonor FROM `aktifitas_donor` a,pendonor p where p.id=a.id_pendonor");
$no=1;
while($row = $sql->fetch_object()) {
	echo "<tr>
			<td>".($no++)."</td>
			<td>{$row->pendonor}</td>
			<td>{$row->waktu_donor}</td>
			<td>{$row->durasi}</td>
			<td>{$row->volume_darah}</td>
			<td>
				<a class='btn btn-sm btn-secondary' href='?act=aktifi/edit&id={$row->id}'>Edit</a>
				<a class='btn btn-sm btn-danger' href='?act=aktifi/del&id={$row->id}'>Hapus</a>
			</td>
		 </tr>";
}
?>
</table>