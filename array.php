<?php
	$arr = [1,2,3,4];
	for ($i = 0;$i < count($arr); $i++){
		echo $arr[$i].' ';
	}
	$arr = [];
	echo count($arr); // array 개수
	array_push($arr,3); // array에 append
	$arr = array_merge($arr,[2,1]); // array에 리스트 추가
	array_unshift($arr,4); //맨앞에 4를 insert해준다.
	array_pop($arr); //pop
	sort($arr); //sorting
	rsort($arr); //역순 sorting
	
?>