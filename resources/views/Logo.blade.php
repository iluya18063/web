@extends('layout.header')
@section('content')
<div id="logoblok">
	<img src="Data/icon/logo.png">
	<form method="get" action="auth">
		<input class="logtext" type="text" placeholder="Логин" name="login">
		<input class="logtext"  type="password" placeholder="Пароль" name="password">
		<input id="inak"  type="submit" value="Войти">
	</form>
	<form method="get" action="Reg">
		<input id="inak"  type="submit" value="Зарегистрироваться">
	</form>
</div>
<script src="Data/JS.js"></script>
@endsection
