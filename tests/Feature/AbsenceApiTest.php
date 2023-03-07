<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AbsenceApiTest extends TestCase
{

    public function test_get_all()
    {
        $response = $this->getJson('/api/annual-leave/');
        $response->assertStatus(200);
    }

    public function test_get_one()
    {
        $response = $this->getJson('/api/annual-leave/1');
        $response->assertStatus(200);
    }

    public function test_store_anual_leave()
    {
        $dummy = [
            "dates"=> ["2020-09-01", "1979-03-04"],
            "is_approved"=> 0,
            "desc"=> "Odit ut veniam iure fugit aut iusto iure.",
            "employee_id"=> 2,
            "approver_id"=> 1
        ];
        $response = $this->post('/api/annual-leave/',$dummy);
        $response->assertStatus(201);
    }

    public function test_update_anual_leave()
    {
        $dummy = [
            "dates"=> ["2020-09-01", "1979-03-04"],
            "is_approved"=> 0,
            "desc"=> "Odit ut veniam iure fugit aut iusto iure.",
            "employee_id"=> 2,
            "approver_id"=> 1
        ];
        $response = $this->patch('/api/annual-leave/4',$dummy);
        $response->assertStatus(200);
    }

    public function test_destroy_anual_leave()
    {
        $response = $this->delete('/api/annual-leave/1');
        $response->assertStatus(200);
    }
}
