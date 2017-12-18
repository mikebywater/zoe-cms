<?php

namespace Tests\Feature;

use App\Services\ReviewService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testService()
    {
        $service = new ReviewService();
        $service->all();

        $this->assertTrue(true);
    }
}
