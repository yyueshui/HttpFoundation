<?php

require './vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

$cache = new FilesystemAdapter();

//设置缓存
$userName = $cache->getItem('user.name');
$userName->set('zhangsan') //设置值
		 ->expiresAfter(300); //设置过期时间
$cache->save($userName);

$userAge = $cache->getItem('user.age');
$userAge->set(20)
		->expiresAfter(300); //设置过期时间
$cache->save($userAge);

//单个获取获取缓存
$newUser = $cache->getItem('user.name');
if($newUser->isHit()) {//判断是否命中
	dump($newUser->get());
}

//批量获取
$keys = array('user.name', 'user.age');
$multi = $cache->getItems($keys); //返回Generator
$value = array();

foreach($multi as $v) {
	dump($v->get());
}


//删除缓存
$cache->deleteItem('user.name');
$newUser = $cache->getItem('user.name');
dump($newUser->get());
