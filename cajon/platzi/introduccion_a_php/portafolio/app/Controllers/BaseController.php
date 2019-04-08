<?php

namespace App\Controllers;

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
		return $this->templateEngine->render($fileName, $data);
	}
	
}