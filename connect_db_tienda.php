<?php
	$link =mysql_connect('localhost','tnorte','tnorte123');
	if($link){
		mysql_select_db('productos',$link);
	}
?>