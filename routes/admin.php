<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Pages;
use App\Http\Livewire\Admin\Projects;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Admin\Settings;
use App\Http\Livewire\Admin\Guestbook;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/guestbook', Guestbook::class)->name('admin.guestbook');
Route::get('/pages', Pages::class)->name('admin.pages');
Route::get('/projects', Projects::class)->name('admin.projects');
Route::get('/settings', Settings::class)->name('admin.settings');
Route::get('/users', Users::class)->name('admin.users');
