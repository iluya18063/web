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
<?php 

use App\User;
	$namb = 1;
	foreach($posts as $post){
		if($namb%3==1){
			$user = User::where('id',$post->user_id)->first();
			echo 
			'<div class="post" onclick="napost(',$post->id,')">
				<img class="postimg" src="',$post->image,'">
				<div class="doppost">
					<div class="avtor">
						<img src="',$user->userpic,'">
						<span>',$user->login,'</span>
					</div>
					<div class="like">
						<img src="Data/icon/likeoff.png">
						<span>',$post->like_count,'</span>
					</div>
				</div>
			</div>';}
		$namb++;
	} 
	$namb = 1;
	echo '</div><div id="feeder">';
	foreach($posts as $post){
		if($namb%3==2){
			$user = User::where('id',$post->user_id)->first();
			echo 
			'<div class="post" onclick="napost(',$post->id,')">
				<img class="postimg" src="',$post->image,'">
				<div class="doppost">
					<div class="avtor">
						<img src="',$user->userpic,'">
						<span>',$user->login,'</span>
					</div>
					<div class="like">
						<img src="Data/icon/likeoff.png">
						<span>',$post->like_count,'</span>
					</div>
				</div>
			</div>';}
		$namb++;
	}
	$namb = 1;
	echo '</div><div id="feeder">';
	foreach($posts as $post){
		if($namb%3==0){
			$user = User::where('id',$post->user_id)->first();
			echo 
			'<div class="post" onclick="napost(',$post->id,')">
				<img class="postimg" src="',$post->image,'">
				<div class="doppost">
					<div class="avtor">
						<img src="',$user->userpic,'">
						<span>',$user->login,'</span>
					</div>
					<div class="like">
						<img src="Data/icon/likeoff.png">
						<span>',$post->like_count,'</span>
					</div>
				</div>
			</div>';}
		$namb++;
	}
?>
</div>
</div>
@endsection