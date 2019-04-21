<?php

namespace App\Services;

use App\Models\Job;

class JobService
{

	public function deleteJob($id)
	{
		$job = Job::find($id);
		if (!$job)
		{
		    throw new \Exception( 'Job not found');
        }
		$job->delete();
	}
}
