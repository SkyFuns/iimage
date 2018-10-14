<?php
namespace Nomandia\IImage\Facades;
use Illuminate\Support\Facades\Facade;

class IImage extends Facade {
	protected static function getFacadeAccessor() {
		return 'iimage';
	}
}