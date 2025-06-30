<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Order;


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
        view::composer('*', function ($view) {
            $latestOrder = Order::with('orderProducts.product')
                ->where('user_id', Auth::id())
                ->where('status', 'pending')
                ->latest()
                ->first();
            $view->with('latestOrder', $latestOrder);
        });
    }
}
