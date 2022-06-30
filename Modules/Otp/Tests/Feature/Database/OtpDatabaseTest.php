<?php

namespace Modules\Otp\Tests\Feature\Database;

use Modules\Otp\Entities\Otp;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OtpDatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function insert_otp_data()
    {
        $data = Otp::factory()->make()->toArray();
        $otp = Otp::query()->create($data);
        $this->assertDatabaseHas('otps', $data);
    }
}
