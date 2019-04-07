<?php

namespace App\Controllers;

use App\Models\{Job};

class JobsController
{

	public function getAddJobAction($request)
	{
		if ($request->getMethod() == 'POST') 
		{
			$job = new Job();
			$postData = $request->getParsedBody()
			$job->title = $postData['title'];
			$job->description = $postData['description'];
			$job->months = $postData['months'];
			$job->visible = $postData['visible'];
			$job->save();
		}
		
		include '../views/addJob.php';
	}
}