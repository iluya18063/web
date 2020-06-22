<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LISishnik</title>
	<link href="Data/style.css" rel="StyleSheet">
</head>
<body>
<div id="menu">
<?php
use Illuminate\Support\Facades\Auth; 
	echo '
	<img id="logotip" src="Data/icon/logo.png">
	<img id="ava" src="',Auth::user()->userpic,'" onclick="naabout()">
	<div id="yourname">',Auth::user()->login,'</div>
	 
	<div class="perehod" onclick="nafeed()">
		<img src="Data/icon/новости.png">
		<span>новости</span>
	</div>
	
	<div class="perehod" onclick="nadirect()">
		<img src="Data/icon/сообщения.png"></td>
		<span>сообщения</span><div>1</div>
		
	</div>
	<div class="perehod" onclick="nanotice()">
		<img src="Data/icon/уведомления.png"></td>
		<span>уведомления</span><div>2</div>
	</div>
	<div class="perehod" onclick="nasearch()">
		<img src="Data/icon/поиск.png">
		<span>поиск</span>
	</div>
	<div class="perehod" onclick="nafollowers()">
		<img src="Data/icon/подписчики.png">
		<span>подписчики</span><div></div>
	</div>
	<div class="perehod" onclick="nafollowing()">
		<img src="Data/icon/подписки.png">
		<span>подписки</span><div></div>
	</div>
	<div class="imgbutton" onclick="nalogo()">
		<img src="Data/icon/выход.png">
	</div>
	<div class="imgbutton" onclick="nasettings()">
		<img src="Data/icon/настройки.png">
	</div>';
?>
</div>
<div id="searchlong"><img src="Data/icon/поиск.png"><form method="get" action="Search"><input name="poisk" type="text"></form></div>
@yield('content')
<script src="Data/JS.js"></script>
</body>
</html>