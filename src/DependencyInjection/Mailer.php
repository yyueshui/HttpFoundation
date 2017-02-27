<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/27
 * Time: 上午11:29
 */
namespace Felix\DependencyInjection;

class Mailer
{
	private $transport;

	public function __construct($transport)
	{
		$this->transport = $transport;
	}

	public function process()
	{
		echo $this->transport;
	}

	// ...
}