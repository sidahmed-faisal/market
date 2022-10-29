<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class productTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function test_categories_have_name(){
    //     $response = $this->post('/categories',[
    //         'name' => 'phones'
    //     ]);
    //     // dd($response);
    //     $this->assertTrue(true);
    // }
    public function test_database_is_exists(){
        $this->assertDatabaseHas('categories' , [
            'name' => 'laptops'
        ]);
    }
}
