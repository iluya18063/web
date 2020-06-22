@extends('layout.header')
@section('content')
<div id="spisok2"></div>
<div id="abmenu">
	<img id="ablogo" src="Data/icon/logo.png">
	<div id="absearch"><img src="Data/icon/поиск.png"><input type="text"></div>
	<div class="iconbutton" onclick="nalogo()">
		<img src="Data/icon/выход.png">
	</div>
	<div class="iconbuttonava" onclick="naabout()">
		<img src="Data/ava.png">
	</div>
	<div class="iconbutton" onclick="nafollowing()">
		<img src="Data/icon/подписки.png">
	</div>
	<div class="iconbutton" onclick="nafollowers()">
		<img src="Data/icon/подписчики.png">
	</div>
	<div class="iconbutton" onclick="nasearch()">
		<img src="Data/icon/поиск.png">
	</div>
	<div class="iconbutton" onclick="nanotice()">
		<img src="Data/icon/уведомления.png">
	</div>
	<div class="iconbutton" onclick="nadirect()">
		<img src="Data/icon/сообщения.png">
	</div>
	<div class="iconbutton" onclick="nafeed()">
		<img src="Data/icon/новости.png">
	</div>
</div>
@endsection