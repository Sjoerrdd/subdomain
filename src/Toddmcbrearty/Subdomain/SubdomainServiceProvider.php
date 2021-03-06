<?php namespace Toddmcbrearty\Subdomain;

use Illuminate\Support\ServiceProvider;

class SubdomainServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['subdomain'] = $this->app->share(function($app)
        {
            return new Subdomain;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('subdomain');
	}

}