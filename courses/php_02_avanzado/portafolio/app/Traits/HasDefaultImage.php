<?php

namespace App\Traits;

trait HasDefaultImage
{
	public function getImage(string $altText, int $size)
	{
		// si no existe una imagen utiliza una imagen default
		if (!$this->image) {
			return "https://ui-avatars.com/api/?name=$altText&size=$size";
		}
		return $this->image;
	}
}
