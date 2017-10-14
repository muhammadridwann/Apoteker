@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Data Resep</div>

                <div class="panel-body">
					<table class="table table-striped">
					<a class="btn btn-primary" href="/resep/create">Create Data</a>
					<thead>
						<tr>
							<th>Nomor Resep</th>
							<th>Tanggal</th>
							<th>Kode Dokter</th>
							<th>Kode Pasien</th>
							<th>Kode Poliklinik</th>
							<th>Total Harga</th>
							<th>Bayar</th>
							<th>Kembali</th>
							<th>Action</th>
						</tr>
					</thead>
					@foreach ($reseps as $resep)
					<tr>
						<td>{{ $resep->NomorResep }}</td>
						<td>{{ $resep->TanggalResep }}</td>
						<td>{{ $resep->KodeDkt }}</td>
						<td>{{ $resep->KodePsn }}</td>
						<td>{{ $resep->KodePlk }}</td>
						<td>{{ $resep->TotalHarga }}</td>
						<td>{{ $resep->Bayar }}</td>
						<td>{{ $resep->Kembali }}</td>
						<td>
						<a href="/resep/{{$resep->NomorResep}}">Detail</a>
						<a href="/resep/{{$resep->NomorResep}}/edit">Edit</a>
						<form class="" action="/resep/{{$resep->id}}" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="submit" name="name" value="Delete">
						</form>
						</td>
					@endforeach
					</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection