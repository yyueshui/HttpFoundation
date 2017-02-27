<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/27
 * Time: 下午2:39
 */
namespace Felix;

class NewsletterManager
{
	private $mailer;

	public function __construct(\Felix\Tools\Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function getMailer()
	{
		return $this->mailer;
	}

	// ...
}