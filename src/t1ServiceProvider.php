<?php

namespace splittlogic\t1;

use Illuminate\Support\ServiceProvider;

class t1ServiceProvider extends ServiceProvider
{


	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 't1');
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		if ($this->app->runningInConsole()) {
			$this->bootForConsole();
		}
	}


	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/../config/t1.php', 't1');

		$this->app->singleton('t1', function ($app) {
			return new t1;
		});
	}


	public function provides()
	{
		return ['t1'];
	}


	protected function bootForConsole()
	{
		// Publishing the configuration file.
		$this->publishes([
			__DIR__.'/../config/t1.php' => config_path('t1.php'),
		], 't1.config');

		// Publishing the views.
    $this->publishes([
        __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
    ], 't1.views');

    // Publishing assets.
    $this->publishes([
        __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
    ], 'public');

	}


}
