<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\parcelController;
use App\Http\Controllers\foodController;
use App\Http\Controllers\rentalController;
use App\Http\Controllers\transportController;

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
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/acceptParcel', [parcelController::class, 'show']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/myParcelOrder', [parcelController::class, 'showOrder']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/cancelParcelOrder{parcel_id}', [parcelController::class, 'destroy']);
});

Route::get('myOrder', [parcelController::class, 'show']);

Route::resource('parcel', parcelController::class);
Route::resource('myOrder', parcelController::class);

Route::put('/acceptParcelOrder{parcel_id}',[parcelController::class, 'update']);

// Daus Route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/food', [FoodController::class, 'index'])->name('/food');;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/acceptOrder', [FoodController::class, 'show']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::put('/acceptFoodOrder{id}', [FoodController::class, 'update']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/MyFoodOrders', [FoodController::class, 'showMyOrders']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/cancelFoodOrder{id}', [FoodController::class, 'destroy']);
});

Route::resource('/makeOrder', FoodController::class);

// Daus Route

// Najua Route

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('car', [rentalController::class, 'index']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('acceptRequest', [rentalController::class, 'show']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('acceptRental', [rentalController::class, 'show']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('MyRentalOrders', [rentalController::class, 'showMyRental']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('cancelRentalOrder{id}', [rentalController::class, 'destroy']);
});

Route::put('acceptRental{id}',[rentalController::class, 'update']);

Route::resource('requestCar', rentalController::class);

// Najua Route

// faizah Route

// transport -------------------------------------------------------------------------

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/requestPickup', [transportController::class, 'index']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('acceptTransport', [transportController::class, 'show']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('myBookings', [transportController::class, 'showMyBookings']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('MyPickup{id}', [transportController::class, 'destroy']);
});

Route::put('acceptTransport{id}',[transportController::class, 'update']);

Route::resource('acceptPickup', transportController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('cancelBookingOrder{id}', [transportController::class, 'destroy']);
});


// Faizah Route

