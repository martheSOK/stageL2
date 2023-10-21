<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    

    public function boot()
    {
        Validator::extend('custom_contact_rule', function ($attribute, $value) {
            // Utilisez une expression régulière pour valider le champ "contact"
            return preg_match('/^(9[01236879]|70|79)\d{6}$/', $value) === 1;
        });
    }

}
