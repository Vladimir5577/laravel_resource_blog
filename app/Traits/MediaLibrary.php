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
		return $this->getFirstMedia()->getUrl();
	}
}