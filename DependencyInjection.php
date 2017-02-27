<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/27
 * Time: 下午4:29
 */

require './vendor/autoload.php';
$container = new \Symfony\Component\DependencyInjection\ContainerBuilder();
$container->setParameter('mailer.transport', 'sendmail');

$container->register('Mailer', '\\Felix\\DependencyInjection\\Mailer')
	->addArgument('%mailer.transport%');

$container->register('NewsletterManager', '\\Felix\\DependencyInjection\\NewsletterManager')
	->addArgument(new \Symfony\Component\DependencyInjection\Reference('Mailer'));
$container->get('NewsletterManager')
	->getMailer()
	->process();