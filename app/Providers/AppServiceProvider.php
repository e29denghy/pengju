<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mobile_Detect;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //视图间共享数据
        $detect = new Mobile_Detect();
        $is_mobile = $detect->isMobile();
        if($is_mobile){
          $is_mobile = 'mobile';
        }
        else{
          $is_mobile = 'pc';
        }
       view()->share("mobile_device",$is_mobile);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
