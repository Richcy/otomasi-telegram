<h2>Data Pelanggan</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>username</th>
			<th>chat ID</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php  $ambil = $koneksi->query("SELECT * FROM pelanggan")?>
		<?php while($pecah = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['username_pelanggan']; ?></td>
			<td><?php echo $pecah['chat_id_pelanggan'];?></td>
			<td>
				<a href="" class = "btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>