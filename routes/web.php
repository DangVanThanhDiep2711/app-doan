<?php


use App\Http\Controllers\Client\CountryController;
use App\Http\Controllers\Client\ShowTourController;
use App\Http\Controllers\Client\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AddCountryController;
use App\Http\Controllers\Admin\MountainController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JoinController;
use App\Http\Controllers\Admin\MemberJoinController;
use App\Http\Controllers\Client\TourController;
use App\Http\Controllers\Client\ContactusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Client\MountainsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/client/home/dangky', function () {
    return view('client/home/dangky');
});
Route::get('/', function () {
    return view('client/home/homepage');
});
Route::get('client/sign-in/login', [LoginController::class,'showLogin'] )->name('client.sign-in.login');
Route::post('auth/login', [LoginController::class,'login'] )->name('login');
Route::get('auth/logout', Logout::class )->name('logout');
Route::get('client/home/howtoknow', function () {
    return view('client/home/howtoknow');
})->name('client.home.howtoknow');
Route::get('/',[BlogController::class ,'blog'])->name('client.home');
Route::prefix('client')->name('client.')->group(function () {
    Route::prefix('country')->name('country.')->controller(CountryController::class)->group(function () {
        Route::get('country/{id}', 'country')->name('country');
    });
    Route::prefix('sign-in')->name('sign-in.')->controller(SigninController::class)->group(function () {
        Route::get('login', 'showLogin')->name('showLogin');
        Route::post('login', 'login')->name('login');
        Route::get('register', 'showRegister')->name('showRegister');
        Route::post('register', 'register')->name('register');
        Route::post('store', 'store')->name('store');
    });
    Route::prefix('tour')->name('tour.')->controller(TourController::class)->group(function () {
        Route::get('create', 'create')->name('create');
        Route::get('show', 'show')->name('show');
        Route::get('showvalidate', 'showvalidate')->name('showvalidate');
        Route::get('showrejected', 'showrejected')->name('showrejected');
        Route::get('waiting', 'waiting')->name('waiting');
        Route::get('memberjoin', 'memberjoin')->name('memberjoin');
    });
    Route::prefix('contactus')->name('contactus.')->controller(ContactusController::class)->group(function () {
        Route::get('show', 'show')->name('show');
    });
    Route::prefix('mountain')->name('mountain.')->controller(MountainsController::class)->group(function () {
        //vietNam
        Route::get('Ba-Den', 'baden')->name('Ba-Den');
        Route::get('Fansipan', 'fansipan')->name('Fansipan');
        Route::get('Chua', 'chua')->name('Chua');
        Route::get('Chua-Chan', 'chuachan')->name('Chua-Chan');
        Route::get('Langbiang', 'langbiang')->name('Langbiang');
        Route::get('Pu-Si-Lung', 'pusilung')->name('Pu-Si-Lung');
        Route::get('Phu-Luong', 'phuluong')->name('Phu-Luong');
        Route::get('Rao-Co', 'raoco')->name('Rao-Co');
        //China
        Route::get('Taishan', 'taishan')->name('Taishan');
        Route::get('Huashan', 'huashan')->name('Huashan');
        Route::get('Hengshan', 'hengshan')->name('Hengshan');
        Route::get('Hanshan', 'hanshan')->name('Hanshan');
        Route::get('Songshan', 'songshan')->name('Songshan');
        Route::get('Wudang', 'wudang')->name('Wudang');
        Route::get('Qingcheng', 'qingcheng')->name('Qingcheng');
        Route::get('Laojun', 'laojun')->name('Laojun');

        //Japan
        Route::get('asahi', 'asahi')->name('Asahi');
        Route::get('zao', 'zao')->name('Zao');
        Route::get('asama', 'asama')->name('Asama');
        Route::get('norikura', 'norikura')->name('Norikura');
        Route::get('fujisan', 'fujisan')->name('Fujisan');
        Route::get('kitadake', 'kitadake')->name('Kitadake');
        Route::get('hotakadake', 'hotakadake')->name('Hotakadake');
        Route::get('yari', 'yari')->name('Yari');
        //pakistan
        Route::get('nangaparbat', 'nangaparbat')->name('Nangaparbat');
        Route::get('k2', 'k2')->name('K2');     
        Route::get('', '')->name('');

        //india
        Route::get('Kanchenjunga', 'kanchenjunga')->name('Kanchenjunga');
        Route::get('Kabru', 'kabru')->name('Kabru');
        Route::get('Triund', 'triund')->name('Triund');
        Route::get('Doddabetta', 'doddabetta')->name('Doddabetta');
        Route::get('Himalaya', 'himalaya')->name('Himalaya');
        Route::get('Chembra', 'chembra')->name('Chembra');
        Route::get('Apharwat', 'apharwat')->name('Apharwat');
        Route::get('Kodachadri', 'kodachadri')->name('Kodachadri');
    });
});
Route::prefix('admin')->name('admin.')->group(function () {
        Route::prefix('addcountry')->name('addcountry.')->middleware('check_login')->controller(AddCountryController::class)->group(function () {
            Route::get('index', 'index')->name('index');
    
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    
        Route::prefix('mountain')->name('mountain.')->middleware('check_login')->controller(MountainController::class)->group(function () {
            Route::get('index', 'index')->name('index');
    
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    
        Route::prefix('user')->name('user.')->middleware('check_login')->controller(UserController::class)->group(function () {
            Route::get('index', 'index')->name('index');
    
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('join')->name('join.')->controller(JoinController::class)->group(function () {
            Route::get('index', 'index')->middleware('check_login')->name('index');
    
            Route::get('create', 'create')->middleware('check_login')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->middleware('check_login')->name('edit');
            Route::post('update/{id}', 'update')->middleware('check_login')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->middleware('check_login')->name('destroy');
        });
        Route::prefix('memberjoin')->name('memberjoin.')->controller(MemberJoinController::class)->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('show', 'show')->name('show');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    });