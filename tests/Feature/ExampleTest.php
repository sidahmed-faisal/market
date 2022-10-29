<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use Database\Factories\CategoryFactory;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_the_application_navigate_to_home()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function test_the_application_navigate_to_store_products()
    {
        $response = $this->get('storeproducts');

        $response->assertStatus(200);
    }
    public function test_the_application_creates_categories()
    {
        $response = $this->get('categories/create');

        $response->assertStatus(200);
    }

    // public function test_categories_have_name()
    // {
    //     $category = Category::factory()->store();
    //     $this->assertNotEmpty($categories->name);

    //     $response->assertStatus(200);
    // }


}
