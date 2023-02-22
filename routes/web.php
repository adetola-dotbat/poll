<?php

use App\Http\Controllers\PresidentialController;
use App\Http\Controllers\ViewController;
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
});



// result
Route::get('/presidential_result', [ViewController::class, 'viewPresidential'])->name('presidential.result');
Route::get('/senatorial_result', [ViewController::class, 'viewSenatorial'])->name('senatorial.result');
Route::get('/reps_result', [ViewController::class, 'viewReps'])->name('reps.result');
// poll
Route::get('/presidential_poll', [ViewController::class, 'presidentialPoll'])->name('presidential.poll');
Route::get('/senatorial_poll', [ViewController::class, 'senatorialPoll'])->name('senatorial.poll');
Route::get('/reps_poll', [ViewController::class, 'repsPoll'])->name('reps.poll');

// poll view
Route::get('/president', [ViewController::class, 'president'])->name('president');
Route::get('/rep', [ViewController::class, 'rep'])->name('rep');
Route::get('/senate', [ViewController::class, 'senate'])->name('senate');

// poll update
Route::post('/president/update', [ViewController::class, 'presidentStore'])->name('president.store');
Route::post('/rep/update', [ViewController::class, 'repStore'])->name('rep.store');
Route::post('/senate/update', [ViewController::class, 'senateStore'])->name('senate.store');

// other views
Route::get('/graph', [ViewController::class, 'graph'])->name('graph');
Route::get('/score_data', [ViewController::class, 'scoreData'])->name('sdata');
Route::get('/reps_data', [ViewController::class, 'repsData'])->name('reps.data');
Route::get('/report_details', [ViewController::class, 'reportDetails'])->name('report.details');

// senate pull origin
Route::get('/central_report', [ViewController::class, 'centralReport'])->name('central.report');
Route::get('/west_report', [ViewController::class, 'westReport'])->name('west.report');
Route::get('/east_report', [ViewController::class, 'eastReport'])->name('east.report');

Route::get('/result', [ViewController::class, 'result'])->name('result');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
Route::post('/login', [ViewController::class, 'loginUser'])->name('login');
// Route::post('/login_user', [ViewController::class, 'loginUser'])->name('login.user');
Route::get('/logout', [ViewController::class, 'logout'])->name('logout');