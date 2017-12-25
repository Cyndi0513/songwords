<?php
	//读取文件内容
	$fp = fopen("songs/songs_".$_POST['index'].".txt","a+");
	while(!feof($fp)){
		$song[] = array(fgets($fp));
	}
	fclose($fp);
	echo json_encode($song);	
?>