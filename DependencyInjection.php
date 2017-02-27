<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/27
 * Time: 下午4:29
 */

require './vendor/autoload.php';
$container = new \Symfony\Component\DependencyInjection\ContainerBuilder();
$container->setParameter('mailer.transport', 'sendmail6');

$container->register('Mailer', '\\Felix\\Tools\\Mailer')
	->addArgument('%mailer.transport%');

$container->register('NewsletterManager', '\\Felix\\NewsletterManager')
	->addArgument(new \Symfony\Component\DependencyInjection\Reference('Mailer'));
$container->get('NewsletterManager')
	->getMailer()
	->process();