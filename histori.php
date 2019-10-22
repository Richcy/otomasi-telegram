<h2>Data Histori Chat</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>histori chat</th>
			<th>username</th>
			<th>chat ID</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php  $ambil = $koneksi->query("SELECT * FROM chat_histori JOIN pelanggan ON chat_histori.chat_id_pelanggan = pelanggan.chat_id_pelanggan")?>
		<?php while($pecah = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['pesan_histori']; ?></td>
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