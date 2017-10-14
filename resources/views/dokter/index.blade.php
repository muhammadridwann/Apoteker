@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Data Dokter</div>

                <div class="panel-body">
					<table class="table table-striped">
					<a class="btn btn-primary" href="/dokter/create">Create Data</a>
					<thead>
						<tr>
							<th>Kode Dokter</th>
							<th>Nama Dokter</th>
							<th>Spesialis Dokter</th>
							<th>Alamat Dokter</th>
							<th>Telepon Dokter</th>
							<th>Kode Poliklinik</th>
							<th>Tarif Dokter</th>
							<th>Action</th>
						</tr>
					</thead>
					@foreach ($dokters as $dokter)
					<tr>
						<td>{{ $dokter->KodeDkt }}</td>
						<td>{{ $dokter->NamaDkt }}</td>
						<td>{{ $dokter->Spesialis }}</td>
						<td>{{ $dokter->AlamatDkt }}</td>
						<td>{{ $dokter->TeleponDkt }}</td>
						<td>{{ $dokter->KodePlk }}</td>
						<td>{{ $dokter->Tarif }}</td>
						<td>
							<a class="btn btn-primary" href="/dokter/{{$dokter->KodeDkt}}/edit">Edit</a>
							<a class="btn btn-success" href="/dokter/{{$dokter->KodeDkt}}">Detail</a>
							<form class="" action="/dokter/{{$dokter->id}}" method="post">
								<input type="hidden" name="_method" value="delete">
								<input type="submit" name="name" value="Delete">
							</form>
						</td>

					</tr>
					@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection