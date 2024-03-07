<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share([
            'site_name' => 'Osmotec',
            'site_email' => 'contact@osmotec.ma',
            'site_email2' => 'info@osmotec.ma',
            'site_phone' => '+212 5 23 30 11 01',
            'site_phone2' => '+212 5 23 30 11 02',
            'site_address' => 'Lot 282 Zone Industriel Sud Ouest Mohammedia',
            'site_fb' => '#',
            'site_linkedin' => '#',
            'site_twiter' => '#',
            'site_youtube' => '#',
            'site_link' => '#',
        ]);
    }
}
