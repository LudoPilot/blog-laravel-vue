<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Faker\Factory as Faker;
use App\Models\Article;

class Create8ArticlesTest extends TestCase
{
    // use RefreshDatabase;

    public function testCreateEightArticles()
    {
		$faker = Faker::create();

		for ($i = 0; $i < 8; $i++) {
			$articleData = [
				'title' => $faker->sentence,
				'publication_date' => now(),
				'content' => $faker->paragraph,
			];
	
			Article::create($articleData);
		}        
    }
}
