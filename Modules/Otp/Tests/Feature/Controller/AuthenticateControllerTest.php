<?php

namespace Modules\Otp\Tests\Feature\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticateControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function requestOtpPostWeb()
    {
        $this->assertDatabaseCount('otps', 0);

        $response = $this->post(
            route('otp.authenticate.request-otp.post.web', ["phone_number" => "09101010100"])
        );

        $this->assertDatabaseHas('otps', ["phone_number" => "09101010100"]);
        $this->assertDatabaseCount('otps', 1);
        $response->assertOk();
    }
}
