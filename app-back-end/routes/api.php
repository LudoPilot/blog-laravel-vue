<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article; // ligne temporaire
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});
Route::get('/articles', [ArticleController::class, 'index']);

/** ROUTES CRUD 
 * J'ai mis auth:sanctum pour sécuriser les routes
 * **/
// Read
Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::middleware(['auth:sanctum'])->group(function () {
    // Create
    Route::post('/articles', [ArticleController::class, 'store']);

    // Update
    Route::put('/articles/{id}', [ArticleController::class, 'update']); 

    // Delete
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy']); 
});

Route::get('/create-fake-article', function () {
    $fakeArticle = [
        'title' => 'Article fictif',
        'publication_date' => now(),
        'content' => 'Ceci est un article fictif pour les tests.',
    ];

    $article = Article::create($fakeArticle);

    return response()->json($article, 201);
});