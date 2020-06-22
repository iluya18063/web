@extends('layout.menu1')
@section('content')
<div id="ostranice">
	<img src="Data/icon/поиск.png">
	<span>поиск</span>
</div>
<div id="spisok">
	<?php foreach($srchppl as $ppl)
		echo '
	<div class="elemspis">
		<img  src="Data/ava.png">
		<span>',$ppl->login,'</span>
		<div class="elemspisbt2">подписатся</div>
	</div>';
	?>
</div>
@endsection
