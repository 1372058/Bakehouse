<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchant')->insert([
            'name' => 'Merchant01',
            'email' => 'Merchant01@gmail.com',
            'phone_number' => '1111111111111',
            'address' => 'Merchant01 A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('merchant')->insert([
            'name' => 'Merchant02',
            'email' => 'Merchant02@gmail.com',
            'phone_number' => '2222222222222',
            'address' => 'Merchant02 A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('merchant')->insert([
            'name' => 'Merchant03',
            'email' => 'Merchant03@gmail.com',
            'phone_number' => '333333333333333',
            'address' => 'Merchant03 A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('merchant')->insert([
            'name' => 'Merchant04',
            'email' => 'Merchant04@gmail.com',
            'phone_number' => '444444444444',
            'address' => 'Merchant04 A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('merchant')->insert([
            'name' => 'Merchant05',
            'email' => 'Merchant05@gmail.com',
            'phone_number' => '555555555555',
            'address' => 'Merchant05 A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
