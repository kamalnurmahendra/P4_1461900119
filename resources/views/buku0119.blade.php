<!DOCTYPE html>
<html>
<head>
	<title>Tugas Aktivitas 4</title>
</head>
<body>

	<div class>
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
		</center>
		
		<a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Tahun Terbit</th>
				</tr>
			</thead>
            <tbody>
				@php $i=1 @endphp
				@foreach($book as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->judul}}</td>
					<td>{{$s->tahun_terbit}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>

