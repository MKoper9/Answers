<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Register extends DuskTestCase
{

    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *@Test
     * @return void
     */
    
      /** 
     * User will log. 
     * 
     * @test */
    public function a_user_can_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->tyle('email', 'michalkoperski@op.pl')
                    ->tyle('phone_number', 123456789)
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }      
     

    /** 
     * User will not logged in page with words in the phone_number area and without email
     * 
     * @test */
    public function cannot_register_with_words_in_phone_number_area_and_without_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('email', '')
                    ->type('phone_number', 'asd')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('Register')
                    ->assertPathIs('/Register')  
                    ->assertSee('Register');  
        });       

    }

    /** 
     * User will not logged in page without phone_number and  email
     * 
     * @test */
    public function cannot_register_without_phone_number_and_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('email', '')
                    ->type('phone_number', '')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('Register')
                    ->assertPathIs('/Register')  
                    ->assertSee('Register');  
        });     
    }

    /** 
     * User will not logged in page without confirm password
     * 
     * @test */
    public function cannot_register_without_confirm_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('email', 'michalkoperski@op.pl')
                    ->type('phone_number', 12345678)
                    ->type('password', '12345678')
                    ->type('password_confirmation', '123')
                    ->press('Register')
                    ->assertPathIs('/Register')  
                    ->assertSee('Register');  
        });     
    }

    /** 
     * User will not logged in page without password
     * 
     * @test */
    public function cannot_register_without_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('email', 'michalkoperski@op.pl')
                    ->type('phone_number', 12345678)
                    ->type('password', '')
                    ->type('password_confirmation', '')
                    ->press('Register')
                    ->assertPathIs('/Register')  
                    ->assertSee('Register');  
        });     
    }

    
}
