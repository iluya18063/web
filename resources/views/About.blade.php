@extends('layout.header')
@section('body')
<body>
	<div id="abblock">
		<img id="abava" src="Data/ava.jpg">
		<div id="abyourname">Имя с Фамилией</div>
		<div class="stat"><b>9</b>постов</div>
		<div class="stat"><b>0</b>подписчиков</div>
		<div class="stat"><b>0</b>подписок</div>
	</div>
	<div id="abprostr">
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/1 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/2 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/3 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/4 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/5 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/6 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/7 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/8 пост.jpg">
		</div>
		<div class="abpost" onclick="napost(this)">
			<img src="Data/posts/9 пост.jpg">
		</div>
	</div>
	<div id="abmenu">
		<img id="ablogo" src="Data/icon/logo.png">
		<div id="absearch"><img src="Data/icon/поиск.png"><input type="text"></div>
		<div class="iconbutton" onclick="nalogo()">
			<img src="Data/icon/выход.png">
		</div>
		<div class="iconbutton" onclick="nasettings()">
			<img src="Data/icon/настройки.png">
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
	<script src="Data/JS.js"></script>
</body>
</html>
@endsection

