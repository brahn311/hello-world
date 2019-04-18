<?php

namespace App\Models;

use App\Traits\HasDefaultImage;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	use HasDefaultImage;

	protected $table = 'jobs';

	public function getDuration()
	{
		$years = floor($this->months / 12);
		$months = $this->months % 12;
		$duration = '';
		if ($years > 0)
		{
			$duration = "$years years";
		}
		if ($months > 0)
		{
			if ($duration <> '') $duration .= ', ';
			$duration .= "$months months";
		}
		else
		{
			$duration .= '';
		}
		return $duration."\n";
	}
}
