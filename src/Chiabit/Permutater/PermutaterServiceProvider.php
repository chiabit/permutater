<?php namespace Chiabit\Permutater;

use Illuminate\Support\ServiceProvider;

class PermutaterServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('chiabit/permutater');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register any bindings
		$this->registerBindings();
	}

	/**
     * Register the application bindings that are required.
     */
    private function registerBindings()
    {
        // Bind to the "Asset" section
        $this->app->bind('permutater', function() {
            return new Permutater();
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('permutater');
	}

}