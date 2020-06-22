@extends('layout.menu1')
@section('content')
<div id="ostranice">
	<img src="Data/icon/подписчики.png">
	<span>подписчики</span>
</div>
<div id="spisok">
	<?php foreach($people as $ppl)
		echo '
	<div class="elemspis">
		<img  src="Data/ava.png">
		<span>',$ppl->login,'</span>
		<div class="elemspisbt1">удалить</div>
	</div>';
	?>
</div>
@endsection
