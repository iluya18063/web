@extends('layout.header')
@section('body')
<body>
	<div id="logoblok">
		<img src="Data/icon/logo.png">
		<div class="logtext"><input type="text" placeholder="Логин"></div>
		<div class="logtext"><input type="text" placeholder="Пароль"></div>
		<div id="inak" onclick="nafeed()"><span>Войти</span></div>
	</div>
	<script src="Data/JS.js"></script>
</body>
@endsection
