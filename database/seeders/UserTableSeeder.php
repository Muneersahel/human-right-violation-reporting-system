<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    //Run the database seeds.

    public function run()
    {
        $user= new User();
        $user->email = 'admin@human.co.tz';
        $user->password = bcrypt('12345678');
        $user->first_name = 'Richard';
        $user->middle_name = 'Kanwagale';
        $user->last_name = 'Petro';
        $user->birth_date = '1992-05-19';
        $user->mobile_no = '255765532811';
        $user->gender = 'Male';
        $user->tribe ='Haya';
        $user->religion ='Christian';
        $user->merital_status ='Single';
        // $user->center_code = 'HQ';
        $user->role ='Supadmin';
        $user->reg_no = '2018-04-02640';
        $user->region ='Dar es Salaam;';
        $user->district ='Kinondoni';
        $user->ward ='Kijitonyama';
        $user->street ='Ustawi';
        $user->location_remarks ='Opposite to the Collage of Social Work ana Wellfare';
        $user->user_image = 'Richard_Petro.jpg';
        $user->save();
    }
}
