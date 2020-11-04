<?php

namespace App\Providers;

use App\Models\Models\Component;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        if (Schema::hasTable('components')) {
            $components = Component::get()->groupBy('slug')->toArray();
            view()->share('components', $components);
        }
    }
}
