<?php

use Illuminate\Foundation\Inspiring;
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
=======
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
