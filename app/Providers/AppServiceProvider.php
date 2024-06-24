<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        if (!App::runningInConsole()) {
            Blade::directive('idr', fn ($expression) => "Rp <?php echo number_format({$expression}, 0, ',', '.'); ?>");

            // Default Datetime Config
            config(['app.locale' => 'id']);
            \Carbon\Carbon::setLocale('id');
            date_default_timezone_set('Asia/Jakarta');
        }
    }
}
