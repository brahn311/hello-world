<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
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
	
	function printElement()
	{
		if ($this->visible == 0)
		{
			// el registro esta oculto y no se imprime 
			return;
		}
		echo '<li class="work-position">';
		echo '<h5>' . $this->title . '</h5>';
		echo '<p>' . $this->description . '</p>';
		echo '<p>' . $this->getDuration() . '</p>';
		echo '<strong>Achievements:</strong>';
		echo '<ul>';
		echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
		echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
		echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
		echo '</ul>';
		echo '</li>';
	}

}
