<?php

namespace App\Console\Commands;

use App\Models\OtpVerification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CleanExpiredOtp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'otp:clean-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all expired OTP verification records from the database';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $deleted = OtpVerification::where('expired_at', '<', now())->delete();

        Log::info("OTP cleanup: {$deleted} expired record(s) deleted.");
        $this->info("Deleted {$deleted} expired OTP record(s).");

        return Command::SUCCESS;
    }
}
