<?php

use App\Http\Controllers\BookingController;
use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
    // $event = new Event;
    // $event->name = 'test from app';
    // $event->startDateTime = Carbon\Carbon::now();
    // $event->endDateTime = Carbon\Carbon::now()->addHour();
    // $event->save();

    // $e = Event::get();
    // dd($e);

});

//Route::post('booking', BookingController::class,'store');
Route::post('booking', [BookingController::class,'booking']);