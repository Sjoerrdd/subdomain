<?php namespace Toddmcbrearty\Subdomain;

class Subdomain
{

	public function getSub()
	{
		$subs = $this->parseUrl();
		return array_shift( $subs );
	}

	public function getAllSubs()
	{
		$subs = $this->parseUrl();
		array_pop( $subs );
		array_pop( $subs );
		return $subs;
	}
	public function isWWW()
	{
		return $this->getSub() == 'www' ? TRUE : FALSE;
	}

	private function parseUrl()
	{
		//if we are funning artisan or composer we need to return false because HTTP_HOST does not exist.
		if ( !isset( $_SERVER['HTTP_HOST'] ) ) return FALSE;

		$host = $_SERVER['HTTP_HOST'];

		//if we only have one . then we do not have a subdomain
		if ( substr_count( $host, '.' ) < 2 )
		{
			return FALSE;
		}

		return explode( '.', $_SERVER['HTTP_HOST'] );

		
	}

}