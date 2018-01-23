@extends('layout.app')


@section('content')
<div class="container">
<div class="row">
			<h2 id="cont">Login</h2>
			<p class="text-center">Login del administrador del sitio</p>

			<form class="form-inline text-center" method='POST' action="/login">
	 {!! csrf_field() !!}

		<br>
		<br>
		<div class="form-group text-center">
			<input class="form-control" type="email" name="email" placeholder="Correo"><br>
			<input class="form-control" type="password" name="password" placeholder="Contraseña"><br>
			<input class="btn btn-primary" type="submit" value="Entrar">
		</div>
	</form>
</div>
</div>
@endsection

