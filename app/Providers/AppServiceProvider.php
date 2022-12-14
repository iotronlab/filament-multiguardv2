<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
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

        Filament::serving(
            function () {
                //  dd(Filament::getContext()->auth());
                Filament::forContext('vendor-panel', function () {
                    Filament::registerUserMenuItems([
                        'logout' => UserMenuItem::make()->label('Log Out')->url(route('vendor-panel.logout')),
                    ]);


                    //  dd(Filament::getContext());
                });
            }
        );
    }
}
