<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Guestbook;
use App\Http\Livewire\Home;
use App\Http\Livewire\Newsletter;
use App\Http\Livewire\Page;
use App\Http\Livewire\Projects;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', Home::class)->name('home');

Route::get('/newsletter', Newsletter::class)->name('newsletter');

Route::get('/page/{slug}', Page::class)->name('page');

Route::get('/guestbook', Guestbook::class)->name('guestbook');

Route::get('/blog', Blog::class)->name('blog');

Route::get('/projects', Projects::class)->name('projects');

Route::get('/about', About::class)->name('about');

Route::prefix('auth')->group(function () {
    Route::get('/github', [AuthController::class, 'redirectToGithub'])->name('github');
    Route::get('/github/callback', [AuthController::class, 'handleGithubCallback'])->name('github.callback');
});

Route::prefix('admin')->middleware(['admin'])->group(function () {
    require __DIR__.'/admin.php';
});