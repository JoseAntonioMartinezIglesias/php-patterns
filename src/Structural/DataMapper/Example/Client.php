<?php

include_once 'StorageAdapter.php';
include_once 'UserMapper.php';
include_once 'User.php';


$user = new User();
$user->setName('josele');
$mapper = new UserMapper($user);
$mapper->save();

$userMapper = new UserMapper();
$userMapper->findById(2);

