<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('plans')->insert([
            'id' => 1,
            'name' => 'Basic Plan',
            'name_ar' => 'الخطة الأساسية',
            'description' => 'Basic subscription plan',
            'description_ar' => 'خطة الاشتراك الأساسية',
            'sub_users' => 10,
            'subscription_period' => 30,
            'price' => 0.00,
            'highlighted' => 0,
            'upgrade_to' => null,
            'status' => 1,
            'status_ex' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
