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
	<?php $namb = 1;
		foreach($posts as $post){
			if($namb%3==1){
				echo 
				'<div class="post" onclick="napost(this)">
					<img class="postimg" src="',$post->image,'">
					<div class="doppost">
						<img class="avtor" src="Data/ava.jpg">
						<span>',$people[$post->user_id-1]->login,'</span>
						<div class="like">
							<img src="Data/icon/likeoff.png">
						</div>
					</div>
				</div>';}
			$namb++;
		} 
		$namb = 1;
		echo '</div><div id="feeder">';
		foreach($posts as $post){
			if($namb%3==2){
				echo 
				'<div class="post" onclick="napost(this)">
					<img class="postimg" src="',$post->image,'">
					<div class="doppost">
						<img class="avtor" src="Data/ava.jpg">
						<span>',$people[$post->user_id-1]->login,'</span>
						<div class="like">
							<img src="Data/icon/likeoff.png">
						</div>
					</div>
				</div>';}
			$namb++;
		}
		$namb = 1;
		echo '</div><div id="feeder">';
		foreach($posts as $post){
			if($namb%3==0){
				echo 
				'<div class="post" onclick="napost(this)">
					<img class="postimg" src="',$post->image,'">
					<div class="doppost">
						<img class="avtor" src="Data/ava.jpg">
						<span>',$people[$post->user_id-1]->login,'</span>
						<div class="like">
							<img src="Data/icon/likeoff.png">
						</div>
					</div>
				</div>';}
			$namb++;
		}
	?>
		
	</div>
	</div>
	<script src="Data/JS.js"></script>
</body>
</html>
@endsection