<?php

use App\Http\Controllers\MainController;
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
    return view('welcome');
});
Route::get('home', [MainController::class, 'home'])->name('home');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('Service', [MainController::class, 'Service'])->name('Service');
Route::get('Productprocess', [MainController::class, 'Productprocess'])->name('Productprocess');
Route::get('Product', [MainController::class, 'Product'])->name('Product');
Route::get('Article', [MainController::class, 'Article'])->name('Article');
Route::get('Article_detail/{id}', [MainController::class, 'Article_detail'])->name('Article_detail');
Route::get('news', [MainController::class, 'news'])->name('news');
Route::get('news_detail/{id}', [MainController::class, 'news_detail'])->name('news_detail');

Route::get('contactus', [MainController::class, 'contactus'])->name('contactus');

Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
});
// process
Route::get('admin/process', [MainController::class, 'admin_process'])->name('admin.process');
Route::post('admin/process/add', [MainController::class, 'admin_process_add'])->name('admin.process.add');

Route::get('admin/article', [MainController::class, 'admin_article'])->name('admin.article');
Route::post('admin/article/add', [MainController::class, 'admin_article_add'])->name('admin.article.add');
Route::patch('admin/article/update/{id}', [MainController::class, 'admin_article_update'])->name('admin.article.update');
Route::post('admin/article/delete/{id}', [MainController::class, 'admin_article_delete'])->name('admin.article.delete');

Route::get('admin/news', [MainController::class, 'admin_news'])->name('admin.news');
Route::post('admin/news/add', [MainController::class, 'admin_news_add'])->name('admin.news.add');
Route::patch('admin/news/update/{id}', [MainController::class, 'admin_news_update'])->name('admin.news.update');
Route::post('admin/news/delete/{id}', [MainController::class, 'admin_news_delete'])->name('admin.news.delete');