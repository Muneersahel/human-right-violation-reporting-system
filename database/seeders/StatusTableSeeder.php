<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    // Run the database seeds.

    public function run()
    {
        $status= new Status();
        $status->status = '1';
        $status->incident_status = 'Pending';
        $status->save();

        $status= new Status();
        $status->status = '2';
        $status->incident_status = 'Approved';
        $status->save();

        $status= new Status();
        $status->status = '3';
        $status->incident_status = 'Rejected';
        $status->save();

        $status= new Status();
        $status->status = '4';
        $status->incident_status = 'Under Justice';
        $status->save();

        $status= new Status();
        $status->status = '5';
        $status->incident_status = 'Sms Received';
        $status->save();

        $status= new Status();
        $status->status = '6';
        $status->incident_status = 'Sms Processing';
        $status->save();

        $status= new Status();
        $status->status = '7';
        $status->incident_status = 'Voice Received';
        $status->save();

        $status= new Status();
        $status->status = '8';
        $status->incident_status = 'Voice Processing';
        $status->save();
    }
}
