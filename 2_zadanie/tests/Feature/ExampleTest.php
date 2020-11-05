<?php

namespace Tests\Feature;

use App\Models\Ticket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**@test */
    public function a_ticket_can_added_to_the_db()
    {
        $this->withoutExceptionHandling();

        $response=$this->post('/tickets',[
            'token' => '123',
            'amount'=>123,
            'ip'=>'123',
            'numbers'=>array(1,2,3,4),
        ]);

        $response->assertOk();
        $this->assertCount(1, Ticket::all());

    }

    /**@test */
    public function a_ticket_cannot_added_to_the_db_without_amouth()
    {
        $response=$this->post('/tickets',[
            'token' => '123',
            'amount'=>'',
            'ip'=>'123',
            'numbers'=>array(1,2,3,4),
        ]);

        $response->assertSessionHasErrors('amount');
    }

    /**@test */
    public function a_ticket_cannot_added_to_the_db_without_ip()
    {
        $response=$this->post('/tickets',[
            'token' => '123',
            'amount'=>'',
            'ip'=>'123',
            'numbers'=>array(1,2,3,4),
        ]);

        $response->assertSessionHasErrors('ip');
    }

    /**@test */
    public function a_ticket_cannot_added_to_the_db_without_numbers()
    {
        $response=$this->post('/tickets',[
            'token' => '123',
            'amount'=>'',
            'ip'=>'123',
            'numbers'=>'',
        ]);

        $response->assertSessionHasErrors('numbers');
    }


}
