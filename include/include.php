<?php

if(\core\common::isMobile()) define('ISMOBILE',true);

######################加载视图VIEW#######################extract($_GET);#无用?? URL包含参数
$whiteList=config('whiteList');
$passLogin=\core\Route::match($whiteList);

if(!$passLogin) {

	\core\Common::AUTH();

	$adminList=config('adminList');

	$isAdmin=in_array(USER,$adminList);

	if($isAdmin) {
        define('ADMIN',true);
        #define('THEME','default');
    }

}

/*
	\Ctrl\Pool::userOnline($USER);

    $needVip=\core\Route::match($vipList);
    if($needVip) \Ctrl\Pool::userVip($USER);*/