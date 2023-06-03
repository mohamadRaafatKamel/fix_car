<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Validator;

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
//        Schema::defaultStringLength(191);
        Validator::extend('arabic_numbers', function ($attributes, $value, $parameters, $validation) {
            $arabic_numbers = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
        
            $input = $value;
            if (!$input) {
                return true;
            }
            $chars = preg_split('//u', $input, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($chars as $char) {
                if (!in_array($char, $arabic_numbers)) {
                    return false;
                }
            }
        
            return true;
        });
    }
}
