<h1>Edit Data</h1>

<form class="" action="/resep{{$resep->NomorResep}}" method="post">
	<input type="text" name="NomorResep" value="{{$resep->NomorResep}}" placeholder="Nomor Resep"><br>
	<input type="date" name="TanggalResep" value="{{$resep->TanggalResep}}" placeholder="Tanggal"><br>
	<input type="text" name="KodeDkt" value="{{$resep->KodeDkt}}" placeholder="Kode Dokter"><br>
	<input type="text" name="KodePsn" value="{{$resep->KodePsn}}" placeholder="Kode Pasien"><br>
	<input type="text" name="KodePlk" value="{{$resep->KodePlk}}" placeholder="Kode Poliklinik"><br>
	<input type="text" name="TotalHarga" value="{{$resep->TotalHarga}}" placeholder="Total Harga"><br>
	<input type="text" name="Bayar" value="{{$resep->Bayar}}" placeholder="Bayar"><br>
	<input type="text" name="Kembali" value="{{$resep->Kembali}}" placeholder="Kembalian"><br>
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="Submit">
</form>