<h1>Edit Data</h1>

<form class="" action="/dokter{{$dokter->KodeDkt}}" method="post">
	<input type="text" name="KodeDkt" value="{{$dokter->KodeDkt}}" placeholder="Kode Dokter"><br>
	<input type="text" name="NamaDkt" value="{{$dokter->NamaDkt}}" placeholder="Nama Dokter"><br>
	<input type="text" name="Spesialis" value="{{$dokter->Spesialis}}" placeholder="Spesialis"><br>
	<input type="text" name="AlamatDkt" value="{{$dokter->AlamatDkt}}" placeholder="Alamat Dokter"><br>
	<input type="text" name="TeleponDkt" value="{{$dokter->TeleponDkt}}" placeholder="No.Telepon Dokter"><br>
	<input type="text" name="KodePlk" value="{{$dokter->KodePlk}}" placeholder="Kode Poliklinik"><br>
	<input type="text" name="Tarif" value="{{$dokter->Tarif}}" placeholder="Tarif"><br>
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="Edit">
</form>