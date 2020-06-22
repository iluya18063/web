@extends('layout.menu1')
@section('content')
<div id="ostranice">
	<img src="Data/icon/новости.png">
	<span>новости</span>
</div>
<div id="stories">
	<img src="Data/icon/storiapp.png">
	<img src="Data/ava.png">
	<img src="Data/ava.png">
	<img src="Data/ava.png">
	<img src="Data/ava.png">
	<img src="Data/ava.png">
	<img src="Data/ava.png">
	<img src="Data/ava.png">
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
					<img class="avtor" src="Data/ava.png">
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
					<img class="avtor" src="Data/ava.png">
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
					<img class="avtor" src="Data/ava.png">
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
@endsection