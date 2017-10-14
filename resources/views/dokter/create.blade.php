<h1>Create Data</h1>

<form class="" action="/dokter" method="post">
	<input type="text" name="KodeDkt" placeholder="Kode Dokter"><br>
	<input type="text" name="NamaDkt" placeholder="Nama Dokter"><br>
	<input type="text" name="Spesialis" placeholder="Spesialis"><br>
	<input type="text" name="AlamatDkt" placeholder="Alamat Dokter"><br>
	<input type="text" name="TeleponDkt" placeholder="No.Telepon Dokter"><br>
	<input type="text" name="KodePlk" placeholder="Kode Poliklinik"><br>
	<input type="text" name="Tarif" placeholder="Tarif"><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="Submit">
</form>