

<table style="font-family: Arial, Helvetica, sans-serif; width:100%; border-collapse: collapse;">
	<thead>
		<tr style="background-color:#EAF2D3; font-size:1em;">
			<th style="border:1px solid #98bf21; ">No</th>
			<th style="border:1px solid #98bf21; ">Nama</th>
			<th style="border:1px solid #98bf21; ">NIY</th>
			<th style="border:1px solid #98bf21; ">NUPTK</th>
			<th style="border:1px solid #98bf21; ">JK</th>
			<th style="border:1px solid #98bf21; ">TTL</th>
			<th style="border:1px solid #98bf21; ">Pend. Trkr</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1 ?>
		@foreach ($data_guru as $data)
			<tr style="font-size:1em; border:1px solid #98bf21;">
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $no ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->nama_guru ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->niy ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->nuptk ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->jk ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->ttl ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->pendidikan ?></td>
			</tr>
			<?php $no++ ?>
		@endforeach
	</tbody>
</table>