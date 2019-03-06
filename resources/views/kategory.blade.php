<html>
<head>
	<title>Kategori</title>
</head>
    
   <style>
body {
    background-color: salmon
}
</style>
<br>
    <center>
	    <h2>Daftar Kategori Film</h2>
        <style type="text/css">
        h2 {
        background-color:black;
        color:white;
        }
    </style>
    </center>
 
	<a href="kategory/tambah"> + Tambah Film Baru</a>
	
	<br/>
	<br/>
 
	<table border="1" width="100%">
		<tr>
			<th>ID</th>
			<th>Nama Kategori</th>
			<th>SLUG</th>
			<th>Tanggal Input</th>
            <th>Created At</th>
            <th>Updated At</th>
			<th>Opsi</th>
		</tr>
		@foreach($kategory as $kategory)
		<tr>
            <td>{{ $kategory->id }}</td>
			<td>{{ $kategory->nama_kategory }}</td>
			<td>{{ $kategory->slug }}</td>
			<td>{{ $kategory->tanggal_input_data }}</td>
            <td>{{ $kategory->created_at }}</td>
            <td>{{ $kategory->updated_at }}</td>
			<td>
				<a href="/kategory/edit/{{ $kategory->id }}">Edit</a>
				|
				<a href="/kategory/hapus/{{ $kategory->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <center>
	    <h2>Ema Yunian Apriliyanti</h2>
        <style type="text/css">
        h2 {
        background-color:black;
        color:white;
        }
    </style>
    </center>
</body>
</html>