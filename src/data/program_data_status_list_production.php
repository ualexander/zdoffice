<?php



//* Ожидание подтверждения 000
//* Получено производством 1000
//* Начата работа 200
//* Готовность % 210 - 290
//* Выполнено % 300
//* Отгружено 400
//* Ожидание подтверждения отмены 998
//* 999

// const
// adv
// furn
// steel
// install
// supply



/*
  current_status
 	datetime_status_0 												DATETIME,
	datetime_status_100 												DATETIME,
	datetime_status_200 												DATETIME,
	datetime_status_210 												DATETIME,
	datetime_status_220 												DATETIME,
	datetime_status_230 												DATETIME,
	datetime_status_240 												DATETIME,
	datetime_status_250 												DATETIME,
	datetime_status_260 												DATETIME,
	datetime_status_270 												DATETIME,
	datetime_status_280 												DATETIME,
	datetime_status_290 												DATETIME,
	datetime_status_300 												DATETIME,
	datetime_status_999 												DATETIME

*/


$STATUS_LIST_PRODUCTION = [
	0 => [
		'name' => 'ожидание подтверждения',
		'icon' => '<span class="badge badge-pill badge-warning">ожидание подтверждения</span>'
	],
	100 => [
		'name' => 'получено производством',
		'icon' => '<span class="badge badge-pill badge-warning">получено производством</span>'
	],
	200 => [
		'name' => 'начата работа',
		'icon' => '<span class="badge badge-pill badge-primary">начата работа</span>'
	],
	210 => [
		'name' => 'готовность 10%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 10%</span>'
	],
	220 => [
		'name' => 'готовность 20%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 20%</span>'
	],
	230 => [
		'name' => 'готовность 30%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 30%</span>'
	],
	240 => [
		'name' => 'готовность 40%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 40%</span>'
	],
	250 => [
		'name' => 'готовность 50%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 50%</span>'
	],
	260 => [
		'name' => 'готовность 60%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 60%</span>'
	],
	270 => [
		'name' => 'готовность 70%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 70%</span>'
	],
	280 => [
		'name' => 'готовность 80%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 80%</span>'
	],
	290 => [
		'name' => 'готовность 90%',
		'icon' => '<span class="badge badge-pill badge-primary">готовность 90%</span>'
	],
	300 => [
		'name' => 'выполнено',
		'icon' => '<span class="badge badge-pill badge-success">выполнено</span>'
	],
	400 => [
		'name' => 'отгружено',
		'icon' => '<span class="badge badge-pill badge-success">отгружено</span>'
	],
	998 => [
		'name' => 'ожидание подтверждения отмены',
		'icon' => '<span class="badge badge-pill badge-danger">ожидание подтверждения отмены</span>'
	],
	999 => [
		'name' => 'отменено',
		'icon' => '<span class="badge badge-pill badge-danger">отменено</span>'
	]
];

$STATUS_ID_PRODUCTION = [
	'WAIT_START' 	=> 0,
	'RECEIVED' 		=> 100,
	'START' 			=> 200,
	'READY_10' 		=> 210,
	'READY_20' 		=> 220,
	'READY_30' 		=> 230,
	'READY_40' 		=> 240,
	'READY_50' 		=> 250,
	'READY_60' 		=> 260,
	'READY_70' 		=> 270,
	'READY_80' 		=> 280,
	'READY_90' 		=> 290,
	'DONE' 				=> 300,
	'ISSUED' 			=> 400,
	'WAIT_CANCEL' => 998,
	'CANCEL' 			=> 999
];


