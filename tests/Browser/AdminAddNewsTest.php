<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminAddNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Admin')
                ->assertSee('blackHole :)')
                ->clickLink('News list')
                ->clickLink('Add news')
                ->type('category', '')
                ->type('title', '')
                ->type('content', '')
                ->press('Add / Update')
//                ->assertSee('blackHole :)')
                ->assertSee('required')
            ;
        });
    }

    public function testAddCategoryForm() {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Admin')
                ->clickLink('Categories list')
                ->clickLink('Add category')
                ->type('name', '11')
                ->press('Add / Update')
                ->assertSee('The category name field is required.');
        });
    }
}
