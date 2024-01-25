<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentIcon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        FilamentIcon::register([
            'panels::sidebar.group.collapse-button' => 'heroicon-o-bars-3-bottom-left',
            'panels::sidebar.expand-button' => 'heroicon-o-bars-4',
            'panels::sidebar.collapse-button' => 'heroicon-o-x-mark',
        ]);

        if (env('APP_ENV', 'production') === 'production') {
            URL::forceScheme('https');
        }
    }
}
