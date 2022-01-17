<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//use App\Page;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $home = 'Home';
            return $view->with('home',$home);
        });

        view()->composer('*', function($view){
            $blog = 'Blog';
            return $view->with('blog',$blog);
        });

        view()->composer('*', function($view){
            $login = 'Login';
            return $view->with('login',$login);
        });

        view()->composer('*', function($view){
            $register = 'Register';
            return $view->with('register',$register);
        });

        view()->composer('*', function($view){
            $contacts = 'Contacts';
            return $view->with('contacts',$contacts);
        });
    }
}
