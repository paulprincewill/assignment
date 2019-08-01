<?php
	require "../../../initialize.php";
	require "../_lib/db.php";
	$x = [];

	$inst = $db->get('instruction');
	$title = $db->get('title');
	$deadline = $db->get('deadline');
	$deadline = date("Y-m-d", strtotime($deadline));
	$score = $db->get('score');	
	$lecturer_id = 1 ;

	$title_preffix = $title[0].$title[1];

	$db->sql("INSERT INTO assignments ( title, instruction, deadline, score, lecturer_id, code ) VALUES ( '$title', '$inst', '$deadline', '$score', '$lecturer_id', '$code' ) ");

	if( $db->isSuccessful ){

		$ass_id = $db->conn->insert_id;
		$code = $title_preffix.$lecturer_id.$ass_id ;
		
		$db->sql("UPDATE assignments SET code = '$code' WHERE id = '$ass_id' ");

			if( $db->isSuccessful ){
				$x['code'] =  $code ;				
			}
			else{
				echo $db->feedback;
			}

	}
	else{
		echo $db->feedback;
	}

	echo json_encode($x);