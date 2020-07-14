<?php

namespace App\Providers;

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
        // $sql = "select preco from veiculos ";
        
        // $veiculost=\DB::select($sql);
        // view()->share('veiculost',$veiculost);
    }
}
