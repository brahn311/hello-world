<?php

use App\Models\Job;

namespace App\Services;

class JobService
{

	public function deleteJob($id)
	{
		$job = Job::find($id);
		$job->delete();
	}
}
