@extends('layout')
@section('content')
	<div class="page-header">
  		<h1>Opret skærm</h1>
	</div>
	<form method="POST" action="/displays">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Navn</label>
			<input type="text" name="name" id="name" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="client_id">Klient</label>
			<select name="client_id" id="client_id" class="form-control">
				@foreach($clients as $client)
					<option value="{{$client->id}}">{{$client->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Opret</button>
		</div>
	</form>
@endsection