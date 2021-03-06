<?php
namespace Kaankilic\FpdfInvoice;

use Illuminate\Support\ServiceProvider;

class FpdfServiceProvider extends ServiceProvider {

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
		$this->app['fpdf'] = $this->app->share(function($app)
        {
            return new FpdfInvoice;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('fpdf');
	}

}
