<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/27
 * Time: 下午2:39
 */
namespace Felix\DependencyInjection;

class NewsletterManager
{
	private $mailer;

	public function __construct(\Felix\DependencyInjection\Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function getMailer()
	{
		return $this->mailer;
	}

	// ...
}