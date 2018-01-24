<?php

//TODO

include_once 'StorageAdapter.php';
include_once 'UserMapper.php';
include_once 'User.php';


$user = new User('admin', 'admin@domain.es');
$mapper = new UserMapper($user);
$mapper->save();

$userMapper = new UserMapper($user);
$userMapper->findById(2);

