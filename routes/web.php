<?php

    use App\Http\Controllers\Conversations\ConversationsController;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Auth;
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

    // after some changes

    Artisan::call('websockets:serve');

    Auth::routes();

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::get('/', [ConversationsController::class, 'index'])->name('conversations.index');
        Route::get('/conversations/create', [ConversationsController::class, 'create'])->name('conversations.create');
        Route::get('/conversations/{conversation}', [ConversationsController::class, 'show'])->name('conversations.show');

    });
