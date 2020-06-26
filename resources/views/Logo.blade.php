@extends('layout.header')
@section('content')
<div id="logoblok">
	<img src="Data/icon/logo.png">
	<form method="get" action="auth">
		<input class="logtext" type="text" placeholder="Логин" name="login" required>	
		<input class="logtext"  type="password" placeholder="Пароль" name="password" required>
		<input id="inak"  type="submit" value="Войти">
	</form>
	<form method="get" action="Reg">
		<input id="inak"  type="submit" value="Регистрация">
	</form>
</div>
<script src="Data/JS.js"></script>
@endsection
