@extends('layout.menu1')
@section('content')
<div id="ostranice">
	<img src="Data/icon/сообщения.png">
	<span>сообщения</span>
</div>	
<div id="spisok">
	<?php foreach($people as $ppl)
	echo '
	<div class="elemspis" onclick="namessage()">
		<img  src="Data/ava.png">
		<span>',$ppl->login,'</span>
		<div class="elemspisbt2">прочитать</div>
	</div>';
	?>
</div>
@endsection