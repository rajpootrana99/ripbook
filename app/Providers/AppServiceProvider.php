<?php

namespace App\Providers;

use App\Models\Memorial;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        $memorials = Memorial::where('visibility', 0)->limit(6)->orderBy('id', 'DESC')->get();
        View::share([
            'memorials' => $memorials,
        ]);
    }
}
