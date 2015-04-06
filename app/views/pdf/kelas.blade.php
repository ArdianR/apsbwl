<table style="font-family: Arial, Helvetica, sans-serif; width:100%; border-collapse: collapse;">
	<thead>
		<tr style="background-color:#EAF2D3; font-size:1em;">
			<th style="border:1px solid #98bf21; ">No</th>
			<th style="border:1px solid #98bf21; ">Nama Kelas</th>
			<th style="border:1px solid #98bf21; ">Wali Kelas</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1 ?>
		@foreach ($data_kelas as $data)
			<tr style="font-size:1em; border:1px solid #98bf21;">
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $no ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->nama_kls ?></td>
				<td style="font-size:1em; border:1px solid #98bf21; padding:3px 7px 2px 7px;"><?= $data->guru->nama_guru ?></td>
			</tr>
			<?php $no++ ?>
		@endforeach
	</tbody>
</table>