<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


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
        Blade::directive("priceformat", function ($valor) {
            return "<?php echo number_format(floatval($valor),2,',','.').' €'; ?>";
        });
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
