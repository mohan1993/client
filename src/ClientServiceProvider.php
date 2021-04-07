<?php 

namespace Sales\Client;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
	/**
	  * Perform post registration booting of services
	  *
	  * @return void
	  */
	  public function boot()
	  {
		  //TODO publish assets
		  
		  //LoadMigration
		  $this->loadMigrationsFrom( __DIR__ . '/../database/migrations');
	  }
	  
	  public function register()
	  {
		  
	  }
}

