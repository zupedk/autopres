@extends('layout')
@section('content')
	<div class="page-header">
  		<h1>Opret klient</h1>
	</div>
	<form method="POST" action="/clients">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Navn</label>
			<input type="text" name="name" id="name" class="form-control" required />
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Opret</button>
		</div>
	</form>
@endsection