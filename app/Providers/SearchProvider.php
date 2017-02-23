<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\ImdbSearcher;

class SearchProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
        $this->app->bind('App\Helpers\ImdbSearcher', function($app){
            return new ImdbSearcher(config('services.stripe.secret'));
        });
    }

    // public function provides(){
    //     return ['ImdbSearcher', 'App\Helpers\ImdbSearcher'];
    //}
}
