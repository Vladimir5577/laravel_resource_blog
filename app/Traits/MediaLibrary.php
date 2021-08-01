<?php

namespace App\Traits;

trait MediaLibrary
{
	public function setImageAttribute(string $imagePath): void
	{
		$this->addMedia($imagePath)
            ->preservingOriginal()
            ->toMediaCollection();
	}

	public function getImageAttribute(): string
	{
		// return public_path('/media/5/prog_2.png');


		return $this->getMedia()[0]->getFullUrl();

		// return $this->getFirstMediaUrl();

		// return $this->getFirstMedia()->getUrl();
	}
}