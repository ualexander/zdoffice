<?php

$tmpLayoutData = [
	'config' => 			&$PROG_CONFIG,
	'progData' => 		&$progData,
	'title' => 				$PROG_CONFIG['PROG_NAME'],
	'content' => 			'',
	'pagination' => 	'',
	'alertMassage' => false,
	'errorMassage' => false
];

$tmpLayoutContentData = [
	'config' => 			&$PROG_CONFIG,
	'progData' => 		&$progData,
	'title' => 		    &$tmpLayoutData['title'],
	'formId' => 			'none'
];