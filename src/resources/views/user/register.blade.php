@extends('layouts.second')


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ translang('Register') }}</div>
				<div class="panel-body">
						@include('form.register')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
