<?php

namespace App\Controllers;

use Zend\Diactoros\Response\HtmlResponse;

class BaseController
{
	// Inicializamos twig
	protected $templateEngine;		
	
	public function __construct()
	{
		$loader = new \Twig\Loader\FilesystemLoader('../views');
		$this->templateEngine = new \Twig\Environment($loader, [
			'debug' => true,
			'cache' => false,
		]);
	}
	
	public function renderHTML($fileName, $data = [])
	{
		return new HtmlResponse($this->templateEngine->render($fileName, $data));
	}
	
}