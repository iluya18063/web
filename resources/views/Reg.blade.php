@extends('layout.header')
@section('content')
<div id="logoblok">
	<img src="Data/icon/logo.png">
	<form method="get" action="registration">
		<input class="logtext" type="text" placeholder="Логин" name="login" required>
		<input class="logtext" type="text" placeholder="Адрес электронной почты" name="email_address" required>
		<input class="logtext"  type="password" placeholder="Пароль" name="password" required>
		<input id="inak"  type="submit" value="Зарегистрироваться">
	</form>
	<form method="get" action="logout">
		<input id="inak"  type="submit" value="Назад">
	</form>
</div>
<script src="Data/JS.js"></script>
@endsection
