<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageResponseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function homepageTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testingtableTest()
    {
        $response = $this->get('/testingtable');
        $response->assertStatus(200);
    }
    public function benchmarkTest()
    {
        $response = $this->get('/benchmark');
        $response->assertStatus(500);
    }
    public function anlyticsTest()
    {
        $response = $this->get('/analytics');
        $response->assertStatus(500);
    }
    public function newsTest()
    {
        $response = $this->get('/news');
        $response->assertStatus(500);
    }
    public function contactTest()
    {
        $response = $this->get('/contact');
        $response->assertStatus(500);
    }
    public function AccountTest()
    {
        $response = $this->get('/account');
        $response->assertStatus(500);
    }
    
}
