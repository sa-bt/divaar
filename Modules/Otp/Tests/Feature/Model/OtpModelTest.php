<?php

namespace Modules\Otp\Tests\Feature\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Modules\Otp\Entities\Otp;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OtpModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function test_is_code_expired_after_specified_period()
    {
        $expirationCode = Config::get('otp.expiration_code');
        $travelingPeriod = $expirationCode + 10;

        $data = Otp::factory()->setPhoneNumber("09101010100")->make()->toArray();
        Otp::query()->create($data);

        $this->assertDatabaseHas('otps', $data);
        $this->assertDatabaseCount('otps', 1);

        $otp = Otp::query()->where($data)->first();
        $createdAt = $otp->created_at->timestamp;
        $expiredAt = $createdAt + $expirationCode;
        $this->travel($travelingPeriod)->seconds();

//        $now = Carbon::now()->toDateTimeString();
        $now = Carbon::now()->timestamp;
        if ($now > $expiredAt)
            $otp->delete();

        $this->assertDeleted($otp);
        $this->assertDatabaseCount('otps', 0);
    }

    /**
     * @return void
     * @test
     */
    public function test_is_code_not_expired_before_expiration_period_ends()
    {
        $expirationCode = Config::get('otp.expiration_code');
        $travelingPeriod = $expirationCode - 10;

        $data = Otp::factory()->make()->toArray();
        Otp::query()->create($data);

        $this->assertDatabaseHas('otps', $data);
        $this->assertDatabaseCount('otps', 1);

        $otp = Otp::query()->where($data)->first();
        $createdAt = $otp->created_at->timestamp;
        $expiredAt = $createdAt + $expirationCode;
        $this->travel($travelingPeriod)->seconds();

//        $now = Carbon::now()->toDateTimeString();
        $now = Carbon::now()->timestamp;
        if ($now > $expiredAt)
            $otp->delete();

        $this->assertDatabaseHas('otps', $data);
        $this->assertDatabaseCount('otps', 1);
    }
}
