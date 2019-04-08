<?php

namespace App\Controllers;

use App\Models\{Job, Proyect};

class IndexController extends BaseController
{

	public function indexAction() 
	{
		$name = "Abrahan Omaña";
		
		$jobs = Job::all();
		
		return $this->renderHTML('index.twig', [
			'name' => $name,
			'jobs' => $jobs,
		]));
	}
}
