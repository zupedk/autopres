@extends('layout')
@section('content')
	<h1>
	  <span>Skærme</span>
	  <a href="displays/create" class='btn btn-primary pull-right'>Opret skærm</a>
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
						Klient
					</th>
					<th>
						Oprettet
					</th>
					<th>
						Opdateret
					</th>
				</tr>
			</thead>
			@foreach($displays as $display)
			<tr>
				<td>
					{{ $display->id }}
				</td>
				<td>
					{{ $display->name }}
				</td>
				<td>
					{{ $display->client->name }}
				</td>
				<td>
					{{ $display->created_at }}
				</td>
				<td>
					{{ $display->updated_at }}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection