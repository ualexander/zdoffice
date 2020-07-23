<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/src/include.php');

$navigationListAdmin = [
  [
    'title' => '<i class="ni ni-bullet-list-67 text-primary"></i><span class="nav-link-text">Пользователи</span>',
    'url' => $sysConfig['host'] . '/users.php?action=users_list',
    'isCaption' => false,
    'isActive' => false,
    'isAvailable' => true
  ],
  [
    'title' => '<i class="ni ni-fat-add text-primary"></i><span class="nav-link-text">Добавить</span>',
    'url' => $sysConfig['host'] . '/users.php?action=new_user_card',
    'isCaption' => false,
    'isActive' => false,
    'isAvailable' => true
  ]
];
