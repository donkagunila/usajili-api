<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Resources\OpeningResource as OpeningResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        OpeningResource::withoutWrapping();
    }
}
