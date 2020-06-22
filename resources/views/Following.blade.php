@extends('layout.menu1')
@section('content')
<div id="ostranice">
	<img src="Data/icon/подписки.png">
	<span>подписки</span>
</div>
<div id="spisok">
	<?php foreach($people as $ppl)
		echo '
	<div class="elemspis">
		<img  src="Data/ava.png">
		<span>',$ppl->login,'</span>
		<div class="elemspisbt1">отписатся</div>
	</div>';
	?>
</div>
@endsection
