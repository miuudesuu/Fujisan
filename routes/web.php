<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\HutController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(CommentController::class)->group(function(){
    Route::get('/comments/create/{post}','create')->name('create'); 
    Route::post('/comments','store')->name('store');
});

Route::get('/rules', [RuleController::class,'index']);

Route::get('/huts', [HutController::class,'index']);

Route::get('/questions', [QuestionController::class,'index']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/questions/create', [QuestionController::class,'create']);
Route::get('/questions/{question}', [QuestionController::class,'show']);
Route::get('/questions/{question}/edit', [QuestionController::class, 'edit']);
Route::delete('/questions/{question}', [QuestionController::class, 'delete']);
Route::put('/questions/{question}', [QuestionController::class, 'update']);

Route::get('/answers/create/{question}', [AnswerController::class, 'create']);
Route::post('/answers', [AnswerController::class, 'store']);


require __DIR__.'/auth.php';