<?php
namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    //use RefreshDatabase;

    public function test_create_article()
    {
        $article = Article::factory()->create();
        
		$this->assertDatabaseHas('articles', [
			'id' => $article->id,
		]);
    }
}