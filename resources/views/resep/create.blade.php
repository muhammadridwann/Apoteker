<h1>Create Data</h1>

<form class="" action="/resep" method="post">
	<input type="text" name="NomorResep" placeholder="Nomor Resep"><br>
	<input type="date" name="TanggalResep" placeholder="Tanggal"><br>
	<input type="text" name="KodeDkt" placeholder="Kode Dokter"><br>
	<input type="text" name="KodePsn" placeholder="Kode Pasien"><br>
	<input type="text" name="KodePlk" placeholder="Kode Poliklinik"><br>
	<input type="text" name="TotalHarga" placeholder="Total Harga"><br>
	<input type="text" name="Bayar" placeholder="Bayar"><br>
	<input type="text" name="Kembali" placeholder="Kembalian"><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="Submit">
</form>