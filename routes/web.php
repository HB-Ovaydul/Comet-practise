<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminPageController;

/**
 *  Dashbaord Routes
 */

 Route::get('/dashboard', [AdminPageController::class, 'ShowDashborad'])->name('admin.dashboard');