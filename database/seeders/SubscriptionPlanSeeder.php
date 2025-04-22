<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanSeeder extends Seeder
{

    public function run()
    {
        SubscriptionPlan::insert([
            ['name' => 'Basic Plan', 'price' => 1000, 'duration' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pro Plan', 'price' => 2500, 'duration' => 90, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
    
}
