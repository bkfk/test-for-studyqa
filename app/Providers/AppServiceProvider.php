<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\FirstFeastMember;
use App\Observers\FirstFeastMemberObserver;
use App\SecondFeastMember;
use App\Observers\SecondFeastMemberObserver;

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
        FirstFeastMember::observe(FirstFeastMemberObserver::class);
        SecondFeastMember::observe(SecondFeastMemberObserver::class);
    }
}
