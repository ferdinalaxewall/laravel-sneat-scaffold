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
        if (! App::runningInConsole()) {
            Blade::directive('idr', fn ($expression) => "Rp <?php echo number_format({$expression}, 0, ',', '.'); ?>");
            Blade::if('has', function ($expression) {
                if (is_array($expression)) {
                    return auth()->user()->permissions()->whereIn('name', $expression)->count() > 0;
                } elseif (is_bool($expression)) {
                    return $expression;
                } else {
                    return auth()->user()->can($expression);
                }
            });

            // Default Datetime Config
            config(['app.locale' => 'id']);
            \Carbon\Carbon::setLocale('id');
            date_default_timezone_set('Asia/Jakarta');
        }
    }
}
