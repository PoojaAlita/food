<?php

use App\Http\Controllers\{ProfileController,StateController,CityController,FoodController,ContactController,FoodDetailController,AboutController};
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Models\{Food,State,City,User};


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


Route::get('/dashboard', function () {
    $food = Food::where('status',1)->get()->count();
    $data['state']=State::where('status',1)->get()->count();
    $data['city'] = City::where('status',1)->get()->count();
    $data['user'] = User::where('status',1)->get()->count();
    return view('layouts.dashboard',compact('food','data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




/*User Dashboard*/
Route::get('/', function () {
    return view('layouts.frontend.dashboard');
})->name('frontendDashboard');

Route::group(['middleware' => 'auth'], function(){
        /*State Route*/
        Route::get('index', [StateController::class, 'index'])->name('dashboard.state');
        Route::post('/store', [StateController::class, 'store']);
        Route::post('/edit', [StateController::class, 'edit']);
        Route::post('/listing', [StateController::class, 'listing']);
        Route::post('/delete', [StateController::class, 'delete']);
        Route::post('/validate-state', [StateController::class, 'validate_state']);

        /*City Route*/
        Route::get('city-index', [CityController::class, 'index'])->name('dashboard.city');
        Route::post('city-store', [CityController::class, 'store']);
        Route::post('city-edit', [CityController::class, 'edit']);
        Route::post('city-listing', [CityController::class, 'listing']);
        Route::post('city-delete', [CityController::class, 'delete']);
        Route::post('validate-city', [CityController::class, 'validate_city']);
        Route::post('get-city-name',[CityController::class, 'get_city_name']);

        /*Donor Listing Route*/
        Route::get('donor-listing', [RegisteredUserController::class, 'listing'])->name('dashboard.donor');

        /*Food Detail Route*/
        Route::get('food-index', [FoodController::class, 'index'])->name('dashboard.food');
        Route::post('food-store', [FoodController::class, 'store']);
        Route::post('food-edit', [FoodController::class, 'edit']);
        Route::post('food-listing', [FoodController::class, 'listing']);
        Route::post('food-delete', [FoodController::class, 'delete']);

         /*Food Listing on Admin Route*/
         Route::get('food-listing', [FoodController::class, 'food_listing'])->name('dashboard.food.listing');
        /*Food Request Route */
         Route::get('food-request',[FoodDetailController::class, 'foodRequest'])->name('food.request');
         Route::post('food-accept-request',[FoodDetailController::class, 'foodAcceptRequest'])->name('food.accept.request');

});

  /* Food Detail Route*/
  Route::get('food-detail-index',[FoodDetailController::class, 'food_index'])->name('dashboard.food.detail');
  Route::post('food-detail-store',[FoodDetailController::class, 'store'])->name('food.detail.store');

/*About Route*/
Route::get('/about', function(){
    return view('layouts.frontend.about')->name('about');
});


Route::get('/about',[AboutController::class, 'index'])->name('about');


require __DIR__.'/auth.php';
