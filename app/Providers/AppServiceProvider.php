<?php

namespace App\Providers;

use App\Models\content\Comment;
use App\Models\Notification;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(125);

         view()->composer('admin.layouts.header' , function($view){
             $view->with('unseenComments' , Comment::where('seen', 0)->get());
             $view->with('notifications' , Notification::where('read_at', null)->get());
         });
    }
}
