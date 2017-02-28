<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/27
 * Time: 下午4:29
 */

require './vendor/autoload.php';
/*
$container = new \Symfony\Component\DependencyInjection\ContainerBuilder();
$container->setParameter('mailer.transport', 'sendmail');

$container->register('Mailer', '\\Felix\\DependencyInjection\\Mailer')
	->addArgument('%mailer.transport%');

$container->register('NewsletterManager', '\\Felix\\DependencyInjection\\NewsletterManager')
	->addMethodCall('setMailer', array(new \Symfony\Component\DependencyInjection\Reference('Mailer')));
$container->get('NewsletterManager')
	->getMailer()
	->process();
*/

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/config'));
$loader->load('services.yml');
$container->get('NewsletterManager')->getMailer()->process();
//echo '<pre>';
//var_dump($container->get('NewsletterManager'));