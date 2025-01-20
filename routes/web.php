<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/buy', function () {
    return view('buy');
})->name('buy');
Route::get('/sell', function () {
    return view('sell');
})->name('sell');
Route::get('/more', function () {
    return view('more');
})->name('more');
Route::get('/help', function () {
    return view('help');
})->name('help');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/auction', function () {
        // Your logic here, like returning a view
        return view('auctions/dashboard');
    });
});

use App\Http\Controllers\AuctionController;

use App\Http\Controllers\BidController;
use App\Models\Auction;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::post('/auctions/{auction}/bid', [BidController::class, 'store'])->name('bids.store');
    Route::post('/auctions/{auction}/end', [BidController::class, 'endAuction'])->name('auctions.end');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/auctions/create', [AuctionController::class, 'create'])->name('auctions.create');
    Route::post('/auctions', [AuctionController::class, 'store'])->name('auctions.store');
});
Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions.index');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::post('/auctions/{auction}/bid', [BidController::class, 'store'])->name('bids.store');
});

Route::get('/auctions/{auction}', [AuctionController::class, 'show'])->name('auctions.show');

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('/admin/dashboard', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return view('admin.dashboard'); // Ensure you create this view
    }

    return redirect('/'); // Redirect if not admin
})->middleware('auth'); // Ensure user is authenticated

use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});