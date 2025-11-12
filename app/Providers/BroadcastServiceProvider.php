<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
