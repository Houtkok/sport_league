<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('home');
});
Route::get('/adminMode', function () {
    return view('adminMode');
});
Route::get('/coach',[CoachController::class,'show'])->name('coach.show');
Route::get('/coach/create',[CoachController::class,'create'])->name('coach.create');
Route::post('/coach/create',[CoachController::class,'create_handle'])->name('coach.create.handle');
Route::get('/coach/{coach_id}/update',[CoachController::class,'update'])->name('coach.update');
Route::put('/coach/{coach_id}/update',[CoachController::class,'update_handle'])->name('coach.update.handle');
Route::delete('/coach/{coach_id}',[CoachController::class,'destroy'])->name('coach.destroy');
// Route::prefix('api')->group(function(){
    //users
    // Route::get('/coaches',[CoachController::class,'show'])      ->name('coaches.show');
    // Route::get('/coaches',[CoachController::class,'create'])    ->name('coaches.show');
    // Route::get('/coaches',[CoachController::class,'update'])    ->name('coaches.show');
    // Route::get('/coaches',[CoachController::class,'destroy'])   ->name('coaches.show');

    //coach
    //national
    Route::get('/nationals',[NationalController::class,'show'])->name('nationals.show');
    Route::get('/nationals/create',[NationalController::class,'create'])->name('nationals.create');
    Route::post('/nationals/create',[NationalController::class,'create_handle'])->name('nationals.create.handle');
    Route::get('/nationals/{national_id}/update',[NationalController::class,'update'])->name('nationals.update');
    Route::put('/nationals/{national_id}/update',[NationalController::class,'update_handle'])->name('nationals.update.handle');
    Route::delete('/nationals/{national_id}',[NationalController::class,'destroy'])->name('nationals.destroy');
    
    //player
    Route::get('/players',[PlayerController::class,'show'])->name('players.show');
    Route::get('/players/create',[PlayerController::class,'create'])->name('players.create');
    Route::post('/players/create',[PlayerController::class,'create_handle'])->name('players.create.handle');
    Route::get('/players/{player_id}/update',[PlayerController::class,'update'])->name('players.update');
    Route::put('/players/{player_id}/update',[PlayerController::class,'update_handle'])->name('players.update.handle');
    Route::delete('/players/{player_id}',[PlayerController::class,'destroy'])->name('players.destroy');
    
    //schedule
    Route::get('/schedules',[ScheduleController::class,'show'])->name('schedules.show');
    Route::get('/schedules/create',[ScheduleController::class,'create'])->name('schedules.create');
    Route::post('/schedules/create',[ScheduleController::class,'create_handle'])->name('schedules.create.handle');
    Route::get('/schedules/{schedule_id}/update',[ScheduleController::class,'update'])->name('schedules.update');
    Route::put('/schedules/{schedule_id}/update',[ScheduleController::class,'update_handle'])->name('schedules.update.handle');
    Route::delete('/schedules/{schedule_id}',[ScheduleController::class,'destroy'])->name('schedules.destroy');

    //stadium
    Route::get('/stadiums',[StadiumController::class,'show'])->name('stadiums.show');
    Route::get('/stadiums/create',[StadiumController::class,'create'])->name('stadiums.create');
    Route::post('/stadiums/create',[StadiumController::class,'create_handle'])->name('stadiums.create.handle');
    Route::get('/stadiums/{stadium_id}/update',[StadiumController::class,'update'])->name('stadiums.update');
    Route::put('/stadiums/{stadium_id}/update',[StadiumController::class,'update_handle'])->name('stadiums.update.handle');
    Route::delete('/stadiums/{stadium_id}',[StadiumController::class,'destroy'])->name('stadiums.destroy');
    
    //teams
    Route::get('/teams',[TeamController::class,'show'])->name('teams.show');
    Route::get('/teams/create',[TeamController::class,'create'])->name('teams.create');
    Route::post('/teams/create',[TeamController::class,'create_handle'])->name('teams.create.handle');
    Route::get('/teams/{team_id}/update',[TeamController::class,'update'])->name('teams.update');
    Route::put('/teams/{team_id}/update',[TeamController::class,'update_handle'])->name('teams.update.handle');
    Route::delete('/teams/{team_id}',[TeamController::class,'destroy'])->name('teams.destroy');
    
    //tickets
    Route::get('/tickets',[TicketController::class,'show'])->name('tickets.show');
    Route::get('/tickets/create',[TicketController::class,'create'])->name('tickets.create');
    Route::post('/tickets/create',[TicketController::class,'create_handle'])->name('tickets.create.handle');
    Route::get('/tickets/{ticket_id}/update',[TicketController::class,'update'])->name('tickets.update');
    Route::put('/tickets/{ticket_id}/update',[TicketController::class,'update_handle'])->name('tickets.update.handle');
    Route::delete('/tickets/{ticket_id}',[TicketController::class,'destroy'])->name('tickets.destroy');
    Route::put('/tickets/purchase',[TicketController::class,'purchase'])->name('ticket.purchase');
    
// });