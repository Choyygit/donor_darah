<a class="btn btn-primary" href="?act=pendonor/add">Add item</a>
<table class="table">
	<tr>
		<th>#</th>
		<th>nama</th>
		<th>Alamat</th>
		<th>no hp</th>
		<th>Jenis Kelamin</th>
		<th>golongan darah</th>
		<th>Tempat/Tgl Lahir</th>
		<th>Action</th>
	</tr>
<?php
$sql = $con->query("SELECT * FROM pendonor");
$no=1;
while($row = $sql->fetch_object()) {
	echo "<tr>
			<td>".($no++)."</td>
			<td>{$row->nama}</td>
			<td>{$row->alamat}</td>
			<td>{$row->nomor_hp}</td>
			<td>";echo $row->jenis_kelamin==1?"laki":"perampuan"; echo"</td>
			<td>{$row->golongan_darah}</td>
			<td>{$row->tempat_lahir},{$row->tanggal_lahir}</td>
			
			<td>
				<a class='btn btn-sm btn-secondary' href='?act=pendonor/edit&id={$row->id}'>Edit</a>
				<a class='btn btn-sm btn-danger' href='?act=pendonor/del&id={$row->id}'>Hapus</a>
			</td>
		 </tr>";
}
?>
</table>