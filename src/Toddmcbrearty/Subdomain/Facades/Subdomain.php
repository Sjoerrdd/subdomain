<?php namespace Toddmcbrearty\Subdomain\Facades;

use Illuminate\Support\Facades\Facade;

class Subdomain extends Facade
{
	protected static function getFacadeAccessor() { return 'subdomain'; }
}