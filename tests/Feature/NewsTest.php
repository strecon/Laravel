<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

//    public function test_example()
//    {
//        $response = $this->get('/');
//        $response->assertStatus(200);
//    }

    public function test_categories() {
        $response = $this->get('/news');
        $response->assertStatus(200)
        ->assertSeeInOrder([
            1 => 'Интриги',
            2 => 'Скандалы',
            3 => 'Расследования'
        ], $escaped = true)
        ->assertSeeInOrder(['Скандалы', 'Интриги', 'Расследования'], $escaped = true);
    }

    public function test_list() {
        $response = $this->get('/news/list/2');
        $response->assertStatus(200)
        ->assertSeeText('Category 2')
        ->assertSeeText('Category 3');
    }

    public function test_card() {
        $response = $this->get('/news/card/1');
        $response->assertStatus(200)
        ->assertSeeText('квинтэссенцию победы маркетинга над разумом', $escaped = true)
        ->assertSeeText('kjkdf iuh ihk kuj h', $escaped = true);
    }
}
