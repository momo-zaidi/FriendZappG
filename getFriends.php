<?php

getFriends(1,'50 53.846','04 20.361');  
  function getFriends($id,$lat,$lng)
  {
    $infoFriend->id = $id;
	$infoFriend->latitude = $lat;
	$infoFriend->longitude = $lng;

	$JSONResult = json_encode($infoFriend);

	echo $JSONResult;

  }


?>