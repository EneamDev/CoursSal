<?php

use App\Http\Controllers\Auth\EtudiantAuthController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammationController;
use App\Http\Controllers\RechercherEmploiController;
use App\Http\Controllers\SalleController;
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

// Page d'accueil


/*
Route::get("/home", [HomeController::class, "index"])->name('index');


// Page d'administration
Route::get('/admin', function () {
    return view('auth.login');
});*/


// Page d'accueil Dashboard
/*Route::get('/dashboard', function () {
    return view('utilisateurs.home');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get("/", [HomeController::class, "index"])->name('index');


Route::get('/dashboard', [EtudiantController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Page des emplois du temps

Route::get('/emploi', [EmploiController::class, 'index'])->name("emploi");

/*Route::get('/connexion', [HomeController::class, 'connexion'])->name('connexion');*/

// Page de paramètre d'authentification

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Page de recherche d'emploi du temps

Route::get('/recherche-filiere', [EmploiController::class, "search"])
    ->prefix("emploi")
    ->name('recherche_emploi');
Route::post('/research', [EmploiController::class, "research"])
    ->prefix("emploi")
    ->name('research_emploi');

//Appel du controller de connexion des Etudiants
Route::get('/connexion', [HomeController::class, 'connexion'])->name('connexion');//->middleware(['auth']);

// Page pour rechercher des salles disponibles
Route::get("/recherche", [SalleController::class, "search"])
    ->prefix("/salle")
    ->name("recherche_salle");

// Page pour voir les salles
Route::get("voir", [SalleController::class, "index"])
    ->prefix("/salle")
    ->name("voir_salle");

// Page de programmation
Route::resource("programmation", ProgrammationController::class);


/**/

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



require __DIR__ . '/auth.php';
