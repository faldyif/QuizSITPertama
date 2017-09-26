
@extends('layouts.app')
@section('content')

	<div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Kelola User</a>
				</div>
			</div>
		</nav>

		<div class="content">

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
			<div class="card card-plain">
				<div class="content table-responsive table-full-width">
					<table class="table table-hover">
						<thead>
							<th>ID</th>
							<th>Nama</th>
							<th>Email</th>
						</thead>
						
				
						<tbody>
							@foreach($users as $key)
							<tr>
								<td>{{ $key->id }}</td>
								<td>{{ $key->nama }}</td>
								<td>{{ $key->email }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>

	</div>
</div>
@endsection
