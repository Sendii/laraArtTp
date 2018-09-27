@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-right">
		@foreach($arts as $art)
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><b><i>{{ $art->judul }}</i></b></div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ $art->isi }}
				</div> 
				<img src="{{$art->foto}}">
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
