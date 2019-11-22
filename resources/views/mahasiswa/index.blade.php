@extends('template/main')

@section('tittle', 'Daftar Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Daftar Mahasiswa</h1>
			<table class="table table-stripped table-dark">
				<thead class="">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">ID</th>
						<th scope="col">Email</th>
						<th scope="col">Major</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					 @foreach ($mahasiswa as $mhs)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$mhs->nama}}</td>
						<td>{{$mhs->nrp}}</td>
						<td>{{$mhs->email}}</td>
						<td>{{$mhs->jurusan}}</td>
						<td>
							<a href="" class="badge badge-success">Edit</a>
							<a href="" class="badge badge-danger">Delete</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>

@endsection