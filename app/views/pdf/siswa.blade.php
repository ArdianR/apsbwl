<table style="font-family: Arial, Helvetica, sans-serif; width:100%; border-collapse: collapse;">
	<thead>
		<tr style="background-color:#EAF2D3; font-size:1em;">
			<th style="border:1px solid #98bf21; ">No</th>
			<th style="border:1px solid #98bf21; ">Nama</th>
			<th style="border:1px solid #98bf21; " >NIS</th>
			<th style="border:1px solid #98bf21; ">Kelas</th>
			<th style="border:1px solid #98bf21; ">JK</th>
			<th style="border:1px solid #98bf21; ">TTL</th>
			<th style="border:1px solid #98bf21; ">Ayah</th>
			<th style="border:1px solid #98bf21; ">Ibu</th>
			<th style="border:1px solid #98bf21; ">Alamat</th>
			<th style="border:1px solid #98bf21; ">Walai KLS</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1 ?>
		@foreach ($data_kls as $data)
			<tr style="font-size:1em; border:1px solid #98bf21;">
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $no ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->nama_siswa ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->nis ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->kela->nama_kls ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->jk ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->ttl ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->ayah ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->ibu ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->alamat ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->guru->nama_guru ?></td>
			</tr>
			<?php $no++ ?>
		@endforeach
	</tbody>
</table>