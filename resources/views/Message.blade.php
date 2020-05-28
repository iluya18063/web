@extends('layout.header')
@section('body')
<body>
	<div class="avtorpost">
		<img  src="Data/ava.jpg">
		<span>Имя с Фамилией</span>
	</div>
	<div id="btnback" onclick="illbyback()"><img src="Data/icon/назад.png"></div>
	<div id="spisok2">
		<div id="komentblock">
			<img src="Data/icon/коментарии.png">
			<input type="text" autofocus>
			<div id="komentbutton"><img src="Data/icon/коментотправить.png"></div>
		</div>
	</div>
	<script src="Data/jsmsg.js"></script>
	<script src="Data/JS.js"></script>
	
</body>
</html>
@endsection
