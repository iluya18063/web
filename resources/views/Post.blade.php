@extends('layout.header')
@section('content')
<div class="avtorpost">
	<?php use App\User; use App\article; use App\comment;
	$post = article::where('id',$_GET['post_id'])->first();
	$avtor = User::where('id',$post->user_id)->first();
	echo '
	<img  src="',$avtor ->userpic,'">
	<span>',$avtor->login,'</span>
</div>
<div id="btnback" onclick="illbyback()"><img src="Data/icon/назад.png"></div>
<div id="spisok2">
		<img class="sampost" src="',$post->image,'">';?>
		<div id="komentblock">
			<img src="Data/icon/коментарии.png">
			<form method="get" action="Postcom"><input type="text" autofocus name="textcoment">
			<button id="komentbutton" type="submit"><img src="Data/icon/коментотправить.png"></button>	
			</form>
		</div>
		<?php 
		$comments = comment::where('articke_id',$post->id)->get();
		foreach($comments as $com){
			$user = User::where('id',$com->user_id)->first();
			echo '<div class="komentavtor">
				<img src="',$user->userpic,'" class="">
				<span class="komentavtortext">',$user->login,'</span>
				<span class="komenttext">',$com->comment,'</span>
			</div>';
		}
		?>
	
</div>
<script src="Data/jspost.js"></script>
@endsection
