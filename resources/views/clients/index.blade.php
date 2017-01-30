@extends('layout')
@section('content')
	<h1>
	  <span>Klienter</span>
	  <a href="clients/create" class='btn btn-primary pull-right'>Opret klient</a>
	</h1>
	<hr/>
	<div class="table-responsive">
		<table class="table" width="100%">
			<thead>
				<tr>
					<th>
						Id
					</th>
					<th>
						Navn
					</th>
					<th>
						Oprettet
					</th>
					<th>
						Opdateret
					</th>
				</tr>
			</thead>
			@foreach($clients as $client)
			<tr>
				<td>
					{{ $client->id }}
				</td>
				<td>
					{{ $client->name }}
				</td>
				<td>
					{{ $client->created_at }}
				</td>
				<td>
					{{ $client->updated_at }}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection