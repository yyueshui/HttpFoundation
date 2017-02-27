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

$container->setParameter('mailer.transport', 'sendmail');
$container
	->register('mailer', 'Mailer')
	->addArgument('%mailer.transport%');

$container
	->register('newsletter_manager', 'NewsletterManager')
	->addArgument(new Reference('mailer'));

$obj = $container->get('newsletter_manager');
//$obj = new \Felix\NewsletterManager();
$obj->getMailer()->process();
exit;
function get(){
	yield '2'=>1;
}

$a = $_GET['a'];
try {
	if($a == 1) {
		dump($a);
	} else {
		throw  new \Exception('arguments error!', 404);
	}
	//foreach(get() as $k => $v) {
	//	dump($k);
	//	dump($v);
	//}
} catch (\Exception $exception) {
	//dump($exception->getMessagee());
	//dump($exception->getCode());
}

function a(...$numbers) {
	$acc = 0;
	foreach( $numbers as $number )
	{
		$acc += $number;
	}
	return $acc;
}

dump(a(1,2,3,4,5));

$request = Request::createFromGlobals();
//dump($request->getPathInfo());
//dump($request->getContent());
//dump($request->get('age', '2')); //设置默认值
//dump($request->query->all()); //获取所有
//dump($request->server->get('DOCUMENT_ROOT'));//获取$_SERVER的DOCUMENT_ROOT值
//dump($request->cookies);//cookie
