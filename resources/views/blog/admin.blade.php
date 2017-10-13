@extends ('blog.layout')

@section ('main_content')

@foreach ($accounts as $account)
	@if($account->role == 'regular')
	<p>{{$account->name}}</p>
	@endif
@endforeach


@endsection