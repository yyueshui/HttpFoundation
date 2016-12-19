<?php

require './vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
dump($request->getPathInfo());
dump($request->getContent());
dump($request->get('age', '2')); //设置默认值
dump($request->query->all()); //获取所有
dump($request->server->get('DOCUMENT_ROOT'));//获取$_SERVER的DOCUMENT_ROOT值
dump($request->cookies);//cookie

