@extends('layout.header')
@section('body')
<body>
	<div id="menu">
		<img id="logotip" src="Data/icon/logo.png">
		<img id="ava" src="Data/ava.jpg" onclick="naabout()">
		<div id="yourname">Имя с Фамилией</div>
		
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
		</div>
	</div>
	
	<div id="searchlong"><img src="Data/icon/поиск.png"><input type="text"></div>
	
	<div id="ostranice">
		<img src="Data/icon/новости.png">
		<span>новости</span>
	</div>
	
	<div id="stories">
		<img src="Data/icon/storiapp.png">
		<img src="Data/ava.jpg">
		<img src="Data/ava.jpg">
		<img src="Data/ava.jpg">
		<img src="Data/ava.jpg">
		<img src="Data/ava.jpg">
		<img src="Data/ava.jpg">
		<img src="Data/ava.jpg">
	</div>
	<div id="feed">
	<div id="feeder">
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/1 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/4 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/7 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
	</div>
	<div id="feeder">
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/2 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/5 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/8 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
	</div>
	<div id="feeder">
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/3 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/6 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
		<div class="post" onclick="napost(this)">
			<img class="postimg" src="Data/posts/9 пост.jpg">
			<div class="doppost">
				<img class="avtor" src="Data/ava.jpg">
				<span>Имя с Фамилией</span>
				<div class="like">
					<img src="Data/icon/likeoff.png">
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="Data/JS.js"></script>
</body>
</html>
@endsection