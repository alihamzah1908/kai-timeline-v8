<?php

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
    return view('auth.login');
})->name('login');
Route::post('/process-login', 'App\Http\Controllers\Auth\AuthController@processLogin')->name('process.login');
Route::get('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');

Route::get('/dashboard/program-rup', 'App\Http\Controllers\DashboardController@get_program')->name('program.rup');
Route::get('/dashboard/program-rup/card', 'App\Http\Controllers\DashboardController@get_dashboard_card')->name('get.dashboard.card');
Route::get('/dashboard/program-rup/department', 'App\Http\Controllers\DashboardController@get_department')->name('get.department');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('home');
    // USER
    Route::get('/users', 'App\Http\Controllers\Users\UserController@index')->name('users.index');
    Route::get('/users/create', 'App\Http\Controllers\Users\UserController@create')->name('users.create');
    Route::get('/users/edit/{id}', 'App\Http\Controllers\Users\UserController@edit')->name('users.edit');
    Route::post('/users/store', 'App\Http\Controllers\Users\UserController@store')->name('users.store');

    // ROLES
    Route::get('/roles', 'App\Http\Controllers\Auth\RoleController@index')->name('roles.index');
    Route::get('/roles/create', 'App\Http\Controllers\Auth\RoleController@create')->name('roles.create');
    Route::get('/roles/{id}', 'App\Http\Controllers\Auth\RoleController@show')->name('roles.show');
    Route::get('/roles/delete/{id}', 'App\Http\Controllers\Auth\RoleController@destroy')->name('roles.delete');
    Route::post('/roles/store', 'App\Http\Controllers\Auth\RoleController@store')->name('roles.store');


    // TIMELINE
    Route::get('/data/timeline', 'App\Http\Controllers\TimelineController@data')->name('data.timeline');
    Route::get('/data/timeline/get-timeline', 'App\Http\Controllers\TimelineController@get_timeline')->name('get.timeline');
    Route::get('/data/timeline/show/{id}', 'App\Http\Controllers\TimelineController@show')->name('timeline.show');
    Route::get('/data/timeline/approve', 'App\Http\Controllers\TimelineController@approve')->name('timeline.approve');
    Route::get('/data/timeline/reject', 'App\Http\Controllers\TimelineController@reject')->name('timeline.reject');
    Route::post('/data/timeline/store', 'App\Http\Controllers\TimelineController@store')->name('timeline.store');

    // SP3
    Route::get('/data/sp-3', 'App\Http\Controllers\Sp3Controller@data')->name('data.sp3');
    Route::get('/data/sp-3/show/{id}', 'App\Http\Controllers\SP3Controller@show')->name('sp3.show');
    Route::get('/data/sp-3/approve', 'App\Http\Controllers\Sp3Controller@approve')->name('sp3.approve');
    Route::get('/data/sp-3/reject', 'App\Http\Controllers\Sp3Controller@reject')->name('sp3.reject');
    Route::get('/data/sp-3/evaluasi/{id}', 'App\Http\Controllers\Sp3Controller@form_evaluasi')->name('evaluasi.form');
    Route::post('/data/sp-3/store', 'App\Http\Controllers\Sp3Controller@store')->name('sp3.store');
    Route::post('/data/sp-3/evaluasi/store', 'App\Http\Controllers\Sp3Controller@evaluasi_store')->name('evaluasi.store');

    // PBJ & CONTRACT
    Route::get('/procurement/task-pbj', function () {
        return view('procurement.index');
    })->name('list.taskpbj');
    Route::get('/procurement/task-contract', function () {
        return view('contract.index');
    })->name('list.taskcontract');
    Route::get('/procurement/list-procurement', function () {
        return view('procurement.index');
    })->name('list.procurement');
    Route::get('/procurement/list-contract', function () {
        return view('contract.index');
    })->name('list.contract');
    
    Route::get('/data/procurement/pbj', 'App\Http\Controllers\ProcurementController@data')->name('data.procurement');
    Route::get('/data/procurement/contract', 'App\Http\Controllers\ContractController@data')->name('data.contract');
    Route::get('/data/procurement/sp3', 'App\Http\Controllers\ProcurementController@getSp3')->name('procurement.sp3');
    Route::get('/data/procurement/show/{id}', 'App\Http\Controllers\ProcurementController@show')->name('procurement.show');
    Route::get('/data/contract/show/{id}', 'App\Http\Controllers\ContractController@show')->name('contract.show');
    Route::get('/data/procurement/approve', 'App\Http\Controllers\ProcurementController@approve')->name('procurement.approve'); 
    Route::get('/data/procurement/reject-penawaran', 'App\Http\Controllers\ProcurementController@reject_penawaran')->name('reject.pengadaan'); 
    Route::get('/data/procurement/review/rks', 'App\Http\Controllers\ProcurementController@data_rks')->name('data.view.rks');
    Route::post('/data/procurement/store/draft', 'App\Http\Controllers\ProcurementController@store')->name('procurement.store');
    Route::post('/data/procurement/status/reviewing', 'App\Http\Controllers\ProcurementController@reviewing')->name('procurement.reviewing');
    Route::post('/data/procurement/save-tender', 'App\Http\Controllers\ProcurementController@save_tender')->name('save.tender');
    Route::post('/data/procurement/save-aandwidjzing', 'App\Http\Controllers\ProcurementController@save_aanwidjzing')->name('save.aanwidjzing');
    Route::post('/data/procurement/save-document-penawaran', 'App\Http\Controllers\ProcurementController@save_dokumen_penawaran')->name('save.document-penawaran');
    Route::post('/data/procurement/save-evaluasi-penawaran', 'App\Http\Controllers\ProcurementController@save_evaluasi_penawaran')->name('save.evaluasi-penawaran');
    Route::post('/data/procurement/save-klarifikasi', 'App\Http\Controllers\ProcurementController@save_klarifikasi')->name('save.klarifikasi');
    Route::post('/data/procurement/save-pemenang', 'App\Http\Controllers\ProcurementController@save_pemenang')->name('save.pemenang');

    //DASHBOARD & HS
    Route::get('/data/hs/list', 'App\Http\Controllers\HsController@data')->name('data.hs');

    Route::get('/dashboard/monitoring-rup', function () {
        return view('dashboard.monitoring-rup.index');
    })->name('monitoring.rup');
    Route::get('/dashboard/monitoring-contract', function () {
        return view('dashboard.monitoring-contract.index');
    })->name('monitoring.contract');
    Route::get('/dashboard/monitoring-pbj', function () {
        return view('dashboard.monitoring-pbj.index');
    })->name('monitoring.pbj');
    Route::get('/dashboard/monitoring-klaring', function () {
        return view('dashboard.monitoring-klaring.index');
    })->name('monitoring.klaring');
    Route::get('/dashboard/monitoring-rab', function () {
        return view('dashboard.monitoring-rab.index');
    })->name('monitoring.rab');
    Route::get('/dashboard/monitoring-vendor', function () {
        return view('dashboard.monitoring-vendor.index');
    })->name('monitoring.vendor');
    Route::get('/dashboard/monitoring-program', function () {
        return view('dashboard.monitoring-program.index');
    })->name('monitoring.program');
    Route::get('/dashboard/monitoring-warehouse', function () {
        return view('dashboard.monitoring-warehouse.index');
    })->name('monitoring.warehouse');

    //MENU-TRX
    Route::get('/timeline/task-approval', function () {
        return view('timeline.task-approval.index');
    })->name('task.approval');
    Route::get('/timeline/list-timeline', function () {
        return view('timeline.list-timeline.index');
    })->name('list.timeline');
    Route::get('/timeline/signed-timeline', function () {
        return view('timeline.signed-timeline.index');
    })->name('signed.timeline');
    Route::get('/npp/list-npp', function () {
        return view('npp.list-npp.index');
    })->name('list.npp');
    Route::get('/sp-3/task-approval', function () {
        return view('sp-3.task-approval.index');
    })->name('sp3.task.approval');
    Route::get('/sp-3/list-sp-3', function () {
        return view('sp-3.list-sp3.index');
    })->name('list.sp3');
    Route::get('/sp-3/evaluasi/detail', function () {
        return view('sp-3.evaluasi.sp');
    })->name('evaluasi.sp3');
    Route::get('/pbj/list-pbj', function () {
        return view('pbj.index');
    })->name('list.pbj');
    Route::get('/hs/list-hs', function () {
        return view('hs.index');
    })->name('list.hs');
});
Route::get('/sp-3/evaluasi/print/sp', 'App\Http\Controllers\Sp3Controller@generate_sp')->name('evaluasi.print.sp');
