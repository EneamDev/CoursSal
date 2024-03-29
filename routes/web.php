<?php

use App\Http\Controllers\Auth\EtudiantAuthController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

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

//Route::get('/login', [AuthenticateController::class, "index"]);

/*Route::get("/", [HomeController::class, "index"]);*/


Route::get('/', [EtudiantAuthController::class, 'showLoginForm']);
Route::post('/etudiant/login', [EtudiantAuthController::class, 'login'])->name('etudiant.login');
//Route::get('/etudiant/logout', [EtudiantAuthController::class, 'logout'])->name('etudiant.logout');
Route::match(array('GET', 'POST'), '/etudiant/logout', [EtudiantAuthController::class, 'logout'])->name('etudiant.logout');



Route::group(['middleware' => ['auth:etudiant']], function () {
    Route::get('etudiant/dashboard', [EtudiantController::class, 'dashboard'])->name('etudiant.dashboard');
});


Route::get('/admin', function () {
    return view('auth.login');
});




/*//L’avis de vérification des e-mails
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Le gestionnaire de vérification des e-mails
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


//Renvoi de l’e-mail de vérification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');*/



Route::get('/dashboard', function () {
    return view('utilisateurs.home');
})->name('dashboard');


/*Route::get('/connexion', [HomeController::class, 'connexion'])->name('connexion');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Appel du controller de connexion des Etudiants
/*Route::post('/connexion', [HomeController::class, 'connexion'])->name('connexion')->middleware(['auth']);*/





require __DIR__.'/auth.php';
