<?php

namespace App\Providers;

use App\Models\Memorial;
use App\Models\Tribute;
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
        $left_memorials = Memorial::where('visibility', 0)->take(4)->orderBy('id', 'DESC')->get();
        $right_memorials = Memorial::where('visibility', 0)->skip(4)->take(4)->orderBy('id', 'DESC')->get();
        $memorials = Memorial::where('visibility', 0)->limit(6)->orderBy('id', 'DESC')->get();
        $tributes = Tribute::with('user')->take(3)->orderBy('id', 'DESC')->get();
        View::share([
            'memorials' => $memorials,
            'left_memorials' => $left_memorials,
            'right_memorials' => $right_memorials,
            'tributes' => $tributes,
        ]);
    }
}
